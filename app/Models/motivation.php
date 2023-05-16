<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $intitule
 */
class motivation extends Model
{
    use HasFactory;
    protected $table ="motivation"; 
    public $timestamps = false ; // annule les commandes create et update dans la table region
    protected $fillable = ['intitule',];
}
