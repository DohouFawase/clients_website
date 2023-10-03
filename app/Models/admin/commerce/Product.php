<?php

namespace App\Models\admin\commerce;

use App\Models\front\Cart;
use App\Models\front\Panier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'description',
        'price',
        'stock',
        'date',
        'image',
        'status',
        'category_id'
    ];


    public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function commandes(){
        return $this->belongsToMany(Commande::class, 'commande_id');

    }

    public function getSlug(): string

    {
       return Str::slug($this->product_name);
        
    }

    
}
