<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThesisGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'thesis_id',
        'student_id',
    ];

    public function thesis()
    {
        return $this->belongsTo(Thesis::class);
    }

    public function members()
    {
        return $this->hasMany(Student::class);
    }
    
    public function panels()
    {
        return $this->hasMany(Panel::class);
    }
}
