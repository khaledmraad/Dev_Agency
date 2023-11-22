<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dev_tasks extends Model
{
    protected $table='dev_tasks';
    // use HasFactory;
    protected $fillable = [
        'email',
        'task',
        'done',
        'topic',
        'sender',
        'project_name',
        'client_name'
    ];
}
