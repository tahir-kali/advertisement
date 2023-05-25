<?php


namespace App\Modules\Advertisement_Package\src\Models;


use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'price',
        'is_active'
    ];


}
