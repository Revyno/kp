<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;


     protected $fillable = [
        'name',
        'description',
        'price',
        'duration_hours',
        'level',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollmant::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments');
    }
}
