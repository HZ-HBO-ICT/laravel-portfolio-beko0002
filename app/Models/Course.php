<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    /**
     *Getts the grades related to the course
     */
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
