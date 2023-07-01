<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoryHasNews extends Model
{
    use HasFactory;

    protected $table = 'category_has_news';
    protected $guarded = [];


}
