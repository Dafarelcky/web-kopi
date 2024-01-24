<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'tagline',
        'bg_image',
    ];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if ($model->isDirty('bg_image') && ($model->getOriginal('bg_image') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('bg_image'));
            }
        });
    }
}
