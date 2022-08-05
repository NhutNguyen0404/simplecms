<?php

namespace App\Repositories;


/**
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository implements RepositoryInterface
{
    /**
     * @var object $model
     */
    protected $model;

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    /**
     * BaseRepository constructor
     */
    public function __construct()
    {
        $this->setModel();
        $this->setPerPage(config('const.per_page'));
    }

    /**
     * The abstract method getModel
     *
     * @return mixed
     */
    abstract public function getModel();

    /**
     * Function setPerPage
     *
     * @param int $perPage
     * @return object
     */
    public function setPerPage(int $perPage) : object
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * The setter model
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @return void
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * The function help get record
     *
     * @param array $conditions
     * @param array $columns
     * @return mixed
     */
    public function get($conditions = [], $columns = ['*'])
    {
        return $this->model->where($conditions)->select($columns)->get();
    }

    /**
     * The function help get record has pagination
     *
     * @param array $conditions
     * @param array $columns
     * @return mixed
     */
    public function paginate($conditions = [], $columns = ['*'])
    {
        return $this->model->where($conditions)->select($columns)->paginate($this->perPage);
    }

    /**
     * The function help find item by id
     *
     * @param $id
     * @param string[] $columns
     * @return mixed
     */
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    /**
     * The function help get find or fail
     *
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function findOrFail($id, $columns = ['*'])
    {
        return $this->model->findOrFail($id, $columns);
    }

    /**
     * The function add new record
     *
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = [])
    {
        $this->model->fill($attributes);
        return $this->model->create($attributes);
    }

    /**
     * The function help update record
     *
     * @param $id
     * @param array $attributes
     * @return false|mixed
     */
    public function update($id, $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            $this->model->fill($attributes);
            $result->update($attributes);
            return $result;
        }

        return false;
    }

    /**
     * The function help delete item
     *
     * @param $id
     * @return bool
     */
    public function delete($id) : bool
    {
        $result = $this->find($id);
        if ($result) {
            return $result->delete();
        }
        return false;
    }
}
