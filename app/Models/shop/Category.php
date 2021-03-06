<?php

namespace App\Models\shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function produit(){
        return $this->belongsToMany(Produit::class);
    }
}
