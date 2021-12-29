<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chain extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'value',
        'publish'
    ];

    public function coins()
    {
        return $this->hasMany('App\Models\Coin','cid');
    }
}
