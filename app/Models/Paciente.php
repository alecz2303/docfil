<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','edad','genero','edo_civil','direccion','telefono','profesion','recomendado','padre','enfermedad_padre','madre',
        'enfermedad_madre','enfermedad','cual_enfermedad','tratamiento','cual_tratamiento','medicamentos','deporte','malestar_deporte',
        'alergico','cual_alergico','heridas','antecedente_fiebre','diabetico','controlado','controlado_que','cardiaco','cual_cardiaco',
        'aspirina','presion_alta','renales','ulcera','hepatitis','tipo_hepatitis','problema_hepatico','cual_hepatico','convulsiones',
        'epileptico','medicamentos_epileptico','ets','enfermedad_infecto_contagiosa','cual_infecto','transfusiones','operado','operado_que',
        'respiratorio','cual_respiratorio','fuma','embarazada','meses_embarazo','dengue','covid','saturacion_oxigeno','temperatura','ppm',
        'observaciones'
    ];

    protected $dates = ['deleted_at'];
}
