<?php

namespace App\Http\Controllers;

use App\Models\Reg_Remitente;
use App\Models\Remitente;
use App\Models\Informe;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\InformeRequest;

class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Reg_Remitente $registro)
    {
        //
        $remitente = Remitente::all();
        $informe_num = Informe::select('id_inf','inf_num')->orderBy('inf_num','desc')->first();
        return view('docs.informe.info_crear', compact('registro','remitente','informe_num'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformeRequest $request, Reg_Remitente $registro)
    {
        //
        // return $request->all();
        $remitente = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_id = $remitente[0]->id_rem; // para obtener el id del remitente actual
        
        $id_usuario = auth()->user()->id; // id del usuario logeado

        // para obtener el ultimo valor del numero de oficio
        $informe_num = Informe::select('id_inf','inf_num')->orderBy('inf_num','desc')->first();

        if($informe_num == null){
            $num_inf = 0;
        }else{
            $num_inf = $informe_num->inf_num; //ultimo num informe
        }
        



        $informe = Informe::create([
            'inf_name' => $request->inf_titulo,
            'inf_ori' => $request->origen,
            'inf_obj_g' => $request->obj_gen,
            'inf_obj_e' => $request->obj_esp,
            'inf_alc' => $request->alcance,
            'inf_sit_adv' => $request->sit_adv,
            'inf_cncl' => $request->conclusion,
            'inf_rec' => $request->recomendaciones,
            'id_user' => $id_usuario,
            'id_rr' => $registro->id_rr,
            'inf_num' => $num_inf + 1,
        ]);

        return redirect()->route('accion',$registro->id_rr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
