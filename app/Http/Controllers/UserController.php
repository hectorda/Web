<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository as User;
use App\Http\Requests;
use Flash,Input,File;
use Auth;

class UserController extends Controller
{

     /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user=$user;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=$this->user->all();
        return view('users.index')
            ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $input=$request->all();

        if (Input::hasfile('imagen')) {
            $carpeta='images/';
            if (!File::exists($carpeta))    //Crear carpeta de documentos adjuntos
                File::makeDirectory($carpeta);
            
            $filename=Input::file('imagen')->getClientOriginalName();
            Input::file('imagen')->move($carpeta, $filename);
            $input['imagen']=$carpeta.$filename;
        }

        $this->user->create($input);

        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=$this->user->find($id);
        if(empty($user)){
            Flash::warning('El Usuario no existe');
            return redirect('users');
        }
        return view('users.show')
            ->with('user',$user);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user->find($id);

        if(empty($user))
        {
            Flash::error('Usuario no encontrado');

            return redirect('users');
        }

        return view('users.edit')
            ->with('user', $user);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = $this->user->find($id);

        if(empty($user))
        {
            Flash::error('Usuario no encontrado');
            return redirect('users');
        }

        if (trim(Input::get('password')) == '') { //Evita actualizar el password si es vacio.
           $input = Input::except('password');
        }
        else {
           $input = Input::all();
        }

        $this->user->updateRich($input, $id);

        Flash::success('Usuario actualizado satisfactoriamente.');
        
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $user=$this->user->find($id);
        if(empty($user)){
            Flash::warning('El Usuario no existe');
            return redirect('users');
        }

        $this->user->delete($id);

        Flash::success('Usuario borrado exitosamente');

        return redirect('users');
    }
}
