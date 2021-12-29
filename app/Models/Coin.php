<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cid',
        'kind',
        'lockup',
        'highest',
        'lowest',
        'publish'

    ];
    public function chain()
    {
        return $this->belongsTo('App\Models\Chain','cid','id');
    }

    public function scopeDEX($query)
    {
        $query->where('kind','=','DEX')
            ->orderBy('kind');
    }

    public function scopelend($query)
    {
        $query->where('kind','=','借貸')
            ->orderBy('kind');
    }

    public function scopetoken($query)
    {
        $query->where('kind','=','代幣')
            ->orderBy('kind');
    }

    public function scopedate($query)
    {
        $query->where('publish','<','2021-1-01')
            ->orderBy('publish');
    }
}
