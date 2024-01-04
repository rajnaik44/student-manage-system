<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'syllabus',
        'duration',
    ];
    use HasFactory;

    //to changet the display to montshs in duraton field
    public function duration(){
        return $this->duration." months";
    }
}
