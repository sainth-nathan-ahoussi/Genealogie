<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by', 'first_name', 'last_name', 'birth_name', 'middle_names', 'date_of_birth'
    ];

    // Relation avec les enfants
    public function children()
    {
        return $this->hasMany(Relationship::class, 'parent_id');
    }

    // Relation avec les parents
    public function parents()
    {
        return $this->hasMany(Relationship::class, 'child_id');
    }

    // Relation avec l'utilisateur créateur
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
