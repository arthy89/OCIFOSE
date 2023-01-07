<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remitente extends Model
{
    use HasFactory;

    protected $table = "remitente";

    public $timestamps = false;

    protected $primaryKey = "id_rem";

    // habilitamos las columnas necesarias dentro de la base de datos, por ahora las que solo mando del controller
    protected $fillable = ['rem_name', 'rem_apell', 'rem_cargo', 'rem_ofi_ent', 'rem_ofi_ent_det'];
}
