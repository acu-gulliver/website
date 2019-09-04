<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $connection = "wordpress";

    protected $table = 'posts';
    public $timestamps = false;
}
