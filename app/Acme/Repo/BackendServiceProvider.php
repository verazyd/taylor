<?php
    namespace Acme\Repo;

    use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider{
    public function register()
    {
        $this->app->bind('Acme\Repo\TestimonialRepoInterface', 'Acme\Repo\TestimonialRepo');
    }
}