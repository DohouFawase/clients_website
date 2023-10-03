<?php

namespace App\Models\admin\commerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products() {
        return $this->hasMany(Product::class, 'category_id');
    }
    

    public function getSlug(): string

    {
       return Str::slug($this->name);
        
    }
}
