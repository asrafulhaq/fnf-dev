<?php

namespace App\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

use Illuminate\Database\Eloquent\Model;

class Post extends Model implements HasMedia
{

	use HasMediaTrait;

    protected $guarded = [];
}


