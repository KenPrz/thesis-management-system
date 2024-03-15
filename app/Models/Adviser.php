<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adviser extends Model
{
    use HasFactory;
    protected $fillable = [
        'adviser_id',
        'adviser_type_id',
        'thesis_group_id',
    ];

    public function adviserType()
    {
        return $this->hasOne(AdviserType::class);
    }

    public function thesisGroup()
    {
        return $this->belongsTo(ThesisGroup::class);
    }

    
}
