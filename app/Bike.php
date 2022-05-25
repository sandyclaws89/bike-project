<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bike extends Model
{
    public $timestamps = false;
    protected $fillable = [
                    'image',
                    'post_title',
                    'bike_name',
                    'description',
                    'price',
                    'brand',
                    'model',
                    'year',
                    'type',
                    'available',
                ];
}
