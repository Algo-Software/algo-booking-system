<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $tables = 'reservations';
    protected $primaryKey = 'reservation_id';
    protected $fillable = array('name', 'event', 'contact', 'request_date', 'guests', 'venue', 'requests', 'assign_date');
    public $timestamps = true;
    protected $hidden = array('created_at', 'updated_at');
}
