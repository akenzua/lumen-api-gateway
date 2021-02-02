<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService {

use ConsumesExternalService;

public $baseUri;

public function __constructor(){

    $this->baseUri = config('services.books.base_uri');
}
}