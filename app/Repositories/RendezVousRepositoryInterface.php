<?php



namespace App\Repositories;


interface RendezVousRepositoryInterface{


    public function index();
    public function show();
    public function salledattente();
    public function store($request);
    public function update($request); 
    public function destroy($request);
    public function add_rend($request);
    public function getpatient($id);
    public function updateStatus($request);
    
    
}