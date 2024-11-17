<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;
use App\Models\People;
use App\Http\Requests\CreatePerson;
use GuzzleHttp\Promise\Create;

class AdminController extends Controller
{
    public function inicioAdmin()
    {
        return view('Admin/InicioAdmin');
    }

    public function people()
    {
        return view('Admin.PeopleAdmin');
    }   
    public function user()
    {
        return view('Admin.UserAdmin');
    }
    
    public function addAdmin()
    {
        return view('Admin/UserAdmin');
    }
    public function addProfesor()
    {
        return view('Admin/UserProfesor');
    }
    public function addAlumno()
    {
        return view('Admin/UserAlumno');
    }

    public function addUser(Request $request)
    {
        $user = new CustomUser();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->recovery_email = $request->recovery_email;
        $user->recovery_token = $request->recovery_token;
        $user->token_expiration = $request->token_expiration;
        $user->active = $request->active;
        $user->save();
        return redirect()->route('addUser');
    }

    public function addPerson(CreatePerson $request)
    {
        $person = new People();
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->birth_date = $request->birth_date;
        $person->address = $request->address;
        $person->phone = $request->phone;
        $person->save();
        return redirect()->route('viewUsers');
    }
}
