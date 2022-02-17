<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about; 

class AboutController extends Controller
{
	public function index1()
	{
		return view ('about', [
            "title" => "about",
          "about" => about::all()
     
    	]);  
	}

	public function show(about $About)
	{
		return view('tentang', [
           "title" => "tentang post",
           "abouts" => $About
     ]);
	}
}