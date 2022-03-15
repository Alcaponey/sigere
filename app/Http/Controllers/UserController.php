<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Jetstream;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        //return view('usuarios.index', compact('usuarios'));
        return view('dashAdmin.usuarios', compact('usuarios'));
    }
    
    public function create(){
        $usuario = new User();
        return view('usuarios.create',compact('usuario'));
    }

    public function store(Request $request){
        $request->validate([            
            'name' => ['required', 'string', 'max:255'],
            'typeDocument' => ['required', 'string', 'max:255'],
            'numDocument' => ['required', 'string', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:255'],            
        ]);
        User::create([
            'name' => $request['name'],
            'typeDocument' => $request['typeDocument'],
            'numDocument'=> $request['numDocument'],
            'phone'=> $request['phone'],            
            'email'=> $request['email'],
            'password'=> bcrypt($request['password']),
        ]);         
        return redirect()->route('usuarios');
    }

    public function edit($id){
        $usuario = User::where('id',$id)->first();
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => ['string', 'max:255'],
            'typeDocument' => ['string', 'max:255'],
            'numDocument' => ['string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],            
        ]);
        //dd($request);
        $resultado = User::where('id',$id)->update([
            'name'=>$request['name'],
            'typeDocument'=>$request['typeDocument'],
            'numDocument'=>$request['numDocument'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'role'=>$request['role']
        ]);
        $usuarios = User::all();
        //return view('usuarios.index', compact('usuarios'));
        return view('dashAdmin.usuarios', compact('usuarios'));
    }
    
    public function delete($id){
        $usuario = User::where('id',$id)->delete();
        $usuarios = User::all();
        //return view('usuarios.index', compact('usuarios'));
        return view('dashAdmin.usuarios', compact('usuarios'));
    }
}
