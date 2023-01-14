<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reg_Remitente;
use App\Models\Remitente;
use App\Http\Requests\RegistroRemitenteRequest;

class RegRemitenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() //para visualizar todos los registros
    {
        //
        $remitentes = Remitente::all();
        $registros = Reg_Remitente::all();
        return view('registros.index', compact('registros','remitentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // para abrir formulario de nuevo registro
    {
        //
        
        return view('registros.reg_remitente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroRemitenteRequest $request) // para guardar en la base de datos
    {
        //
        $rem = Remitente::create([
            'rem_name' => $request->nombre,
            'rem_apell' => $request->apellido,
            'rem_ofi_ent' => $request->entidad,
            'rem_ofi_ent_det' => $request->entidad_det,
            'rem_cargo' => $request->cargo,
        ]);

        $reg_rem = Reg_Remitente::create([
            'rem_exp' => $request->num_exp,
            'rr_asunto' => $request->asunto,
            'rr_fec' => $request->fecha,
            'rr_hor' => $request->hora,
            'rr_detalle' => $request->detalles,
            'rr_ref' => $request->doc_ref,
            'rr_fols' => $request->folios,
            'rr_ori' => $request->origen,
            'rr_adj' => $request->ele_adj,
            'id_rem' => $rem->id_rem,
        ]);

        return redirect()->route('registros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reg_Remitente $registro) //para mirar solo 1 registro
    {
        //
        // return view('registros.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reg_Remitente $registro) // editar registros con formulario
    {
        //
        // return $registro;
        $remitente = Remitente::all();
        return view('registros.edit', compact('registro','remitente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistroRemitenteRequest $request, Reg_Remitente $registro, Remitente $remitente) // actualizar los registros existentes
    {
        //
        
        // $registro->rem_exp = $request->num_exp;

        // $remitente->rem_name = $request->nombre;
        // $registro->rem_exp = $request->num_exp;
        // $remitente->save();
        // $registro->save();
               
        // return $remitente[$registro->id_rr-1];

        $remitente = Remitente::where('id_rem','=',$registro->id_rem)->update([
            'rem_name' => $request->nombre,
            'rem_apell' => $request->apellido,
            'rem_ofi_ent' => $request->entidad,
            'rem_ofi_ent_det' => $request->entidad_det,
            'rem_cargo' => $request->cargo,
        ]);

        $registro->update([
            'rem_exp' => $request->num_exp,
            'rr_asunto' => $request->asunto,
            'rr_fec' => $request->fecha,
            'rr_hor' => $request->hora,
            'rr_detalle' => $request->detalles,
            'rr_ref' => $request->doc_ref,
            'rr_fols' => $request->folios,
            'rr_ori' => $request->origen,
            'rr_adj' => $request->ele_adj,
        ]);

        
       
        return redirect()->route('registros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reg_Remitente $registro, Remitente $remitente) // eliminar el registro
    {
        //
        $registro->delete();
        $remitente = Remitente::where('id_rem','=',$registro->id_rem)->delete();
        
        return redirect()->route('registros');
    }
}
