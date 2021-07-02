<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newstudent;
use Illuminate\Support\Facades\DB;

class ViewstudentListController extends Controller
{
    //
    public function showdata(){
        $Liststudents = newstudent::all();
        return view('showallstudent', ['memberlists'=>$Liststudents]);
    }
    public function viewgallery(Request $request, $id){
        // $users = DB::table('newstudents')->where('gallery_file', Input::get('gallery_file'))->get();
        // $users = DB::table('newstudents')->select('gallery_file')->get();
        // dd($users);
        // exit;
        // $gallery_field = newstudent
        // $users = DB::select('select * from newstudents');
       
       
        $name = DB::table('newstudents')->where('id', $id)->value('full_name');
        $sts_gallery = DB::table('newstudents')->select('full_name', 'gallery_file')->where('id', $id)->first();
       
        $data = json_decode($sts_gallery->gallery_file, true);
        
 
        return view('studentGallery', compact('data', 'name'));
    }

    public function edit($id){
        $data = newstudent::find($id);
        
        return view('updatestudent', compact('data'));
    }

    public function updatestudent(Request $request, $id){
        // return $request->input();
        $data = newstudent::find($request->id);
        
        $data->full_name = $request->full_name;
        $data->address = $request->address;
        $data->phone_number = $request->phone_number;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('getList');

    }
    public function refreshDB()
    {
        $max = DB::table('tbl_newstudents')->max('id') + 1; 
        DB::statement("ALTER TABLE tbl_newstudents AUTO_INCREMENT =  $max");
    }
    public function delete($id){
        $data = newstudent::find($id);
        unlink("uploads/".$data->file_path);
        // $data->delete();
        if ($data)  {
            if ($data->delete()){

            DB::statement('ALTER TABLE newstudents AUTO_INCREMENT = '.(count(newstudent::all())+1).';');
                return back()->with('success', 'Data deleted successfully');
            // echo json_encode('User Was Deleted Successfully..');
            }   
    }

        return redirect('studentlist');
    }
}
