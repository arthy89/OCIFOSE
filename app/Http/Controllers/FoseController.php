<?php

namespace App\Http\Controllers;

use App\Models\Reg_Remitente;
use App\Models\Remitente;
use App\Models\Informe;
use App\Models\Oficio;
use App\Models\Fose;
use Illuminate\Http\Request;
// use App\Http\Requests\FoseRequest;

class FoseController extends Controller
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
        // return $registro->all();
        $informe = Informe::where('id_rr',$registro->id_rr)->orderBy('id_inf','desc')->first();
        $remitente = Remitente::where('id_rem',$registro->id_rr)->get(); // todo el remitente actual
        //$remitente[0];
        $oficio_num = Oficio::select('ofi_num')->orderBy('ofi_num','desc')->first(); //? numero de oficio

        // return $registro->id_rr;
        
        return view('docs.fose.fose_crear', compact('informe','remitente','registro','oficio_num'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Fose $fose, Reg_Remitente $registro)
    {
        //oficio actual
        $oficio_id = Oficio::select('id_ofi','ofi_num')->orderBy('ofi_num','desc')->first();
        // $num_ofi = $oficio_num->ofi_num; //ultimo num informe



        $fose = Fose::create([
            'fose_num_id' => $request->fose_num,
            'id_ofi' => $oficio_id->id_ofi,
            'fose_fec' => $request->fecha,
            'fose_hor' => $request->hora,
            'fose_acc' => $request->accion,
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
