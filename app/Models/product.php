<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'image',
        'price',
        'category_id',
        'featured',
        'stock',
        'quantity',
        'short_description',
        'description',

    ];


    public function category(){
        return$this->belongsTo(Category::class);
    }
}
