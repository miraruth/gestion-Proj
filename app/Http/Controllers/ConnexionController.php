<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Hash;


class ConnexionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // pour la connexion le formulaire
    {
        $request =$this->validate([
            'email'=> 'required',
            'password'=> 'required',

        ]);

        if (Auth::attempt($request->only('email', 'password'))){
            return view('profil.userspace');

        }
        else{
            session()->flash('msg', 'erreur est survenue verifiez vos données.');
            return redirect()->back();
        
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    // pour l'inscription le fromulaire
    {
        




        $user = new User;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email =$request->email;
        $user->numero = $request->numero;
        $user->password = Hash::make($request->password);
                 
    
        $user->save();  
        return redirect('connexionPage');

     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();

        return view('profil.showuser', compact('user'));

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
        $user ::find(id);
        $user->delete();
    }

    public function deconnexion()
    {
        Auth::logout();
        return redirect('/');
    }
}
