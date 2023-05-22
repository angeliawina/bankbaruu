<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banksampah extends Model
{
    use HasFactory;

    //protected $table = 'banksampahs';

    protected $fillable=[
        'nama',
        'alamat',
        'foto',
        'latitude',
        'longitude'
    ];

//     public function sampahs()
//     {
//         return $this->hasMany(Sampah::class, 'banksampahs_id', 'id');
//     }
// }
}