<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Masters\CountryMaster;
use Exception;

class UserProfile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'user_profiles';
    protected $fillable = [
        'profile_uuid', 'user_id', 'first_name', 'last_name', 'email', 'phone', 'country', 'profile_image', 'status', 'created_by', 'updated_by'
    ]; 

    public static function insertRecord($data)
    {
        $userProfile = new UserProfile();

        $userProfile->profile_uuid = @$data['profile_uuid'];
        $userProfile->user_id = @$data['user_id'];
        $userProfile->first_name = @$data['first_name'];
        $userProfile->last_name = @$data['last_name'];
        $userProfile->email = @$data['email'];
        $userProfile->phone = @$data['phone'];
        $userProfile->country = @$data['country'];
        $userProfile->profile_image = @$data['profile_image'];
        $userProfile->status = @$data['status'];
        $userProfile->created_by = @$data['created_by'];
        $userProfile->save();
        
        return $userProfile->where('id', $userProfile->id)->first();
    }

    public static function updateRecord($data, $id)
    {
        $userProfile = UserProfile::where('id', $id)->first();

        $userProfile->user_id = @$data['user_id'] ? @$data['user_id'] : $userProfile->user_id;
        $userProfile->first_name = @$data['first_name'] ? @$data['first_name'] : $userProfile->first_name;
        $userProfile->last_name = @$data['last_name'] ? @$data['last_name'] : $userProfile->last_name;
        $userProfile->email = @$data['email'] ? @$data['email'] : $userProfile->email;
        $userProfile->phone = @$data['phone'] ? @$data['phone'] : $userProfile->phone;
        $userProfile->country = @$data['country'] ? @$data['country'] : $userProfile->country;
        $userProfile->profile_image = @$data['profile_image'] ? @$data['profile_image'] : $userProfile->profile_image;
        $userProfile->status = @$data['status'] ? @$data['status'] : $userProfile->status;
        $userProfile->updated_by = @$data['updated_by'] ? @$data['updated_by'] : $userProfile->updated_by;
        $userProfile->save();

        return $userProfile->where('id', $userProfile->id)->first();
    }

    public function countryDetails()
    {
        return $this->hasOne(CountryMaster::class, 'id', 'country');
    }
}
