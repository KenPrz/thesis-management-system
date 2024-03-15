<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function thesisGroup()
    {
        return $this->hasOne(ThesisGroup::class);
    }

}
