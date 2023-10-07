<?php

namespace App\Models\admin\commerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'type_carte',
        'num_cart',
        'date_exp',
    ];


        
    public function User(){
        return $this->belongsTo(User::class);
    }
    
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}
