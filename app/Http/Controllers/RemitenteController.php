<?php

namespace App\Http\Controllers;

use App\Models\Remitente;
use App\Models\Reg_Remitente;
use Illuminate\Http\Request;

class RemitenteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function fose(){
        return view('fose');
    }

    public function pruebas(){

        $remitente = Remitente::all();

        return view('pruebas', compact('remitente'));
    }

    public function detalles(Remitente $remitente_, Reg_Remitente $reg_remitente_){

        // return $reg_remitente_;

        return view('detalles', compact(['remitente_','reg_remitente_']));
    }

    public function enviar(FoseRemitente $request){

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
            'rr_ref_fols' => $request->folios,
            'rr_ori' => $request->origen,
            'rr_adj' => $request->ele_adj,
            'id_rem' => $rem->id_rem,
        ]);

        return redirect()->route('detalles', $rem);


    }
    public function editrem(Remitente $rem_edit){
        return view('edit', compact('rem_edit'));
    }

    public function update(FoseRemitente $request, Remitente $rem_up){

        $rem_up->update([
            'rem_name' => $request->nombre,
            'rem_apell' => $request->apellido,
            'rem_ofi_ent' => $request->entidad,
        ]);


        return redirect()->route('detalles', $rem_up);
    }

    public function destroy(Remitente $remitente){
        $remitente->delete();
        return redirect()->route('pruebas');
    }
}