<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    protected Model $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function update(array $data): bool
    {
        return $this->model->update($data);
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id): bool
    {
        return $this->model->destroy($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function one($id): mixed
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }

    /**
     * @param $model
     * @return $this
     */
    public function setModel($model): static
    {
        $this->model = $model;

        return $this;
    }

    /**
     * @param $relations
     * @return Builder
     */
    public function with($relations): Builder
    {
        return $this->model->with($relations);
    }
}
