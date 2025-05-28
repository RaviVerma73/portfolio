<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function list(){
        $data = Work::all();
        return view('admin.work.list',compact('data'));
    }

    public function add(Request $request){
        if($request->isMethod('post')){
           $data = [
                    'title'  =>  $request->title,
                    'url'  =>  $request->url,
                    'description'   =>$request->description,
                ];

            if($request->hasfile('image')){
                $img = $request->file('image');
                $imgName = time().'.'.$img->extension();
                $img->storeAs('work_img',$imgName,'public');
                $data['image'] = $imgName;
            }

            Work::create($data);

            // echo '<pre>';
            // print_r($_POST);die;
            return to_route('work')->with('success','Data Save Successfully');
        }
        return view('admin.work.add');
    }
    public function edit($id){
        if($id){
            $data = Work::findOrFail($id);
        }
        return view('admin.work.edit',compact('data'));
    }

        public function update(Request $request){
        if($request->isMethod('post')){
            if(!empty($request->id)){
                $data = Work::findOrFail($request->id);

                if($request->hasfile('image')){
                    $img = $request->file('image');
                    $imgName = time().'.'.$img->extension();
                    $img->storeAs('work_img',$imgName,'public');
                    // print_r($imgName);die;
                    $data->image = $imgName;
                }

                $data->title = $request->title;
                $data->url = $request->url;
                $data->description   =  $request->description;

                $data->save();
            }
        }
        return to_route('work')->with('success', 'Update Date Successfully');
    }

    public function delete($id){
        if(!empty($id)){
            $data = Work::find($id);
            $data->delete();
            return to_route('work')->with('success', 'Delete Date Successfully');
        }
    }
}
