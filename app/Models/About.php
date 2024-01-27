<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            $originalImage1 = $model->getOriginal('image_1');
            $originalImage2 = $model->getOriginal('image_2');

            if ($model->isDirty('image_1') && $originalImage1 !== null) {
                Storage::disk('public')->delete($originalImage1);
            }

            if ($model->isDirty('image_2') && $originalImage2 !== null) {
                Storage::disk('public')->delete($originalImage2);
            }
        });
    }
}
