<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Departamento;

class Empleado extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'empleados';

    protected $appends = ['nombre_departamento'];

    protected $fillable = [
        'nombre',
        'edad',
        'id_departamento'
    ];

    # Appends

    public function getNombreDepartamentoAttribute()
    {
        if (empty($this->departamento)) {
            return 'Sin asignar';
        }
        return $this->departamento->nombre;
    }

    # Relations
    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'id_departamento');
    }
}
