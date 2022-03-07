<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    /**
     * Gets the course related to the grade
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function addResult($newResult){
        if ($newResult <= $this->best_grade) {
            $this->best_grade = $this->best_grade;
            $this->save();
        } else {
            $this->best_grade = $newResult;
            $this->save();
        }

        if ($this->best_grade >= $this->lowest_passing_grade) {
            $this->updated_at = now();
            $this->save();
        }
    }
}
