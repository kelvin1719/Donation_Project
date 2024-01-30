<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class PostCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'order',
        'name',
        'slug',
    ];

    // make slug from name
    public static function boot()
    {
        parent::boot();

        static::creating(function ($postCategory) {
            $postCategory->slug = Str::slug($postCategory->name);
        });
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(PostCategory::class, 'parent_id');
    }
}
