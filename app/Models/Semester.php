<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{
    use HasFactory;
    protected $primaryKey = 'SemesterID';
    protected $fillable = ['Semester'];
    public $timestamps = false;

    // Relationships
    public function marks(): HasMany
    {
        return $this->hasMany(Mark::class, 'SemesterID', 'SemesterID');
    }

}
