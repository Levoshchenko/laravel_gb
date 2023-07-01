<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source
{
    use HasFactory;

    protected $table = 'sources';

    protected $guarded = [];

    public function news()
    {
        return $this->hasMany(News::class, 'source_id', 'id');
    }

}
