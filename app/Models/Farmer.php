<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;
    protected $table="farmer_detail";
    protected $fillable=['id','firstname','lastname','username','email','address','address2','state','district','pincode','created_at','updated_at'];
}
