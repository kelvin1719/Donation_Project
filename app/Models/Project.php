<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'type',
        'goal',
        'raised',
        'description',
        'status',
        'is_complete',
    ];

    // make slug from name
    public static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }

    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class, 'project_id');
    }
}
