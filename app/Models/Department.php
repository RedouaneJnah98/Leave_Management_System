<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Department extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['department_short_name', 'department_name'];

    public function employees()
    {
        return $this->hasMany(User::class);
    }
}
