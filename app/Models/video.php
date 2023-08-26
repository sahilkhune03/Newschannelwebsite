<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class video extends Model
{
    use HasFactory;
    protected $fillable=['title','description','video'];
    public $table ='videos';

}
