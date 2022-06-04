<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function __construct(){
        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.edit')->only('edit', 'update');
    }

    public function index()
    {
        $tipo_user = ['Administrador','Jefe Depto','Empresa', 'Nuevo'];
        $users = User::whereIn('tipo_user', $tipo_user)->latest('id')->paginate();
        return view('user/index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }


    public function edit(User $user)
    {
        $roles = Role::all();
        return view('user.edit',compact('user', 'roles'));
    }


    public function update(UserRequest $request, User $user)
    {
        if($request->roles){
            $user->roles()->sync($request->roles);
        }else{
            return redirect('user.edit');
        }

        if($request->roles == 1){
            $tipo_user = 'Administrador';
            $status = '1';
        }elseif($request->roles == 2){
            $tipo_user = 'Jefe Depto';
            $status = '1';
        }elseif($request->roles == 3){
            $tipo_user = 'Jefe Depto';
            $status = '1';
        }elseif($request->roles == 4){
            $tipo_user = 'Jefe Depto';
            $status = '1';
        }elseif($request->roles == 5){
            $tipo_user = 'Jefe Depto';
            $status = '1';
        }elseif($request->roles == 6){
            $tipo_user = 'Jefe Depto';
            $status = '1';
        }elseif($request->roles == 7){
            $tipo_user = 'Empresa';
            $status = '1';
        }elseif($request->roles == 8){
            $tipo_user = 'Alumno';
            $status = '1';
        }elseif($request->roles == 9){
            $tipo_user = 'Nuevo';
            $status = '0';
        }

        $user->update([
            'tipo_user' => $tipo_user,
            'status' => $status
        ]);

        return redirect('users/'.$user->id.'/edit')->with('mensaje','Rol de usuario asignado correctamente!');
    }

}
