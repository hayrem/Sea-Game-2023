<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'schedule',
        'event_id'
    ];
    public function event() {
        return $this->belongsTo(Event::class);
    }
}
