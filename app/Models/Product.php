<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
    ];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if ($model->isDirty('image') && ($model->getOriginal('image') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('image'));
            }
        });
    }

    // public function scopeFilters($query, array $filters){
    //     $query->when($filters['search'], function($query, $search) {
    //         return $query->where(function($query) use ($search) {
    //             $query->where('nama', 'like', '%' . $search . '%')
    //                   ->orWhere('harga', 'like', '%' . $search . '%');
    //         });
    //     });
    // }
    public function scopeSearch($query, $search)
    {
        return $query->where('nama', 'like', '%' . $search . '%')
                    ->orWhere('harga', 'like', '%' . $search . '%');
    }
}
