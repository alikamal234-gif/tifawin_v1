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

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return $this->belongsTo(Categorie::class);
    } 
}
