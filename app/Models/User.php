<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'is_active',
        'role',
    ];

    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function userProfile()
    {
        return $this->hasOne(UserProfile::class);
    }
}
