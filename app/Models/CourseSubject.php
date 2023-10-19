<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class CourseSubject extends Model
{
    use HasFactory;
    protected $fillable = ['CourseID', 'SubjectID'];
    public $timestamps = false;

    // Relationships
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'CourseID', 'CourseID');
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'SubjectID', 'SubjectID');
    }

}
