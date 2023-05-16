<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nom
 * @property string $penom
 * @property string $age
 * @property int $sexe
 * @property string $prefession
 * @property string $rue
 * @property string $code_postal
 * @property string $ville
 * @property string $pays 
 *  @property int $telephone
 * @property string $email 
 *@property string $id_motivation 
 */

class abonne extends Model
{
    use HasFactory;
    protected $table ="abonne"; 
    public $timestamps = false ; // annule les commandes create et update dans la table region
    protected $fillable = ['nom',
    'prenom',
    'age',
    'sexe',
    'pefession',
    'rue',
    'code_postal',
    'ville',
    'pays',
    'téléphone',
    'email',
    'id_motivation',
];
}
