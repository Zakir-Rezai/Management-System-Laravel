<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Fee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudentsController extends Controller
{
    public function index() {
        $under_14 = 0;
        $under_18 = 0;
        $under_24 = 0;
        
        $student = Student::all();

        $category = 3;
        
        $categories = DB::table('students')->get('category');
        
        $total_student = Student::count();

        foreach ($categories as $cate) {
            if ($cate->category == "under 14") {
               $under_14++; 
            } else if ($cate->category == "under 18") {
                $under_18++;
            }else if ($cate->category == "under 24") {
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

        return view('Student.index' , [
            'BigTableKey' => $student,
            'Total_Categories' => $category,
            'Total_Student' => $total_student,
            'Under_14' => $under_14,
            'Under_18' => $under_18,
            'Under_24' => $under_24,
        ]);
    }



    public function create() {

        $std = new Student();

        return view('Student.create' , compact('std'));
    }



    public function store(Request $request) {
        
        $student = Student::create($this->ValidateMethod());
        
        $this->storeImage($request, $student);
        
        //session()->flash('message' , 'Data Has Inserted Successfully !!');
        
        return back()->with('message' , 'Data inserted successfully !');
    }

    
    public function show($student) {
        
        $skill = 0;
        $left = 0;
        $right = 0;

        $stud = Student::where('id' , $student)->firstOrFail();

        $fee = Fee::where('id', $student)->get();

        $skill = ($stud->skill_level * 360) / (100);
        
        if ($skill > 180) {
            $right = $skill - 180;
            $left = 180;
        } else if ($skill <= 180) {
            $left = $skill;
            $right = 0;
        }
        
        
        return view('Student.show' , [
            'student' => $stud,
            'left' => $left,
            'right' => $right,
            'fee' => $fee,
        ]);

    }


    public function edit($student) {

        $std = Student::where('id' , $student)->firstOrFail(); 

        return view('Student.edit' , compact('std'));

    }



    public function update(Request $request, Student $student) {
        
        $student->update($this->ValidateMethod());

        $this->storeImage($request, $student);

        return redirect('Students/' . $student->id)->with('message' , $student->first_name . ' Updated successfully !');
   
    }


    public function destroy($student) {

        $std = new Student();
        $array = Student::where('id' , $student)->pluck('first_name');
        $name = $array->first();
        $std->where('id' , $student)->delete();  

        return redirect('/student_table')->with('message' , $name . ' Deleted successfully !');

    }



    public function search () {
        $under_14 = 0;
        $under_18 = 0;
        $under_24 = 0;


        $searchTerm = request('search');

        $student = Student::all()->where('first_name' , $searchTerm);
            
        $category = DB::table('students')->count('category');

        $categories = DB::table('students')->get('category');
        
        $total_student = Student::count();

        foreach ($categories as $cate) {
            if ($cate->category == "under 14") {
               $under_14++; 
            } else if ($cate->category == "under 18") {
                $under_18++;
            }else if ($cate->category == "under 24") {
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


        if ($student->count() != 0) {
            return view('Student.index' , [
                'BigTableKey' => $student,
                'Total_Categories' => $category,
                'Total_Student' => $total_student,
                'Under_14' => $under_14,
                'Under_18' => $under_18,
                'Under_24' => $under_24,
            ]);
        }else {
            return redirect('/student_table')->with('error' , $searchTerm . ' Not Found !');
        }
    }
    
    
    private function ValidateMethod() {

        return request()->validate([ 
          'first_name' => 'required|min:3|max:32|string',
          'last_name' => 'required|min:3|max:32|string',
          'father_name' => 'required|min:3|max:32|string',
          'email' => 'required|email',
          'skill_level' => 'required|int|min:0|max:100',
          'phone' => 'required|starts_with:0,00,+|min:10|max:13',
          'address' => 'required|string|min:10|max:255',
          'register_date' => 'required|date',
          'category' => 'required|string',
          'gender' => 'required|string',
          'image' => 'required|file|image|max:5000',
    
        ]);
    }
    
    private function storeImage($request, $student) {
        if (request()->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/studentsimage/', $filename);
            $student->update([
                $student->image = $filename,
            ]);
        }  
    }

}


