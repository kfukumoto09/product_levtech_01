<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Subject extends Model
{
    use HasFactory;
    
    public function project() 
    {
        return $this->belongsTo(Subject::class);
    }
}
