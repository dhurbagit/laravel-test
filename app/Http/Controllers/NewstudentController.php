<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\newstudent;

class NewstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  
     */
    public $images = "dhurba images";
    public function index()
    {

        return view('newstudent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNewstudentrecord(Request $request)
    {
      
        $request->validate([
            'full_name'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'email'=>'required|email|unique:newstudents',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'filename.*'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->file('file')) {
            // $imagePath = $request->file('file');
            // $imageName = $imagePath->getClientOriginalName();
  
            // $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            // $imageName = time().'.'.$request->image->getClientOriginalName();  
            
          }
        //   $name = $request->file('file')->getClientOriginalName();
 
        // $path = $request->file('file')->store('public/images');
       
             foreach($request->file('filename') as $images){
                 $name = $images->getClientOriginalName();
                 
                 $images->move(public_path().'/uploads/', $name);
                 $data[] = $name;
               

             }
      
        $img = time()."_".$request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'), $img);

        $query = DB::table('newstudents')->insert([
            'full_name'=>$request->input('full_name'),
            'address'=>$request->input('address'),
            'phone_number'=>$request->input('phone_number'),
            'email'=>$request->input('email'),
            'file_path'=> $img,
            'gallery_file'=> json_encode($data),
        ]);
        if($query){
            return back()->with('success', 'DATA HAVE BEEN SUCCESSFULY INSERTED');
        }
        else {
            return back()->with('fail', 'SOME THING WENT WRONG');
        }
        // return $request->input();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
