<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Repositories\Interfaces\StudentRepositoryInterface;
class StudentController extends Controller
{
    private $studentRepository;
    public function __construct(StudentRepositoryInterface $studentRepository){
        $this->studentRepository = $studentRepository;
    }
    public function index()
    {
        $students = $this->studentRepository->index();
        return view('student.index', compact('students'));
    }
    
    public function create(Request $request)
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
       $this->studentRepository->store($request);
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }
    public function show($id)
    {
        $student = $this->studentRepository->show($id);
        return view('student.show', compact('student'));
    }
    public function edit($id)
    {
        $student = $this->studentRepository->edit($id);
        return view('student.update', compact('student'));
    }
    public function update(Request $request, Student $student)
    {
        $student = $this->studentRepository->edit($request);

        return redirect()->route('students.index')->with('status', 'Updated successfully');
    }
    public function destroy($id)
    {
        $student = $this->studentRepository->edit($id);

        return redirect()->route('students.index')->with('status', 'Student Deleted successfully');
    }
}
