<?php

namespace App\Http\Controllers;

use App\Models\Buddha;
use Illuminate\Http\Request;

class BuddhaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['buddhas'] = Buddha::orderBy('id', 'asc')->paginate(5);
        return view('buddhas.index', $data);
    
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('buddhas.create');
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
            'video' => 'required|url',
            'title' => 'required',
            
        ]);

        $budda = new Buddha;
        $budda->video = $request->video;
        $budda->title = $request->title;
       
        $budda->save();

        return redirect()->route('buddhas.index')->with('success', 'Create successfull.');
       

    }
    


    /**
     * Display the specified resource.
    * @param  \App\Buddha  $buddha
    * @return \Illuminate\Http\Response
    */
    public function show(Buddha $buddha)
    {
    return view('buddhas.show',compact('buddha'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buddha $buddha)
    {
        return view('buddhas.edit',compact('buddha'));
    }

    /**
     * Update the specified resource in storage.
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Buddha  $budda
        * @return \Illuminate\Http\Response
   */
    public function update(Request $request, Buddha $buddha)
    {
        $request->validate([
            'video' => 'required|url',
            'title' => 'required',
            
        ]);

        $budda = new Buddha;
        $budda->video = $request->video;
        $budda->title = $request->title;
       
        $budda->save();

        return redirect()->route('buddhas.index')->with('success', 'Update successfull.');
    }
    /**
     * Remove the specified resource from storage.
     * @param  \App\Buddha  $buddha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buddha $buddha)
    {
        $buddha->delete();
        return redirect()->route('buddhas.index')
        ->with('success','Deleted successfully');
        }
}
