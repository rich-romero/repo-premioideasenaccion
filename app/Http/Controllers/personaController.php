<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Mail\NewRegistration;
use Mail;
class personaController extends Controller
{
    public function register(Request $request){
        
        $rules = [
            'nombre'=>'required|string|min:4|max:100',
            'apellido'=>'required|min:4|string|max:100',
            'email'=>'required|email|unique:personas,email',
            'telefono'=>'required|string|min:7',
            'dni'=>'required|min:7|max:15|string|unique:personas,dni',
            'direccion'=>'required|min:6|string',
            'fechanac'=>'required|date',
            'ciudad'=>'required|string|min:4',
            'provincia'=>'required|min:4|string',
        ];
        $msg=[
            'nombre.required'=>'El nombre es obligatorio',
            'apellido.required'=>'El apellido es obligatorio',
            'fechanac.required'=>'La fecha de nacimiento es obligatoria',
            'direccion.required'=>'La direccion es obligatoria',
            'ciudad.required'=>'La ciudad es obligatoria',
            'provincia.required'=>'La provincia es obligatoria',
            'telefono.required'=>'La telefono es obligatoria',
            'email.required'=>'El email es obligatorio',
            'dni.required'=>'El dni es obligatorio',
            'nombre.min'=>'El nombre debe tener al menos 4 caracteres',
            'apellido.min'=>'El apellido debe tener al menos 4 caracteres',
            'telefono.min'=>'El telefono debe ser mayor a 7 digitos',
            'dni.min'=>'El dni debe ser mayor a 7 digitos',
            'direccion.min'=>'La direccion debe ser mayor a 6 digitos',
            'ciudad.min'=>'La ciudad debe ser mayor a 4 digitos',
            'provincia.min'=>'La provincia debe ser mayor a 4 digitos',
            'dni.max'=>'El dni debe ser menor a 15 digitos',            
            'email.unique'=>'El email ya se encuentra en uso',    
            'dni.unique'=>'Este dni ya se encuentra en uso',
            'email.email'=>'El email no es un email valido',
        ];
     $this->validate($request,$rules,$msg);

        
        //creamos una persona con los datos enviados
        $persona=Persona::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'email'=>$request->email,
            'telefono'=>$request->telefono,
            'dni'=>$request->dni,
            'fechanac'=>$request->fechanac,
            'direccion'=>$request->direccion,
            'ciudad'=>$request->ciudad,
            'provincia'=>$request->provincia,
        ]);
        
    $correo=["gustavolcs.271@gmail.com"];

    Mail::to($correo)->send(new NewRegistration($persona));
    

    
    $mensaje="Te has registrado con exito, nos comunicaremos contigo en breve";
    \Session::flash('mensaje', $mensaje);
    return redirect('/')->with(["mensaje",$mensaje]);
    }
}
