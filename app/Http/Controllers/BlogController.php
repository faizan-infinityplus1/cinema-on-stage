<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function dashboard(){
        $users = Blog::count();
        return view('dashboard',compact('users'));
    }
    public function view()
    {
        $blogs = Blog::get();
        return view('blogs.index', compact('blogs'));
    }
    public function create()
    {
        return view('blogs.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'username'   => 'required|string|unique:users|max:191',
                // 'mobile'     => 'required|string|max:191',
                // 'email' => 'required|string|max:191',
                'password' => 'required|string|max:191',
                // 'status' => 'required|integer',
            ],
            [
                'username.required' => 'Please Enter User Name',
                'username.unique' => $request->name . ' User Name Already Exist',
                // 'mobile' => 'Please Enter Mobile Number',
                // 'email' => 'Please Enter Email Id',
                'password.required' => 'Please Enter Password',
                // 'status' => 'Please Enter Status',
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('users')->with('errors', $validator->errors()->first());
        }
        if ($request->hasFile('avatar')) {
            $avatar = "user_" . rand(0000, 9999) . '.' . pathinfo($request->avatar->getClientOriginalName(), PATHINFO_EXTENSION);
            $request->avatar->storeAs('public/images/users', $avatar);

            User::create([
                'username' => $request->username,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'avatar' => $avatar,
                'password' =>  bcrypt($request->password),
                // 'status' => $request->status,
            ]);

            return redirect()->route('users')->with('success', 'User has been Addded Sucessfully  !!!.');
        }
        User::create([
            'username' => $request->username,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
            // 'status' => $request->status,
        ]);
        return redirect()->route('users')->with('success', 'User has been Addded Sucessfully  !!!.');
    }
    public function edit($id)
    {
        $blogs = User::where('id', $id)->first();
        return view('blogs.edit', compact('blogs'));
    }

    public function update(Request $request, $id)
    {

        $user = User::where('id', $id)->firstOrFail();

        $validator = Validator::make(
            $request->all(),
            [
                'username'   => 'required|string|max:191',
                // 'mobile'     => 'required|string|max:191',
                // 'email' => 'required|string|max:191',
                // 'status' => 'required|integer',
            ],
            [
                'username.required' => 'Please Enter User Name',
                // 'mobile' => 'Please Enter Mobile Number',
                'email' => 'Please Enter Email Id',
                // 'status' => 'Please Enter Status',
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('users')->with('errors', $validator->errors()->first());
        }

        if ($request->hasFile('avatar')) {

            $old_image = public_path("/storage/images/users/" . $user->avatar);

            if (File::exists($old_image)) {
                File::delete($old_image);
            }

            $user->update([
                'image_url' => uniqid() . '.' . pathinfo($request->avatar->getClientOriginalName(), PATHINFO_EXTENSION),
            ]);

            $request->avatar->storeAs('public/images/users', $user->avatar);
        }
        if ($request->filled('password') && $request->has('password')) {
            $user->update([
                'password' =>  bcrypt($request->password),
            ]);
        }
        $user->update([
            'username' => $request->username,
            'mobile' => $request->mobile,
            'email' => $request->email,
        ]);
        return redirect()->route('users')->with('success', 'User has been Updated Sucessfully  !!!.');
    }

    public function delete(Request $request)
    {
        $customer = User::where('id', $request->user_id)->firstOrFail();
        $customer->update([
            'isDeleted' => 1
        ]);
        return redirect()->route('users')->with('success', 'User has been Deleted Sucessfully  !!!.');
    }
}
