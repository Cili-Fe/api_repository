<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;


     protected $fillable = [
        'name',
        'price',
        'photo',
    ];


    public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }
}
