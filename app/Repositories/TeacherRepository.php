<?php
namespace App\Repositories;
use App\Models\Teacher;
use App\Repositories\Interfaces\TeacherRepositoryInterface;

class TeacherRepository implements TeacherRepositoryInterface{
     public function index()
    {
       return Teacher::paginate(5);
    }
    public function store($request){
        $data = $request->all();
        
        $teacher = Teacher::create($data);
    }
    public function show($id){
       return $teacher = Teacher::find($id);
    }
    public function edit($id){
        return $teacher = Teacher::find($id);

    }
    public function update($request, $teacher){
        return $teacher->update($request->all());

    }
    public function destroy($id){
        $teacher = Teacher::find($id);
        if ($teacher) {
            $teacher->delete();
        }
    }
}