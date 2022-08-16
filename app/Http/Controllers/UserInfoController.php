<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class UserInfoController extends Controller
{
    //
    public function index()
    {
        return view('user.profile');
    }

    public function add_info(Request $request, $id)
    {
        $id = Auth::user()->id;
        $user = new UserInfo();
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/user_images', $filename);
            $user->profile_picture = $filename;
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->postal_code = $request->postal_code;
        $user->city = $request->city;
        $user->user_id = $id;
        // dd($user);
        $user->save();

        return redirect()->back()->with('success', 'Information has been updated');
    }
}