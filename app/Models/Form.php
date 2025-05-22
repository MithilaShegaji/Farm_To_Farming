<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table="editform";
    protected $fillable=['id','name','adress','phone','state','pincode','created_at','updated_at'];
}
