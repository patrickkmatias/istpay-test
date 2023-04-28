<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = ['title', 'description', 'type', 'paused'];

    public function scopeType(Builder $query, string|null $type)
    {
        return $type ? $query->where('type', $type) : $query->whereNotNull('type');
    }

    public function scopePaused(Builder $query, bool|null $paused)
    {
        return !$paused ? $query->where('paused', $paused) : $query->whereNotNull('paused');
    }

    public function scopeSearch(Builder $query, string|null $queryStr)
    {
        return $queryStr ? $query->whereFuzzy('title', $queryStr) : $query;
    }
}