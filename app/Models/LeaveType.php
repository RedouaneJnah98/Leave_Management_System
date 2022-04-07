<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class LeaveType extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['leave_name', 'leave_description', 'number_days_allowed'];

    public function leaveApplication()
    {
        return $this->hasMany(LeaveApplication::class);
    }
}
