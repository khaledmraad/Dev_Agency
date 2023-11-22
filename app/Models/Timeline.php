<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $table='timeline';
    // use HasFactory;
    protected $fillable = [
        'user_email',
        'duration',
        'start_date',
        'project_name',
        'topic',
        'description',
        'sender_email',
        'done'
    ];
}
