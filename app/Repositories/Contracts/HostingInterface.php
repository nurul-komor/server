<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;

interface HostingInterface
{
    public function store(Request $request);
    public function update($id, $data);
    public function delete($id);
    public function get($id);
    public function getAll();
    public function extractAnUpload($file, $site_name);
}
