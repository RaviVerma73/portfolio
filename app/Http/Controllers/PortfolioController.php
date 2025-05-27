<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Services;
use App\Models\Contact;
use App\Models\Blog;

class PortfolioController extends Controller
{
    public function protfolio(){
        $data['about'] = About::first();  
        $data['services'] = Services::all();  
        $data['blog'] = Blog::all();  

        return view('portfolio.index',compact('data'));
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
    
            // Validate the incoming request
            $validated = $request->validate([
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);
    
            // Prepare data for insertion
            $data = [
                'name' => $request->full_name,
                'email' => $request->email,
                'message' => $request->message,
            ];
            // print_r($data);die;
            // Save to database
            $res = Contact::create($data);
           
            // Return JSON response
            if ($res) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Contact saved successfully',
                ]);
            } else {
                return response()->json([
                    'status' => 0,
                    'message' => 'Failed to save contact',
                ]);
            }
        }
    }
    
}
