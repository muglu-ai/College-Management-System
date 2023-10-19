<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mark extends Model
{
    use HasFactory;
    protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = ['SubjectID', 'StudentPRN', 'SemesterID', 'MarksReceived', 'TotalMarks'];
    public $timestamps = false;



    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'SubjectID', 'SubjectID');
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'StudentPRN', 'PRN');
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class, 'SemesterID', 'SemesterID');
    }

}
