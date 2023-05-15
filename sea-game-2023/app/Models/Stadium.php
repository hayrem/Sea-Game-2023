<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sport_Event;

class Stadium extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'zone',
        'sport_event_id',
    ];
    public function sport_event() {
        return $this->hasMany(Sport_Event::class);
    }
}
