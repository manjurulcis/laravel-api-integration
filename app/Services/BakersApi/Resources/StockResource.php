<?php

declare(strict_types=1);


namespace App\Services\BakersApi\Resources;

use Illuminate\Http\Client\Response;
use App\Services\MedicalTrust\Requests\NewDentalTreatment;
use App\Services\BakersApi\BakersApiService;

class StockResource
{
  public function __construct(
      private readonly BakersApiService $service,
  ) {}

  public function list()
  {
    return $this->service->get(
        request: $this->service->withBaseUrl(),
        url: "/cake-stock",
    );
  }
}
