<?php

namespace Zintel;

use Illuminate\Support\ServiceProvider;
use Zintel\Console\Commands\GenerateSwaggerDocs;

class SwaggerGenerateServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->commands([GenerateSwaggerDocs::class]);
    }
}
