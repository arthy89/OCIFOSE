<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

    protected $table = "informe";

    public $timestamps = false;

    protected $primaryKey = "id_inf";

    // habilitamos las columnas necesarias dentro de la base de datos, por ahora las que solo mando del controller
    protected $fillable = ['inf_name','inf_ori','inf_obj_g','inf_obj_e','inf_alc','inf_sit_adv','inf_cncl','inf_rec','id_user','inf_arch','id_rr','inf_num'];
}
