<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'client_name',
        'service_requested',
        'message',
        'status',
    ];
}
