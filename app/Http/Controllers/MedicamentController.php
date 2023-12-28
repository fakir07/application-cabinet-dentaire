<?php

namespace App\Http\Controllers;

use App\Models\medicament;
use Illuminate\Http\Request;
use App\Repositories\MedicamentRepositoryInterface;

class MedicamentController extends Controller
{


    protected $Medicament;

    public function __construct(MedicamentRepositoryInterface $MedicamentRepository )
    {
        $this->Medicament = $MedicamentRepository;
    }

   
    public function index()
    {
        return $this->Medicament->index();
    }
    
    public function store(Request $request)
    {
        return $this->Medicament->store($request);

    }
    
    public function update(Request $request)
    {
        return $this->Medicament->update($request);
    }
    
    public function destroy(Request $request)
    {
        return $this->Medicament->destroy($request);

    }
}