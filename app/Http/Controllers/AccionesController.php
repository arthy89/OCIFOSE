<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reg_Remitente;
use App\Models\Remitente;
use App\Models\Informe;
use App\Models\Oficio;
use App\Models\Fose;

class AccionesController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reg_Remitente $registro)
    {
        //
        // 

        $remitente = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_id = $remitente[0]->id_rem; // para obtener el id del remitente actual

        $informe = Informe::where('id_rr',$rem_id)->orderBy('inf_num','desc')->first(); //!ultimo informe
        if(isset($informe->id_inf)){
            $oficio = Oficio::where('id_inf',$informe->id_inf)->orderBy('ofi_num','desc')->first();
        }else{
            $oficio = NULL;
        }

        if(isset($oficio->id_ofi)){
            $fose = Fose::where('id_ofi',$oficio->id_ofi)->orderBy('fose_num_id','desc')->first();
        }else{
            $fose = NULL;
        }
        
        $informes=Informe::all();
        $oficios=Oficio::all();
        $foses=Fose::all();
        // return $oficios = Oficio::where('id_inf',$informe->id_inf)->get();
        // $oficio = Oficio::where('id_inf',$informe->id_inf)->orderBy('ofi_num','desc')->first();
        // return $len = strlen($informe->id_rr);
        return view('registros.accion',compact('registro','informe','remitente','oficio','fose','informes','oficios','foses'));
    }

    public function generar_pdf_inf(Reg_Remitente $registro)
    {
        $remitente = Remitente::all();
        $rem_act = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_id = $rem_act[0]->id_rem; // para obtener el id del remitente actual
        $informe = Informe::where('id_rr',$rem_id)->orderBy('inf_num','desc')->first();

        return view('docs.informe.generar_pdf', compact('registro','informe','rem_act'));
    }

    public function recuperar_pdf_inf(Reg_Remitente $registro, Informe $informe)
    {
        // return $informe->id_inf;
        
        // $remitente = Remitente::all();
        $rem_act = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_id = $rem_act[0]->id_rem; // para obtener el id del remitente actual
        // $informe = Informe::where('id_rr',$rem_id)->orderBy('inf_num','desc')->first();
        $informe_act = Informe::where('inf_num',$informe->id_inf)->get();//!informe actual

        return view('docs.informe.recuperar_pdf', compact('registro','informe_act','rem_act'));
    }

    public function generar_pdf_ofi(Reg_Remitente $registro)
    {
        $rem_act = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_id = $rem_act[0]->id_rem;

        $informe_act = Informe::where('id_rr',$rem_id)->orderBy('inf_num','desc')->first(); //todo el informe actual

        //oficio actual
        $oficio_act = Oficio::where('id_inf',$informe_act->id_inf)->orderBy('ofi_num','desc')->first();

        $rem_act = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual

        $rem_id = $rem_act[0]->id_rem; // para obtener el id del remitente actual

        return view('docs.oficio.generar_pdf', compact('registro','rem_act','oficio_act','informe_act'));
    }

    public function recuperar_pdf_ofi(Reg_Remitente $registro, Oficio $oficio){

        $rem_act = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_id = $rem_act[0]->id_rem; // para obtener el id del remitente actual

        $oficio_act = Oficio::where('ofi_num',$oficio->ofi_num)->get();//!oficio actual

        return view('docs.oficio.recuperar_ofi_pdf', compact('registro','oficio_act','rem_act'));
    }


    public function generar_fose(Reg_Remitente $registro){


        $rem_act = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_id = $rem_act[0]->id_rem;
        $informe_act = Informe::where('id_rr',$rem_id)->orderBy('inf_num','desc')->first(); //todo el informe actual

        //oficio actual
        $oficio_act = Oficio::where('id_inf',$informe_act->id_inf)->orderBy('ofi_num','desc')->first();

        $fose = Fose::where('id_ofi',$oficio_act->id_ofi)->orderBy('fose_num_id','desc')->first();


        return view('docs.fose.generar_pdf_fose', compact('registro','rem_act','oficio_act','informe_act','fose'));

    }

    public function recuperar_pdf_fose(Reg_Remitente $registro, Fose $fose){

        $rem_act = Remitente::where('id_rem',$registro->id_rem)->get(); // todo el remitente actual
        $rem_id = $rem_act[0]->id_rem; // para obtener el id del remitente actual

        $fose_act = Fose::where('fose_num_id',$fose->fose_num_id)->get();


        return view('docs.fose.recuperar_fose_pdf', compact('registro','rem_act','fose_act'));

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
