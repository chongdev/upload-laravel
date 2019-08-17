<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $tabel = 'media';
    public $primatyKey = 'id';


    protected $fillable = [
        'name', 'size',
    ];
}
