<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'professor_id'
    ];

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    public function panel()
    {
        return $this->hasMany(Panel::class);
    }
}
