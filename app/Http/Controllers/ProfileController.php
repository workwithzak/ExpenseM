<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Groups;

class ProfileController extends Controller
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
        return view('profile');
    }

    public function user_Groups(){
        $user = User::find(2);
        $user->groups;
        return $user;
    }

    public function group_users(){
        $groups = Groups::find(1);
        $user = User::find(3);

        $groups->users()->detach($user);
        $groups->users;
        return $groups;
    }

    function friend(){
        $user = User::find(1);
        $friend = User::find(2);
        $user->friends()->sync($friend,['1' => ['status'=>'accepted'],'2'=>['status'=>'rejected']]);
        $user->friends;
        return $user;
    }
    function test(){
        echo "this is just test function";
    }

}
