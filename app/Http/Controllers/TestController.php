<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use PDF;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{   
    public function index(){
        $tests =Test::latest()->first();
        $name =Test::latest()->first()->name;
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'tests' => $tests
        ]; 
            
        $pdf = PDF::loadView('sampleform', $data);
     
        return $pdf->download($name.'.pdf');
    }
    public function create()
    {   
        // $tests = DB::table('tests')->get();
        

        $test =new Test();
        $id =Test::latest()->first()->id +1;
        $test =str_pad($id,6,"0",STR_PAD_LEFT);
        $code ="BIBJB(".$test.")";
        return view('form',compact('code'));
    }
    public function store(Request $request)
    {   
        
        $test = new Test();
        $test->name = $request->name;
        $test->email = $request->email;
        $test->phone = $request->phone;
        $test->address = $request->address;
        $test->university = $request->university;
        $test->job_code =  $request->job_code ;
        $test->save();
        return redirect('/index');
    }
    public function test(Request $request)
    {
        
    }
}
