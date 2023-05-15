<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matching;
use App\Models\Ticket;
use App\Models\Stadium;

class Sport_Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'availalbe_ticket',
        'matching_id',
        'ticket_id',
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
