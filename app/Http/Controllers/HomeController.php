<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
    public function list(){
        $users = User::all();
        return view('allUser', [
            'users'=>$users
        ]);
    }
    public function formAddUser(){
        return view('addUser');
    }
    public function storeUser(Request $request){
        $user = new User();
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->emprego = $request->emprego;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('usersAll');
    }
    public function formEditUser(User $user){
        return view('editUser', [
                'user'=> $user
        ]);
    }
    public function edi(User $user, Request $request){
        $user->emprego = $request->emprego;

        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('usersAll');

    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('usersAll');
    }
}
