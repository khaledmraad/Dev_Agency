<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_projects extends Model
{
    // use HasFactory;
    protected $table='user_projects';
    protected $fillable = [
        'user_email',
        'project_name',
        'admins_email',
        'devs_email'
    ];
}
