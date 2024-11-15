<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CustomUser;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
   

    public function index(): View
    {
        $users = DB::table('custom_users')->where('active', 1)->get();
    
        return view('users.index', ['users' => $users]); 
    }
      
     public function create()
     {
         $roles = Role::all();
         return view('Admin.UsersAdmin', compact('roles'));
     }
     public function store(Request $request)
     {
         
         
         // Validación de datos
         $validatedData = $request->validate([
             'first_name' => 'required',
             'last_name' => 'required',
             'birth_date' => 'required|date',
             'address' => 'required',
             'phone' => 'required',
             'username' => 'required',
             'password' => 'required|min:8',
             'email' => 'required|email',
             'role_id' => 'required|exists:roles,id',
         ]);
         
         // Creación de registro en People
         $person = \App\Models\People::create([
             'first_name' => $validatedData['first_name'],
             'last_name' => $validatedData['last_name'],
             'birth_date' => $validatedData['birth_date'],
             'address' => $validatedData['address'],
             'phone' => $validatedData['phone'],
         ]);
         
         // Creación de registro en CustomUser
         $user = CustomUser::create([
             'person_id' => $person->id,
             'username' => $validatedData['username'],
             'password' => Hash::make($validatedData['password']),
             'email' => $validatedData['email'],
             'active' => 1,
             'registration_date' => now(),
         ]);
         
         // Inserción en user_role
         DB::table('user_role')->insert([
             'user_id' => $user->id,
             'role_id' => $validatedData['role_id'],
             'created_at' => now(),
             'updated_at' => now(),
         ]);
         

        
    if ($validatedData['role_id'] == 2) { 
        dd("Se está intentando crear un registro en Teacher con person_id: {$person->id}");
        \App\Models\Teacher::create([
            'person_id' => $person->id,
            'rfc' => 'RFC123456789', 
        ]);
    } elseif ($validatedData['role_id'] == 3) { 
        \App\Models\Student::create([
            'person_id' => $person->id,
            'student_number' => 'STU12345',
        ]);
    } elseif ($validatedData['role_id'] == 1) { 
        \App\Models\Administrator::create([
            'person_id' => $person->id,
            'admin_code' => 'ADM12345',
        ]);
    }
         return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente');
     }
     
 }