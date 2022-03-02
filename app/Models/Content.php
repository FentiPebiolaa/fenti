<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table = 'content';
    protected $fillable = [
        'name_content', 'order_content', 'icon_content', 'description_content', 'url_content', 'status', 'nama_link', 'nama_link2', 'url_content2', 'kategori',
    ];
}
