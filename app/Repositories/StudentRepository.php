<?php
namespace App\Repositories;
use App\Models\Student;
use App\Repositories\Interfaces\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface{
     public function index()
    {
        return Student::paginate(5);
    }
    public function show($id){
       return $student = Student::find($id);

    }
    public function store($request){
        $data = $request->all();
        $photo = $request->file('photo');
        if (!$photo) {
            return redirect()->back()->withErrors(['error' => 'No file uploaded']);
        }
        $name = $photo->getClientOriginalName();
        $photo->storeAs('public/photos', $name);
        $data['photo'] = $name;
        $data['subject'] = implode(',', $data['subject']);
        $student = Student::create($data);
        // $student->save();
    }
    
    
    public function edit($id){
       return $student = Student::find($id);
    }
    public function update($request, $student)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = $photo->getClientOriginalName();
            $photo->storeAs('public/photos', $name);
            $data['photo'] = $name;
        }
       
        $data['subject'] = implode(',', $data['subject']);
        $student->update($data);
        return redirect()->route('students.index');
    }
    
    public function destroy($id){
        $student = Student::find($id);
        
        if ($student) {
            $student->delete();
        }
    }

    
}
