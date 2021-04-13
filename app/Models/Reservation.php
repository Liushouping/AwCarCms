<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;


class Reservation extends Model
{
    use HasFactory, DefaultDatetimeFormat;

    protected $table = 'reservations';

    protected $fillable = [
        'age',
        'gender',
        'body',
        'name',
        'phone',
        'email',
        'car',
        'power',
        'date',
        'time',
        'status'
    ];

    protected $casts = [
        'date' => 'date:Y-m-d',
        'time' => 'datetime:H:i'
    ];
    
    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
