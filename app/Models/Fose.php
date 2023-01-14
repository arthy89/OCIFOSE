<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fose extends Model
{
    use HasFactory;

    protected $table = "fose";

    public $timestamps = false;

    protected $primaryKey = "id_fose";

    protected $fillable = ['fose_num_id','id_ofi','fose_fec','fose_hor','fose_acc','id_rr'];
}
