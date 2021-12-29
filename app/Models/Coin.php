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
    //public function kind($query)
    //{
    //    $query->where('kind')
    //}
}
