<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reg_Remitente extends Model
{
    use HasFactory;
    
    protected $table = "reg_remitente";

    public $timestamps = false;

    protected $primaryKey = "id_rr";

    // habilitamos las columnas necesarias dentro de la base de datos, por ahora las que solo mando del controller
    protected $fillable = ['rem_exp','rr_asunto','rr_fec','rr_hor','rr_detalle','rr_ref','rr_ref_fols','rr_ori','rr_adj','id_rem'];
}
