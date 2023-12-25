<?php
namespace App\Interfaces;

interface BaseRepositoryInterface
{
    public function all(array $filters = [], array $order = []);
    public function get(int $id);
    public function store(array $data = []);
    public function update(int $id, array $data = []);
    public function delete(int $id);
}
?>