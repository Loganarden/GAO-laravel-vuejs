<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomposte',
    ];

    public function attributions()
    {
        return $this->hasMany(Attribution::class, 'id_Postes');
    }
}
