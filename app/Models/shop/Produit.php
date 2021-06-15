<?php

namespace App\Models\shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produit extends Model
{
    use HasFactory;
    public function category() {

        return $this->belongsTo(Category::class);
        // return $this->belongsTo("App\Category");

    }
}
