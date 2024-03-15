<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = [
        'block_name',
        'professor_id',
    ];

    public function professor()
    {
        return $this->hasOne(Professor::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
