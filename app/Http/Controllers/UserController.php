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
        
        $person = \App\Models\People::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'birth_date' => $validatedData['birth_date'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
        ]);
        
        dd($request->all()); 

    
        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente');
    }
    

    
}