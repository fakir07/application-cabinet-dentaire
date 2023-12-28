<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Repositories\ConsultationRepositoryInterface;

class ConsultationController extends Controller
{
    

    protected $Consultation;

    public function __construct(ConsultationRepositoryInterface $ConsultationRepository )
    {
        $this->Consultation = $ConsultationRepository;
    }
    
    public function index()
    {
        return $this->Consultation->index();
    }

    public function store(Request $request)
    {
        return $this->Consultation->store($request);
    }

    public function show($id)
    {
        return $this->Consultation->show($id);
    }

    public function edit(Request $request)
    {
        return $this->Consultation->edit($request);
    }

    public function update(Request $request)
    {
        return $this->Consultation->edit($request);
    }

    public function destroy(Request $request)
    {
        return $this->Consultation->destroy($request);
    }
    
}