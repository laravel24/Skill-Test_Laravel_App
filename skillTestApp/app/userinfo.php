<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    protected $fillable = ['name','email','nationality','phone','institution','avatar','password','label'];
    
}
