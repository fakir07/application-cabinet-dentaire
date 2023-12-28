<?php 


namespace App\Repositories;


interface MedicamentRepositoryInterface {
    
    public function index();
    public function store($request);
    public function update($request);
    public function destroy($request);
}