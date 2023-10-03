<?php

namespace App\Models\admin\commerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmdDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'cmd_id',
        'product_id',
        'quantité',
        'prix_unit'
    ];

    public function products() {
        return $this->belongsTo(Product::class);
    }

    public function command() {
        return $this->belongsTo(Commande::class);
    }
}
