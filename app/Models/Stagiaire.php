<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "prenoms",
        "ecole",
        "filiere_id",
        "dateDebut",
        "dateFin"
    ];
    protected $date = ['dateDebut', 'dateFin'];
    public function classe() {
            return $this->belongsTo(Filiere::class);
    }
}
