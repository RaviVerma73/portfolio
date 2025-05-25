<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function list(){
        $data = About::all();
        // $data = About::paginate(1);
        return view('admin.about_us.list',compact('data'));
    }
    public function add(Request $request){
        if($request->isMethod('post')){
            
            $data = [
                    'name'  =>  $request->name,
                    'designation'   =>$request->designation,
                    'email'   => $request->email,
                    'phone'   => $request->phone,
                    'age'   =>  $request->age,
                    'residence' =>  $request->residence,
                    'freelance' =>  $request->freelance,
                    'address'   =>  $request->address,
                    'quota'   =>  $request->quote,
                    'descreption'   =>  $request->descreption,
                ];

            if($request->hasfile('image')){
                $img = $request->file('image');
                $imgName = time().'.'.$img->extension();
                $img->storeAs('img',$imgName,'public');
                $data['image'] = $imgName;
            }

            if($request->hasfile('cv')){
                $cv = $request->file('cv');
                $cv_name = time().'.'.$cv->extension();
                $cv->storeAs('doc',$cv_name, 'public');
                $data['cv'] = $cv_name;
            }

            About::create($data);

            // echo '<pre>';
            // print_r($_POST);die;
            return to_route('about-us')->with('success','Data Save Successfully');
        }
        return view('admin.about_us.add');
    }
    public function edit($id){
        if($id){
            $data = About::findOrFail($id);
        }
        return view('admin.about_us.edit',compact('data'));
    }

    public function update(Request $request){
        if($request->isMethod('post')){
            if(!empty($request->id)){
                $data = About::findOrFail($request->id);

                if($request->hasfile('image')){
                    $img = $request->file('image');
                    $imgName = time().'.'.$img->extension();
                    $img->storeAs('img',$imgName,'public');
                    // print_r($imgName);die;
                    $data->image = $imgName;
                }
    
                if($request->hasfile('cv')){
                    $cv = $request->file('cv');
                    $cv_name = time().'.'.$cv->extension();
                    $cv->storeAs('doc',$cv_name, 'public');
                    $data->cv = $cv_name;
                }

                $data->name = $request->name;
                $data->designation   = $request->designation;
                $data->email   = $request->email;
                $data->phone   = $request->phone;
                $data->age   =  $request->age;
                $data->residence =  $request->residence;
                $data->freelance =  $request->freelance;
                $data->address  =  $request->address;
                $data->quota  =  $request->quote;
                $data->descreption   =  $request->descreption;

                $data->save();
            }
        }
        return to_route('about-us')->with('success', 'Update Date Successfully');
    }

    public function delete($id){
        if(!empty($id)){
            $data = About::find($id);
            $data->delete();
            return to_route('about-us')->with('success', 'Delete Date Successfully');
        }
    }
}
