<?php

namespace App\Http\Controllers;

use App\Imports\PersonsImport;
use App\Models\Person;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PersonController extends Controller
{
    public function index(){
        $persons = Person::all();
        return view('welcome',compact('persons'));
    }
    public function import(Request $req){
        Excel::import(new PersonsImport,$req->file('person_file'));
        return back();
    }
}
