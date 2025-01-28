<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relationship extends Model
{
    protected $fillable = ['created_by', 'parent_id', 'child_id'];

    // Relation avec le parent
    public function parent()
    {
        return $this->belongsTo(Person::class, 'parent_id');
    }

    // Relation avec l'enfant
    public function child()
    {
        return $this->belongsTo(Person::class, 'child_id');
    }
}
