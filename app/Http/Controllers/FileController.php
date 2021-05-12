<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
class FileController extends Controller
{
	public function _construct()
	{
		$this->middleware('auth');
	}
    public function index()
    {
    	return view('welcome');
    }

    public function uploadFile(Request $request)
    {	
    	$file_extension = $request->single_upload->getClientOriginalExtension();
    	$file_name = $request->single_upload->getClientOriginalName();

    	$imageName = time(). '_'. $file_name .'.'.$request->single_upload->getClientOriginalExtension();

    	$file = File::create([
    		'user_id' => auth()->user()->id,
    		'file_name' => $file_name,
    		'file_extension' => $file_extension,
    	]);


    	if (!empty($file)) {
    		$request->single_upload->move(public_path('/file_uploads'), $imageName);
    		$message = 'success';
    		
    	}else{
    		$message = 'failed';
    	}

    	return back()->with(['message' => 'success']);
    	
    }
}
