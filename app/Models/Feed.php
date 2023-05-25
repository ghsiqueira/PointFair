<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Feed extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'publications';
}