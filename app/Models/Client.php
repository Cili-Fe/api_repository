<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'adresse',
        'pass',
        'photo',
    ];

    public function plat()
    {
        return $this->hasMany(Plats::class,'plat_id', 'id');
    }

}
