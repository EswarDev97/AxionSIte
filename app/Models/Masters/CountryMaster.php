<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Exception;

class CountryMaster extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'country_master';
    protected $fillable = [
        'country_uuid', 'country_code', 'country_name', 'created_by', 'updated_by'
    ]; 

    public static function insertRecord($data)
    {
        $countryMaster = new CountryMaster();

        $countryMaster->country_uuid = @$data['country_uuid'];
        $countryMaster->country_code = @$data['country_code'];
        $countryMaster->country_name = @$data['country_name'];
        $countryMaster->status = @$data['status'];
        $countryMaster->created_by = @$data['created_by'];
        $countryMaster->save();
        
        return $countryMaster;
    }

    public static function updateRecord($data, $id)
    {
        $countryMaster = CountryMaster::where('id', $id)->first();

        $countryMaster->country_code = (@$data['country_code']) ? @$data['country_code'] : $countryMaster->country_code;
        $countryMaster->country_name = (@$data['country_name']) ? @$data['country_name'] : $countryMaster->country_name;
        $countryMaster->status = (@$data['status']) ? @$data['status'] : $countryMaster->status;
        $countryMaster->updated_by = (@$data['updated_by']) ? @$data['updated_by'] : $countryMaster->updated_by;
        $countryMaster->save();
        
        return $countryMaster;
    }
}
