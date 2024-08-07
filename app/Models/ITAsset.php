<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITAsset extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'it_assets';

    // The attributes that are mass assignable.
    protected $fillable = [
        'brand',
        'serial_number',
        'warranty_expiration_date',
        'status'
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'warranty_expiration_date' => 'date',
    ];
}
