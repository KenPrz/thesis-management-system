<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;

    protected $fillable = [
        'panel_type_id',
        'thesis_id',
        'thesis_group_id',
    ];

    public function panelType()
    {
        return $this->hasOne(PanelType::class);
    }

    public function ThesisGroup()
    {
        return $this->belongsTo(ThesisGroup::class);
    }
}
