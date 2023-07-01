<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\NewsStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $guarded = [];

    /* Relatiions */

    /* Scopes`s */

    public function scopeActive(Builder $query): void
    {
        $query->where('status', NewsStatus::ACTIVE->value);
    }
}
