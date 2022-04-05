<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_type_id',
        'employee_id',
        'reference_number',
        'from_date',
        'to_date',
        'remark',
        'leave_status'
    ];

    public function employees()
    {
        return $this->hasMany(User::class);
    }

    public function leaveType()
    {
        return $this->belongsTo(LeaveType::class);
    }
}
