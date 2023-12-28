<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PatientsRepositoryInterface;
use App\Repositories\PatientsRepository;
use App\Repositories\MedicamentRepositoryInterface;
use App\Repositories\MedicamentRepository;
use App\Repositories\RendezVousRepositoryInterface;
use App\Repositories\RendezVousRepository;
use App\Repositories\ConsultationRepositoryInterface;
use App\Repositories\ConsultationRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PatientsRepositoryInterface::class, PatientsRepository::class);
        $this->app->bind(MedicamentRepositoryInterface::class, MedicamentRepository::class);
        $this->app->bind(RendezVousRepositoryInterface::class, RendezVousRepository::class);
        $this->app->bind(ConsultationRepositoryInterface::class, ConsultationRepository::class);
    }


    public function boot(): void
    {
        //
    }
}