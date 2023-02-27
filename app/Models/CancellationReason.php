<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancellationReason extends Model
{
    use HasFactory;
    protected $table = 'cancellation_reason';
    protected $fillable = [
        'name',
    ];


}
