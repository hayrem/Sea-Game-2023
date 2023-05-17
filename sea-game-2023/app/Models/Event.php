<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matching;
use App\Models\Ticket;
use App\Models\Stadium;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'available_ticket',
        'stadium_id'
    ];
    public function matching() {
        return $this->hasMany(Matching::class);
    }
    public function ticket() {
        return $this->hasMany(Ticket::class);
    }
    public function stadium() {
        return $this->belongsTo(Stadium::class);
    }
}
