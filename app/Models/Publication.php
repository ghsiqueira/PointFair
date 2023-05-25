<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Publication extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'publications';

    // Adicione quaisquer outras configurações necessárias para o modelo
}