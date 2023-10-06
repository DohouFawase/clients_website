<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'contenu',
        'post_img',
        'author',
        'video',
        'date_pub',
        'section_id'
    ];

    public function set(){
        return $this->belongsTo(Section::class, 'section_id');
    }


    public function getSlug(): string
    {
       return Str::slug($this->title);  
    }
  
}
