<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded  = [
        'id',
    ];

    public function status()
    {
        // belongsToManyメソッドで多対多として関連付け
        return $this->belongsToMany('App\Models\Status')->withTimestamps();
    }
}
