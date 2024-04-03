<?php

namespace App\Repositories;

use App\Models\Site;
use App\Repositories\Contracts\HostingInterface;

class HostingRepository implements HostingInterface
{
    public $model;
    public function __construct(Site $siteModel)
    {
        $this->model = $siteModel;
    }
    public function getAll()
    {
        return $this->model->all();
    }
    public function create($data)
    {
    }
    public function update($id, $data)
    {
    }
    public function delete($id)
    {
    }
    public function get($id)
    {
    }
}