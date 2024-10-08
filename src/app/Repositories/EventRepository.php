<?php

namespace App\Repositories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

class EventRepository implements EventRepositoryInterface
{
    public function create(array $data): Event
    {
        return Event::create($data);
    }

    public function getAll(): Collection
    {
        return Event::all();
    }
}
