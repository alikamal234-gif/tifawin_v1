<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'categorie_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    } 
}
