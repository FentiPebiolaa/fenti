<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::latest()->paginate(50);
        return view('content.index',compact('content'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name_content' => 'required',
            'order_content' => 'required',
            'icon_content' => 'image|file|max:1024',
            'description_content' => 'required',
            'url_content' => 'required',
        ]);
        if($request->file('icon_content')){
            $file = $request->file('icon_content');
            $location = 'files';
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move($location,$filename);
          } 

  
        Content::create([
            'name_content' => $request->name_content,
            'order_content' => $request->order_content,
            'icon_content' => $image,
            'description_content' => $request->description_content,
            'url_content' => $request->url_content,
            'status' => $request->status,
            'type' => $request->type,


        ]);
   
        return redirect()->route('content.index')
                        ->with('success','content created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     
        $product = Content::find($id);   
        return view('content.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Content::find($id);
        return view('content.edit',compact('product'));
    }  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_content' => 'required',
            'order_content' => 'required',
            'icon_content' => 'image|file|max:1024',
            'description_content' => 'required',
            'url_content' => 'required',
        ]);
        if($request->file('icon_content')){
            $file = $request->file('icon_content');
            $location = 'files';
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move($location,$filename);
          } 
        Content::find($id)->update([
            'name_content' => $request->name_content,
            'order_content' => $request->order_content,
            'icon_content' => $filename,
            'description_content' => $request->description_content,
            'url_content' => $request->url_content,
            'status' => $request->status,
            'type' => $request->type,

        ]);
        return redirect()->route('content.index')
                        ->with('success','content created successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();
  
        return redirect()->route('content.index')
                        ->with('success','Product deleted successfully');
    }
}
