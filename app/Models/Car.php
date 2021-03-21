<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class Car extends Model
{
    use HasFactory, DefaultDatetimeFormat;

    protected $fillable = [
        'title',
        'description',
        'model',
        'engine',
        '​exhaust',
        'max_horsepower',
        '​max_torque',
        'price',
        'order',
        'phone'
    ];

    protected $casts = [
        'on_sale' => 'boolean',
    ];

    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
    }
}
