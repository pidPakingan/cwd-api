<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $fillable = [
        'todosTitle',
        'todosDesc'
    ];
}
