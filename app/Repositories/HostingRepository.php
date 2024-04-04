<?php

namespace App\Repositories;

use Exception;
use ZipArchive;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return $this->model->latest()->get();
    }
    public function store(Request $request)
    {

        // Create Site Name
        $site_name = "site-"  . time();
        $site_url =   $this->extractAnUpload($request->file('zipFile'), $site_name);
        if ($site_url) {
            $site = $this->model->create([
                "site_name" => $site_name,
                "site_url" =>   '/hostings/' . $site_name,
                "user_id" => 1,
            ]);
        }
        return "Successfully Upload";
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
    public function extractAnUpload($zipFile, $site_name)
    {
        $publicPath = public_path('/hostings');
        $extractTo = public_path('hostings/' . strtolower($site_name));

        // Create a new ZipArchive object
        $zip = new ZipArchive;

        // Open the ZIP file
        if ($zip->open($zipFile) === TRUE) {
            // Extract files
            $zip->extractTo($extractTo);
            $zip->close();
            echo 'Files extracted successfully';

            // Move extracted files to public directory
            $files = scandir($extractTo);
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    $source = $extractTo . '/' . $file;
                    $destination = $publicPath . '/' . $file;
                    if (!file_exists($destination)) {
                        // Move the file to the public directory
                        if (rename($source, $destination)) {
                            // echo "File $file moved to public directory successfully<br>";

                        } else {
                            echo "Failed to move file $file to public directory<br>";
                        }
                    } else {
                        echo "File $file already exists in public directory<br>";
                    }
                }
            }
            return $extractTo;
        } else {
            throw new Exception('Failed to open ZIP file');
        }
    }
}
