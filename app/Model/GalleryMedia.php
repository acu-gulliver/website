<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GalleryMedia extends Model
{

    protected $connection = "wordpress";

    protected $guarded = ['meta_id'];
    protected $primaryKey = "meta_id";

    protected $table = "postmeta";
    public $timestamps = false;

}