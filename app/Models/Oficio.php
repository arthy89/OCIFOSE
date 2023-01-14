<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
    use HasFactory;

    protected $table = "oficio";

    public $timestamps = false;

    protected $primaryKey = "id_ofi";

    // habilitamos las columnas necesarias dentro de la base de datos, por ahora las que solo mando del controller
    protected $fillable = ['ofi_fec','ofi_dir','ofi_asu','ofi_body','id_inf','ofi_arc','ofi_num','id_rr'];
}
