<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table="client_details";
    protected $fillable=['id','firstname','lastname','username','email','address','address2','state','district','pincode','dimmension','longitude','latitude','soilreport','BhoomiLandId','created_at','updated_at'];

}
