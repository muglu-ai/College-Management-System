<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Course extends Model
{
    use HasFactory;
    protected $primaryKey = 'CourseID';
    protected $fillable = ['CourseName'];
    public $timestamps = false;
    // Relationships
    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class, 'CourseID', 'CourseID');
    }

    public function courseSubjects(): HasMany
    {
        return $this->hasMany(CourseSubject::class, 'CourseID', 'CourseID');
    }

}
