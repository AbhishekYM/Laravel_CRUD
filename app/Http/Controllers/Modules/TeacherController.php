<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\TeacherRepositoryInterface;

class TeacherController extends Controller
{
    private $teacherRepository;
    public function __construct(TeacherRepositoryInterface $teacherRepository){

    $this->teacherRepository = $teacherRepository;
    }
    public function index()
    {
        $teachers = $this->teacherRepository->index();
        return view('teacher.index', compact('teachers'));
    }
    public function create(Request $request)
    {
        return view('teacher.create');
    }
    public function store(Request $request)
    {
        $this->teacherRepository->store($request);
         return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }
    public function show( $id)
    {
        $teacher = $this->teacherRepository->show($id);
        return view('teacher.show', compact('teacher'));
    }
    public function edit($id)
    {
        $teacher = $this->teacherRepository->edit($id);
        return view('teacher.update', compact('teacher'));
    }
    public function update(Request $request, Teacher $teacher)
    {
        $teacher = $this->teacherRepository->update($request, $teacher);
        return redirect()->route('teachers.index')->with('status', 'Updated successfully');
    }
    public function destroy( $id)
    {
        $teacher = $this->teacherRepository->destroy($id);
        return redirect()->route('teachers.index')->with('status', 'Teacher Deleted successfully');
    }
}
