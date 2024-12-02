<?php

namespace App\Services;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

abstract class BaseService
{
    public function __construct(
        protected BaseRepository $repository,
        protected ?array          $relations
    )
    {
    }

    public function getAll($value = null, $columns = []): ?Collection
    {
        return $this->repository->getAll($value, $columns, $this->relations);
    }

    public function findById(int $id): ?Model
    {
        return $this->repository->findById($id, $this->relations);
    }

    public function create(array $data): ?Model
    {
        return DB::transaction(function () use ($data) {
            return $this->repository->create($data);
        });
    }

    public function update(int $id, array $data): ?Model
    {
        return DB::transaction(function () use ($id, $data) {
            return $this->repository->update($id, $data);
        });
    }

    public function delete(int $id): bool
    {
        return DB::transaction(function () use ($id) {
            return $this->repository->delete($id);
        });
    }

    public function createRelation(int $id, string $relation, array $data): ?Model
    {
        return DB::transaction(function () use ($id, $relation, $data) {
            return $this->repository->createRelation($id, $relation, $data);
        });
    }

    public function createManyRelations(int $id, string $relation, array $data): ?Model
    {
        return DB::transaction(function () use ($id, $relation, $data) {
            return $this->repository->createManyRelations($id, $relation, $data);
        });
    }
}


