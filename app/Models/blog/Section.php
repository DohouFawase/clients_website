<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
       
    ];

    public function getSlug(): string

    {
       return Str::slug($this->name);
        
    }
}
