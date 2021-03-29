<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Fee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FeesController extends Controller
{
    public function index() {
        $under_14 = 0;
        $under_18 = 0;
        $under_24 = 0;

        $fee = new Fee();

        $std = Fee::all();

        $category = 3;
        
        $categories = Fee::with('student')->get();

        $total_student = Fee::count();

        $students = Student::count();

        foreach ($categories as $cate) {
            if ($cate->student->category == "under 14") {
            $under_14++; 
            } else if ($cate->student->category == "under 18") {
                $under_18++;
            }else if ($cate->student->category == "under 24") {
                $under_24++;
            }
        }
        
        if ($total_student > 0) {
            $under_14 = ($under_14 * 100) / ($total_student);
            $under_18 = ($under_18 * 100) / ($total_student);
            $under_24 = ($under_24 * 100) / ($total_student);
        }else {
            $under_14 = 0;
            $under_18 = 0;
            $under_24 = 0;
        }


        if ($students > 0) {
            return view('Fee.index' , [
                'BigTableKey' => $std,
                'Total_Categories' => $category,
                'Total_Student' => $total_student,
                'Under_14' => $under_14,
                'Under_18' => $under_18,
                'Under_24' => $under_24,
                'fee' => $fee,
            ]);
        }else {
            return back()->with('error', 'There is no student !');
        }
    }


    public function store(Request $request) {
        $std = Student::all();
        $fee = new Fee();
        foreach ($std as $stud) {
            if (request('first_name') == $stud->first_name && request('father_name') == $stud->father_name) {
                $st = Student::where('first_name', request('first_name') )->where('father_name', request('father_name') )->first();
                $st->fees()->create($this->ValidateMethod());
                return back()->with('message' , 'Data inserted successfully !');
            }
        }
        return back()->with('error' , 'You have to register first !');
    }
    


    private function ValidateMethod() {

        return request()->validate([   
          'first_name' => 'required|min:3|max:32|string',
          'father_name' => 'required|min:3|max:32|string',
          'trainer' => 'required|min:3|max:32|string',
          'pay_date' => 'required|date',
          'fee_amount' => 'required|int|min:0|max:500',
        ]);
    }

}
