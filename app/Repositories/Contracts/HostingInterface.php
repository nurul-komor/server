<?php

namespace App\Repositories\Contracts;

interface HostingInterface
{
    public function create($data);
    public function update($id, $data);
    public function delete($id);
    public function get($id);
    public function getAll();
}