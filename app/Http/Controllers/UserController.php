<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $search = $request->get('search');

        if($search) {

        $students = Student::where('name', 'LIKE', '%' .$search. '%')->paginate(10);
          
        }else {

        $students = Student::orderBy('id')->paginate(10);

        }

        return view('admin.user.index', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $allGender = Student::GENDER_MAP;
        $allReligion = Student::RELIGION_MAP;
        $student = Student::find($id);
        return view('admin.user.edit', [
            'student' => $student,
            'allGender' => $allGender,
            'allReligion' => $allReligion
        ]);
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
        $this->validate($request, [
            'role_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'born_place' => 'required',
            'born_date' => 'required',
            'school_origin' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $student = Student::find($id);
        $student->role_id = $request->role_id;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->born_place = $request->born_place;
        $student->born_date = $request->born_date;
        $student->school_origin = $request->school_origin;
        $student->religion = $request->religion;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;

        if($request->hasFile('image')) {

            $imageName = time(). '.' . $request->image->getClientOriginalExtension();
            Storage::disk('local')->putFileAs('public/profile', $request->file('image'), $imageName);
            $student->image = $imageName;
        }
        $student->save();

        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('admin.user.index');

    }
}
