<?php

declare(strict_types=1);


namespace App\Services\BakersApi\Resources;

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
