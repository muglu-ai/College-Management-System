<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;
    protected $primaryKey = 'SubjectID';
    protected $fillable = ['SubjectName'];
    public $timestamps = false;

    // Relationships
    public function courseSubjects(): HasMany
    {
        return $this->hasMany(CourseSubject::class, 'SubjectID', 'SubjectID');
    }

    public function marks(): HasMany
    {
        return $this->hasMany(Mark::class, 'SubjectID', 'SubjectID');
    }

}
