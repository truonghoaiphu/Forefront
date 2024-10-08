<?php

namespace App\Services;

use App\Repositories\EventRepositoryInterface;
use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

class EventService implements EventServiceInterface
{
    protected $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function create(array $data): Event
    {
        return $this->eventRepository->create($data);
    }

    public function getAll(): Collection
    {
        return $this->eventRepository->getAll();
    }
}
