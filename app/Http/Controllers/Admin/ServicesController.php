<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Services;

class ServicesController extends Controller
{
    public function list(){
        $data = Services::all();
        return view('admin.services.list',compact('data'));
    }
    public function add(Request $request){
        if($request->isMethod('post')){
            $data=[
                'name'=>$request->name,
                'icon'=>$request->icon,
                'description'=>$request->description,
            ];
            // print_r($data);die;
            Services::Create($data);
            return to_route('services')->with('success','Data Save Successfully');
        }
       return view('admin.services.add');
    }
    public function edit($id){
        $data = Services::findOrFail($id);
        return view('admin.services.edit', compact('data'));
    }

    public function update(Request $request){
        if($request->isMethod('post')){
            if(!empty($request->id)){
                $data = Services::findOrFail($request->id);

                $data->name = $request->name;
                $data->icon = $request->icon;
                $data->description = $request->description;

                $data->save();
            }else{
                return to_route('services.add')->with('success','ID Not Found');
            }
        }
        return to_route('services')->with('success','Update Successfully');
    }

    public function delete($id){
        if(!empty($id)){
            $data = Services::find($id);
            $data->delete();
            return to_route('services')->with('success', 'Delete Date Successfully');
        }
    }
}
