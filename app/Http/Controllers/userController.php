<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listagemUsuarios = User::all();

        return view('usuarios', compact('listagemUsuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastroUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras= [
            'nome' => 'required|min:6|max:40',
            'usuario' => 'required|min:6|max:40',
            'email' => 'required|min:6|max:40',
            'senha' => 'required|min:6|max:40'
        ];

        $mensagens = [
            'nome.required' => 'Digite seu nome',
            'nome.min' => 'Seu nome precisa ter no mínimo 3 letras',
            'nome.max' => 'Seu nome precisa ter no máximo 40 letras',

            'usuario.required' => 'Digite seu usuario',
            'usuario.min' => 'Seu usuario precisa ter no mínimo 3 letras',
            'usuario.max' => 'Seu usuario precisa ter no máximo 40 letras',

            'email.required' => 'Digite seu email',
            'email.min' => 'Seu email precisa ter no mínimo 3 letras',
            'email.max' => 'Seu email precisa ter no máximo 40 letras',

            'senha.required' => 'Digite sua senha',
            'senha.min' => 'Sua senha precisa ter no mínimo 3 letras',
            'senha.max' => 'Sua senha precisa ter no máximo 40 letras',
        ];

        $request->validate($regras, $mensagens);

        $usuario = new User();

        $usuario->nome = $request->input('nome');
        $usuario->usuario = $request->input('nome');
        $usuario->nascimento = $request->input('nascimento');
        $usuario->email = $request->input('email');
        $usuario->senha = Hash::make($request->input('senha'));

        $usuario->save();

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $usuario)
    {
        return view('deletaUsuario', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $usuario)
    {
        return view('alteraUsuario', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $usuario)
    {
        $regras= [
            'nome' => 'required|min:6|max:40',
            'usuario' => 'required|min:6|max:40',
            'email' => 'required|min:6|max:40',
            'senha' => 'required|min:6|max:40'
        ];

        $mensagens = [
            'nome.required' => 'Digite seu nome',
            'nome.min' => 'Seu nome precisa ter no mínimo 3 letras',
            'nome.max' => 'Seu nome precisa ter no máximo 40 letras',

            'usuario.required' => 'Digite seu usuario',
            'usuario.min' => 'Seu usuario precisa ter no mínimo 3 letras',
            'usuario.max' => 'Seu usuario precisa ter no máximo 40 letras',

            'email.required' => 'Digite seu email',
            'email.min' => 'Seu email precisa ter no mínimo 3 letras',
            'email.max' => 'Seu email precisa ter no máximo 40 letras',

            'senha.required' => 'Digite sua senha',
            'senha.min' => 'Sua senha precisa ter no mínimo 3 letras',
            'senha.max' => 'Sua senha precisa ter no máximo 40 letras',
        ];

        $request->validate($regras, $mensagens);

        $usuario->nome = $request->input('nome');
        $usuario->usuario = $request->input('nome');
        $usuario->nascimento = $request->input('nascimento');
        $usuario->email = $request->input('email');
        $usuario->senha = Hash::make($request->input('senha'));

        $usuario->save();

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $usuario)
    {
        $usuario->delete();

        return redirect(route('usuarios.index'));
    }
}
