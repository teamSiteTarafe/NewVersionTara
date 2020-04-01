<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [''];
    protected $fillable = [
        'name','description','origin','image'
    ];
}
