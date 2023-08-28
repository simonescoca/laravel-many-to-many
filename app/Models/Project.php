<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model


{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'url',
        'slug',
        'image'
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}