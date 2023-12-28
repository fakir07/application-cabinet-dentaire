<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use Illuminate\Http\Request;
use App\Repositories\RendezVousRepositoryInterface;

class RendezVousController extends Controller
{
 

    protected $RendezVous;

    public function __construct(RendezVousRepositoryInterface $RendezVousRepository )
    {
        $this->RendezVous = $RendezVousRepository;
    }

    public function index()
    {
       return $this->RendezVous->index();
    }
    
    public function show()
    {
        return $this->RendezVous->show();
    }
    
    public function store(Request $request)
    {
        return $this->RendezVous->store($request);
    }
    
    public function update(Request $request, RendezVous $rendezVous)
    {
        return $this->RendezVous->update($request);

    }

 
    public function destroy(Request $request)
    {
        return $this->RendezVous->destroy($request);

    }
    public function add_rend(Request $request)
    {
        return $this->RendezVous->add_rend($request);
    }
    public function updateStatus(Request $request)
    {
        return $this->RendezVous->updateStatus($request);
    }
 
     public function getpatient($id){
        return $this->RendezVous->getpatient($id);
     }

     public function salledattente(){
        return $this->RendezVous->salledattente();
     }

}