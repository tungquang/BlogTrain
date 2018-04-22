<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Title;
use Auth;


class TitleController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        
        $title = Title::all();

        return view('admin.pages.title')->with(['titles'=>$title,'user'=>Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $usedtitle='';
        $title = Title::all()->where('name','=',$request->name);
        if ($title->all()==null) {

            Title::create($request->all());
            
        }
        else {
           
            // Title::create($request->all());
           $usedtitle = $request->name;
        }
        // dd($this->usedtitle);
       return redirect('/title?usedtitle='.$usedtitle);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // dd($request->all());
         $title=Title::find($id);
         $title->name = $request->name;
         $title->sorttitle = $request->sorttitle;
         $title->save();
         
        return redirect('/title');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        // delete with method
        
        // 
        
        // $title=Title::find($id);
        // $title->delete();
        Title::destroy($id);
         return redirect('/title');

    }
}
