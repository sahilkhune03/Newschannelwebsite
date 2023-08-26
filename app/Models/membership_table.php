<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membership_table extends Model
{
    use HasFactory;
  
    protected $fillable=['date' ,'validity_date' , 'profile','payment','to_validity_date','name','address','city','state','mob','email','dob','promoter'];
    public $table ='membership_table';
  
    
    public $increementing=true;
    public $timestamps=false;

    



}
