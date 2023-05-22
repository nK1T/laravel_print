<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table='user';  
    public $timestamps = false;
    // protected $fillable=['first_name','last_name','gender','qualifications'];  
}
