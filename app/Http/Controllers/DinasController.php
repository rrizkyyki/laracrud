<?php

namespace App\Http\Controllers;

use App\Models\Dinas_model;
use Illuminate\Http\Request;

class DinasController extends Controller
{
    // the first function that will used
    public function index(){
        $dinas = Dinas_model::all();
        return view('/dashboard', compact(['dinas']));
    }

    // just view
    public function create(){
        return view('/create');
    }

    public function store(Request $request){
        // all set in model so i use req all
        Dinas_model::create($request->all());

        // i think a can ignore some field
        // Dinas_model::create($request->except(['_token']));

        // custom add data
        // Dinas_model::create([
        //     'nip'=>$request->nip,
        //     'nama'=>$request->nama,
        //     'kota_asal'=>$request->kota_asal,
        //     'st_asal'=>$request->st_asal,
        //     'ket_asal'=>$request->ket_asal,
        //     'kota_tujuan'=>$request->kota_tujuan,
        //     'st_pulang'=>$request->st_pulang,
        //     'ket_pulang'=>$request->ket_pulang
        // ]);


        return redirect('/dashboard')->with('alert','Data has been added !');
    }

    public function edit($id){
        $dinas = Dinas_model::find($id);
        return view('/edit', compact(['dinas']));
        // dd($id);
    }

    public function update($id, Request $request){
        $dinas = Dinas_model::find($id);
        $dinas->update($request->all());
        return redirect('/dashboard')->with('alert', 'Data has been updated !');
    }

    public function destroy($id){
        $dinas = Dinas_model::find($id);
        $dinas->delete();
        return redirect('/dashboard')->with('alert', 'Data has been deleted !');
    }
}
