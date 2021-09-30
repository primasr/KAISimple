<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingList extends Model
{
    use HasFactory;

    public $table = "booking_list";

    protected $fillable = [
        'id_user',
        'id_hotel',
    ];
}
