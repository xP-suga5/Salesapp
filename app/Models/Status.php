<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'updated_at',
    ];

    public function clients()
    {
        // belongsToManyメソッドで多対多として関連付け
        return $this->belongsToMany('App\Models\Client')->withTimestamps();

    }
}
