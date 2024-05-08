<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "priority",
        "estado",
        "proyect_id"
    ];

    public function proyecto(){
        return $this->belongsTo(Proyect::class);
    }
}
