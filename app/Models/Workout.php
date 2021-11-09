<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Workout extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $fillable = [
        'workout'
    ];

    /**
     * the attribute that should be retrieved.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
