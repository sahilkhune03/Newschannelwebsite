<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscribe_table extends Model
{
    use HasFactory;
  
    protected $fillable=['emailsubscribe'];
    public $table ='subscribe_table';

    public $increementing=true;
    public $timestamps=false;


}
