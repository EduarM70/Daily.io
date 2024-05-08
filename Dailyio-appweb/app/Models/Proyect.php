<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyect extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "name",
        "description",
        "goals",
        "justicacion",
        "user_id"
    ];

    public function sprints() : HasMany
    {
        return $this->hasMany(Sprint::class);
    }
}
