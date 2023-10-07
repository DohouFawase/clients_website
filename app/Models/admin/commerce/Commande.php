<?php

namespace App\Models\admin\commerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory; 
    protected $fillable = [
        'user_id',
        'statut',
        'date_cmd',
        'adr_livr'
    ];


    public function User(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'product_id');
    }

    public function payment()
    {
        return $this->hasOne(payment::class);
    }
    
}
