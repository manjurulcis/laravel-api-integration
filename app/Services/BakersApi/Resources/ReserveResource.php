<?php

declare(strict_types=1);


namespace App\Services\BakersApi\Resources;
use App\Services\BakersApi\BakersApiService;

class ReserveResource
{
  public function __construct(
      private readonly BakersApiService $service,
  ) {}

  public function order($payload = [])
  {
    return $this->service->post(
        request: $this->service->withBaseUrl(),
        url: "/reserve",
        payload: $payload
    );
  }
}
