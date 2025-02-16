<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'horaire',
    ];

    public function client()
        {
            return $this->belongsTo(Client::class, 'id_clients');
        }
    public function ordinateur()
        {
            return $this->belongsTo(Poste::class, 'id_postes');
        }
}
