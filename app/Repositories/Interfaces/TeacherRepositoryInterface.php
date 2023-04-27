<?php
namespace App\Repositories\Interfaces;
interface TeacherRepositoryInterface{
    public function index();
    public function store($request);
    public function show($id);
    public function edit($id);
    public function update($request, $teacher);
   public function destroy($id);

}