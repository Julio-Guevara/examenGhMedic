<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EstadoFederativo;

class Pais extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paises';

    protected $primaryKey = 'PKPais';

    protected $fillable = [
        'Pais',
        'Disponible'
    ];

    # Relations
    public function estados()
    {
        return $this->hasMany(EstadoFederativo::class,'FKPais');
    }
}
