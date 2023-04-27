<?php
namespace App\Repositories\Interfaces;
interface StudentRepositoryInterface{
    public function index();
    public function store($request);
    public function show($id);
    public function edit($id);
    public function update($request, $student);
    public function destroy($id);
    

}