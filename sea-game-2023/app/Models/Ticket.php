<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sport_Event;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'schedule'
    ];
    public function sport_event() {
        return $this->belongsTo(Sport_Event::class);
    }
}
