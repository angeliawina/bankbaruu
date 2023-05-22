<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;

    

    protected $fillable=[
        'banksampah_id',
        'nama',
        'harga',
        'foto',
    ];

    public function bank()
    {
        return $this->belongsTo(Banksampah::class);
    }
}
