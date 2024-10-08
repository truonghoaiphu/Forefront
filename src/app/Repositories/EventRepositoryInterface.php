<?php 

namespace App\Repositories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

interface EventRepositoryInterface
{
    public function create(array $data): Event;
    public function getAll(): Collection;
}
