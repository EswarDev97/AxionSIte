<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function insertRecord($data)
    {
        $user = new User();

        $user->user_uuid = @$data['user_uuid'];
        $user->user_type = @$data['user_type'];
        $user->user_name = @$data['user_name'];
        $user->first_name = @$data['first_name'];
        $user->last_name = @$data['last_name'];
        $user->email = @$data['email'];
        $user->email_verified_at = @$data['email_verified_at'];
        $user->password = @$data['password'];
        $user->status = @$data['status'];
        $user->created_by = @$data['created_by'];
        $user->save();

        return $user->where('id', $user->id)->first();
    }

    public static function updateRecord($data, $id)
    {
        $user = User::where('id', $id)->first();

        $user->user_type = @$data['user_type'] ? @$data['user_type'] : $user->user_type;
        $user->user_name = @$data['user_name'] ? @$data['user_name'] : $user->user_name;
        $user->first_name = @$data['first_name'] ? @$data['first_name'] : $user->first_name;
        $user->last_name = @$data['last_name'] ? @$data['last_name'] : $user->last_name;
        $user->email = @$data['email'] ? @$data['email'] : $user->email;
        $user->email_verified_at = @$data['email_verified_at'] ? @$data['email_verified_at'] : $user->email_verified_at;
        $user->password = @$data['password'] ? @$data['password'] : $user->password;
        $user->status = @$data['status'] ? @$data['status'] : $user->status;
        $user->updated_by = @$data['updated_by'] ? @$data['updated_by'] : $user->updated_by;
        $user->save();

        return $user->where('id', $user->id)->first();
    }

    public static function changePassword($data, $id)
    {
        $user = User::where('user_uuid', $id)->first();

        $user->password = (key_exists('password', $data)) ? $data['password']: $user->password; 
        $user->updated_by = (key_exists('updated_by', $data)) ? $data['updated_by']: $user->updated_by;
        
        $user->save();
        return $user->where('id', $user->id)->first();
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function setFirstNameAttribute($firstName)
    {
        if (!empty($firstName))
        {
            $this->attributes['first_name'] = ucfirst($firstName);
        }
    }

    public function isSuperAdmin()
    {
        return auth()->user()->user_type === 'SUPER_ADMIN'; 
    }

    public function isAdmin()
    {
        return auth()->user()->user_type === 'ADMIN'; 
    }

    public function isStudent()
    {
        return auth()->user()->user_type === 'STUDENT'; 
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class, 'user_id', 'id');
    }
}
