<?php

namespace App\Services;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\EventRepositoryInterface;

interface EventServiceInterface
{
    public function create(array $data): Event;
    public function getAll(): Collection;
}
