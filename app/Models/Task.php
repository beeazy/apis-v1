<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description', 'is_completed', 'priority_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priorities::class);
    }
}
