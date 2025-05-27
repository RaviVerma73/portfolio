<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function list(){
        $data = Blog::all();
        return view('admin.blog.list',compact('data'));
    }

    public function add(Request $request){
        if($request->isMethod('post')){
           $data = [
                    'title'  =>  $request->title,
                    'description'   =>$request->description,
                ];

            if($request->hasfile('image')){
                $img = $request->file('image');
                $imgName = time().'.'.$img->extension();
                $img->storeAs('blog_img',$imgName,'public');
                $data['image'] = $imgName;
            }

            Blog::create($data);

            // echo '<pre>';
            // print_r($_POST);die;
            return to_route('blog')->with('success','Data Save Successfully');
        }
        return view('admin.blog.add');
    }
    public function edit($id){
        if($id){
            $data = Blog::findOrFail($id);
        }
        return view('admin.blog.edit',compact('data'));
    }

        public function update(Request $request){
        if($request->isMethod('post')){
            if(!empty($request->id)){
                $data = Blog::findOrFail($request->id);

                if($request->hasfile('image')){
                    $img = $request->file('image');
                    $imgName = time().'.'.$img->extension();
                    $img->storeAs('blog_img',$imgName,'public');
                    // print_r($imgName);die;
                    $data->image = $imgName;
                }

                $data->title = $request->title;
                $data->description   =  $request->description;

                $data->save();
            }
        }
        return to_route('blog')->with('success', 'Update Date Successfully');
    }

    public function delete($id){
        if(!empty($id)){
            $data = Blog::find($id);
            $data->delete();
            return to_route('blog')->with('success', 'Delete Date Successfully');
        }
    }
}
