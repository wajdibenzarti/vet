<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\User;
use DB;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consultation.index');
    }

    public function list()
    {
        $consultations = DB::table('consultations')->where('user_id',auth()->id())->where('date','>=',date("Y-m-d H:i:s"))->get();
        foreach($consultations as $consultation){
            $_pets[] = $consultation->pet_id;
            $_vets[] = $consultation->vet_id;
            $_users[] = $consultation->vet_id;
        }
        $pets = DB::table('animals')->whereIn('id',$_pets)->get()->keyBy('id')->toArray();
        $vets = DB::table('users')->whereIn('id',$_vets)->get()->keyBy('id')->toArray();
        $users = DB::table('users')->whereIn('id',$_users)->get()->keyBy('id')->toArray();
        return view('consultation.list',compact('consultations','pets','vets','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pets = auth()->user()->animals;
        $vets = User::where('role','Veterinaire')->get();
        return view('consultation.ajout',compact('pets','vets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $animal = Consultation::Create($inputs);
        return redirect()->action('ConsultationController@list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Consultation::destroy($id);
        return redirect()->action('ConsultationController@list');
    }
}
