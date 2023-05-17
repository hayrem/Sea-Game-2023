<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Matching extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'time',
        'event_id'
    ];
    public function sport_event() {
        return $this->belongsTo(Event::class);
    }
}
