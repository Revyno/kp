<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollmant extends Model
{
    use HasFactory;

       protected $fillable = [
        'student_id',
        'course_id',
        'enrollment_date',
        'status',
        'paid_amount',
        'notes',
    ];

    protected $casts = [
        'enrollment_date' => 'date',
        'paid_amount' => 'decimal:2',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
