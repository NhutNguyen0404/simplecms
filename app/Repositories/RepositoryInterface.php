<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * @param $id
     * @param array|mixed $columns
     * @return mixed
     */
    public function find($id, $columns = ['*']);

    /**
     * @param $id
     * @param array|mixed $columns
     * @return mixed
     */
    public function findOrFail($id, $columns = ['*']);

    /**
     * @param array|mixed $conditions
     * @param array|mixed $columns
     * @return mixed
     */
    public function get($conditions = [], $columns = ['*']);

    /**
     * @param array|mixed $conditions
     * @param array|mixed $columns
     * @return mixed
     */
    public function paginate($conditions = [], $columns = ['*']);

    /**
     * Create
     *
     * @param array|mixed $attributes
     * @return mixed
     */
    public function create($attributes = []);

    /**
     * Update
     *
     * @param $id
     * @param array|mixed $attributes
     * @return mixed
     */
    public function update($id, $attributes = []);


    /**
     * Delete
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
