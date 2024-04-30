<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function dashboard()
    {
        $users = Blog::count();
        return view('dashboard', compact('users'));
    }
    public function view()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('blogs.index', compact('blogs'));
    }
    public function create()
    {
        return view('blogs.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'       => 'required|string|max:191',
                'description' => 'required_without:image_url',
                'image_url'   => 'required_without:description|image|max:2048',
            ],
            [
                'title.required'               => 'Please Enter Title',
                'description.required_without' => 'Please Enter Description',
                'image_url.required_without'   => 'Please Choose Cover Image',
                'image_url.max'                => 'Please Choose Cover Image of maximum size of 2MB',
                'image_url.image'              => 'Please Choose Cover Image of proper image format',
            ]
        );
        try {

            if ($request->hasFile('image_url')) {
                $request['img'] = uniqid() . '.' . pathinfo($request->image_url->getClientOriginalName(), PATHINFO_EXTENSION);
                $request->image_url->storeAs('public/images/blogs', $request->img);
            }

            Blog::create([
                'title'       => $request->title,
                'description' => $request->description,
                'image_url'   => $request->img,
            ]);
            return redirect(route('blogs'))->with('success', 'Data has been Added Successfully !');
        } catch (Exception $ex) {
            return redirect(route('blogs'))->with('success', $ex->getMessage());
        }
    }
    public function edit($id)
    {
        $blogs = Blog::where('id', $id)->first();
        return view('blogs.edit', compact('blogs'));
    }

    public function update(Request $request, $id)
    {

        $blogs = Blog::where('id', $id)->firstOrFail();

        $validator = Validator::make(
            $request->all(),
            [
                'title'       => 'required|string|max:191',
                'description' => 'nullable',
                'image_url'   => 'nullable|image|max:2048',
            ],
            [
                'title.required'       => 'Please Enter Title',
                'image_url.max'        => 'Please Choose Cover Image of maximum size of 2MB',
                'image_url.image'      => 'Please Choose Cover Image of proper image format',
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('blogs')->with('errors', $validator->errors()->first());
        }

        if ($request->hasFile('image_url')) {

            $old_image = public_path("/storage/images/blogs/" . $blogs->image_url);

            if (File::exists($old_image)) {
                File::delete($old_image);
            }

            $blogs->update([
                'image_url' => uniqid() . '.' . pathinfo($request->image_url->getClientOriginalName(), PATHINFO_EXTENSION),
            ]);

            $request->image_url->storeAs('public/images/blogs', $blogs->image_url);
        }

        $blogs->update([
            'title'       => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('blogs')->with('success', 'Data has been Updated Sucessfully  !!!.');
    }


    public function delete(Request $request)
    {
        try {

            $blog = Blog::where('id', $request->blog_id)->firstOrFail();

            $old_image = public_path("/storage/images/blogs/" . $blog->image_url);
            if (File::exists($old_image)) {
                File::delete($old_image);
            }

            $blog->delete();

            return redirect()->route('blogs')->with('success', 'Data has been Deleted Successfully !');
        } catch (\Exception $ex) {
            if ($ex instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
                return redirect()->route('blogs')->with('errors', 'Whoops, Latest News Not Found !');
            }
            return redirect()->route('blogs')->with('errors', $ex->getMessage());
        }
    }
}
