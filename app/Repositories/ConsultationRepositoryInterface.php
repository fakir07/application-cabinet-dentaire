<?php

namespace App\Repositories;

interface ConsultationRepositoryInterface {

    public function index();
    
    public function store($request);
    
    public function show($id);
    
    public function edit($request);
    
    public function update($request);
    
    public function destroy($request);
    
}