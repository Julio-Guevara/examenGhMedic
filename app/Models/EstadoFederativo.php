<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pais;

class EstadoFederativo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'estados_federativos';

    protected $primaryKey = 'PKEstado';

    protected $fillable = [
        'Estado',
        'FKPais'
    ];

    # Relations
    public function pais()
    {
        return $this->belongsTo(Pais::class,'FKPais');
    }
}
