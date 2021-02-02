<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService {
    use ConsumesExternalService;

    public $baseUri;

    public function __constructor(){
        $this->baseUri = config('services.authors.base_uri');
    }
}