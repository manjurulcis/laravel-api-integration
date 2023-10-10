<?php
declare(strict_types=1);

namespace App\Services\BakersApi\DataObjects;

use Carbon\Carbon;

class Reservation
{
    public function __construct(
        public readonly string $cake,
        public readonly Carbon $birthday,
        public readonly string $name,
        public readonly string $address,
        public readonly string $city,
        public readonly string $message,
    ) {}

    public function toArray(): array
    {
        return [
            'cake' => $this->cake,
            'birthday' => $this->birthday,
            'name' => $this->name,
            'address' => $this->address,
            'city' => $this->city,
            'message' => $this->message,
        ];
    }
}
