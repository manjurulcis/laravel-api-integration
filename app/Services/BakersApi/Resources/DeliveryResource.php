<?php

declare(strict_types=1);


namespace App\Services\BakersApi\Resources;
use App\Services\BakersApi\BakersApiService;

class DeliveryResource
{
  public function __construct(
      private readonly BakersApiService $service,
  ) {}

  public function list(string $city)
  {
    return $this->service->get(
        request: $this->service->withBaseUrl(),
        url: "/deliveries-today?city=" . $city,
    );
  }
}
