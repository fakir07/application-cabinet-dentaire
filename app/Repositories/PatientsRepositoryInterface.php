<?php


namespace App\Repositories;



interface PatientsRepositoryInterface{
   public function index();
   public function store($request);
   public function update($request);
   public function destroy($request);
}