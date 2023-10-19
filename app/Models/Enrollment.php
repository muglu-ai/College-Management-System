<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable = ['StudentPRN', 'CourseID'];
    public $timestamps = false;

    // Relationships
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'StudentPRN', 'PRN');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'CourseID', 'CourseID');
    }

}
