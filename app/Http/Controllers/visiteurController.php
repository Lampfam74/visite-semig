<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Models\Directions;
use App\Models\Visites;
use App\Notifications\SMSNotification;
// use App\Notifications\SMSNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class visiteurController extends Controller
{
    public function index()
    {
        $directions=Directions::all();
        return view('visiteur.index',[
            'directions'=>$directions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $request=(new \DateTime())->format( 'Y-m-d' );
        dd($request);
        $visiteurs=Visites::where('date',$request)->get();
        // dd($visiteurs);
        // $visiteurs=Visites::all();
        return view('visiteur.create',[
            'visiteurs'=>$visiteurs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $user=Auth::user()->email;
        // dd($request);
        $destination=Directions::where('libelle',$request->direction)->first();
        $user=$destination->email;
        // dd($user);
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'date'=>'required',
            'telephone'=>'required',
            'direction'=>'required',
            'destination'=>'required',
        ]);
       $visites= Visites::create([
            'nom'=>$request['nom'],
            'prenom'=>$request['prenom'],
            'date'=>$request['date'],
            'telephone'=>$request['telephone'],
            'direction'=>$request['direction'],
            'destination'=>$request['destination'],
        ]);
        // $user->notify(new SMSNotification("A new user has visited on your application."));
        Mail::to($user)->send(new NotificationMail($visites));

        return back()->with('msg','add succefuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
