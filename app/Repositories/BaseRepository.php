<?php
namespace APP\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    private Model $model;

    public function __constructor(Model $model)
    {
        $this->model = $model;
    }

    public function all(array $filters = [], array $orders = [])
    {
        $query = $this->model->newQuery();
        $query->where($filters);
        foreach ($orders as $column_name => $order) {
            $query->orderBy($column_name, $order);
        }
        return $query->get();
    }

    public function store(array $data = [])
    {
        return $this->model->create($data);
    }

    public function get(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(int $id, array $data = [])
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function delete(int $id)
    {
        return $this->model->where('id', $id)->delete();
    }
}
?>