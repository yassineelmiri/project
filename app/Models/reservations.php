<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reservations extends Model
{
    use HasFactory, SoftDeletes;
    protected $date = ['created_at'];
    protected $fillable = [
        'profile_id',
        'rooms_id',
        'valider',
        'checkin',
        'checkout',
        'places'
    ];
    public function profile()
    {
        return $this->belongsTo(Auths::class);
    }
    public function publication()
    {
        return $this->belongsTo(room::class);
    }
}
