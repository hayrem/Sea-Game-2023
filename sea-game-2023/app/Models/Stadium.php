<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Stadium extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'zone',
    ];
    public function event() {
        return $this->hasMany(Event::class);
    }
}
