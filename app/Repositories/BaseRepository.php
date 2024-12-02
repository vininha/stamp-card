<?php

namespace App\Http\Repositories;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll($value = null, $columns = [], $relations = []): ?Collection
    {
        return $this->model->with($relations)->when($value, function ($q) use ($columns, $value) {
            $q->whereLike($columns, $value);
        })->get();
    }

    public function findById(int $id, array $relations = []): ?Model
    {
        return $this->model->with($relations)->findOrFail($id);
    }

    public function create(array $data): ?Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): ?Model
    {
        $model = $this->findById($id);
        $model->update($data);
        return $model;
    }

    public function delete(int $id): bool
    {
        $model = $this->findById($id);
        if ($model) {
            return $model->delete();
        }
        return false;
    }

    public function createRelation(int $id, string $relation, array $data): ?Model
    {
        return $this->findById($id)->{$relation}()->create($data);
    }

    public function createManyRelations(int $id, string $relation, array $data): ?Model
    {
        return $this->findById($id)->{$relation}()->createmany($data);
    }
}
