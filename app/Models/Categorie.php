<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function produits(){
        return $this->hasMany(Produit::class);
    }
}
