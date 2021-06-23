<?php

namespace App\Models\shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produit extends Model
{
    use HasFactory;
    public function categories() {

        return $this->belongsToMany(Category::class);
        // return $this->belongsTo("App\Category");

    }
}
