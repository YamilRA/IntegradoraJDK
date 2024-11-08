<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\CustomUser;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = DB::select('select * from users where active = ?', [1]);
 
        return view('user.index', ['users' => $users]); 
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
        dd('Paso 4: Inserción en user_role exitosa');
    
        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente');
    }
    
}