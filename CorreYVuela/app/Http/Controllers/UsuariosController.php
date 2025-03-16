<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;use Illuminate\Testing\Fluent\Concerns\Has;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function portada(){
        return view('portada');
    }
    public function inicio()
    {
        return view('inicio');
    }

    public function registrarUsuario(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'dni' => 'required|string|unique:usuarios,dni', // Verifica que el DNI sea único
            'password' => 'required|string|min:4', // Contraseña con un mínimo de 6 caracteres
        ]);

        // Crear el usuario
        Usuarios::create([
            'dni' => $request->dni,
            'contraseña' => $request->password, // Guardamos la contraseña en texto plano (no recomendado)
        ]);

        // Redirigir al inicio para iniciar sesión
        return redirect()->route('usuarios.inicio')->with('success', 'Usuario registrado correctamente. Por favor, inicia sesión.');
    }


    public function iniciarSesion(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'dni' => 'required|string',
            'password' => 'required|string',
        ]);

        // Buscar al usuario por DNI
        $usuario = Usuarios::where('dni', $request->dni)->first();

        if ($usuario && $request->password === $usuario->contraseña) {
            // Si las credenciales son correctas, redirigir al index
            return redirect()->route('usuarios.index')->with('success', 'Sesión iniciada correctamente.');
        }

        // Si las credenciales no son correctas, redirigir con un mensaje de error
        return back()->withErrors(['login_error' => 'DNI o contraseña incorrectos.']);
    }


    public function superacion(Request $request){
        return view('superacion');
    }


    public function mostrarFormularioRegistro()
    {
        return view('registrarse');
    }

    public function index(Request $request){
        return view('index');
    }


    public function carreras(Request $request){
        return view('carreras');
    }



    public function desafioNazari(Request $request){
        return view('desafioNazari');
    }


    public function desafioPueblosBlancos(Request $request){
        return view('desafioPueblosBlancos');
    }

    public function cordobaBikeRace(Request $request){
        return view('cordobaBikeRace');
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }
}
