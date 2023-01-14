<?php

namespace App\Http\Controllers;

use App\Models\Remitente;
use App\Models\Informe;
use App\Models\User;
use App\Models\Oficio;
use App\Models\Reg_Remitente;
use Illuminate\Http\Request;
use App\Http\Requests\OficioRequest;

class OficioController extends Controller
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
    public function create(Informe $informe, Reg_Remitente $registro)
    {
        //
        // return $registro->all();
        // return $informe = Informe::where('inf_num',$informe->id_inf)->get();
        $informe = Informe::where('id_rr',$registro->id_rr)->orderBy('id_inf','desc')->first();
        $remitente = Remitente::where('id_rem',$registro->id_rr)->get(); // todo el remitente actual
        //$remitente[0];
        $oficio_num = Oficio::select('ofi_num')->orderBy('ofi_num','desc')->first(); //? numero de oficio
        // return 


        return view('docs.oficio.ofi_crear', compact('informe','remitente','registro','oficio_num'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OficioRequest $request, Reg_Remitente $registro)
    {
        //
        // return $request->cuerpo;
        setlocale( LC_ALL,"es_ES@euro","es_ES","esp" );
        $fecha_act = strftime( "%d de %B de %Y" );

        $remitente = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_nom_com = $remitente[0]->rem_name . " " . $remitente[0]->rem_apell; // nombre del remitente actual

        $informe_num = Informe::select('id_inf','inf_num')->where('id_rr', $remitente[0]->id_rem )->orderBy('inf_num','desc')->first();

        $oficio_num = Oficio::select('id_ofi','ofi_num')->orderBy('ofi_num','desc')->first();
        // $num_ofi = $oficio_num->ofi_num; //ultimo num informe

        if($oficio_num == null){
            $num_ofi = 0;
        }else{
            $num_ofi = $oficio_num->ofi_num; //ultimo num informe
        }

        $oficio = Oficio::create([
            'ofi_fec' => $fecha_act,
            'ofi_dir' => $rem_nom_com,
            'ofi_asu' => $registro->rr_asunto,
            'ofi_body' => $request->cuerpo,
            'id_inf' => $informe_num->inf_num,
            // 'ofi_arc',
            'ofi_num' => $num_ofi + 1,
            'id_rr' => $registro->id_rr,
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
