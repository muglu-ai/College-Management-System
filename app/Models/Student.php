<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'StudentID';
    protected $fillable = ['Name', 'Roll', 'PRN', 'Email', 'Password', 'Address'];
    public $timestamps = false;

    public function setPasswordAttribute($value): void
    {
        $this->attributes['Password'] = Hash::make($value);
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class, 'StudentPRN', 'PRN');
    }

    public function marks(): HasMany
    {
        return $this->hasMany(Mark::class, 'StudentPRN', 'PRN');
    }
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'CourseID', 'CourseID');
    }
}
