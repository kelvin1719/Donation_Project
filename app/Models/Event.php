<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'starting',
        'ending',
        'phone',
        'location',
        'description',
        'status',
    ];

    // make slug from name
    public static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $event->slug = Str::slug($event->title);
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
