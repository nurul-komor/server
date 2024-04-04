<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Inertia\Inertia;
use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use App\Repositories\Contracts\HostingInterface;

class SiteController extends Controller
{
    private $hostingRepository;
    /**
     *
     * @param HostingInterface $hostingRepository
     */
    public function __construct(HostingInterface $hostingRepository)
    {
        $this->hostingRepository = $hostingRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = $this->hostingRepository->getAll();
        return Inertia::render('Dashboard', [
            'sites' => $sites
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Sites/Upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiteRequest $request)
    {
        $this->hostingRepository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteRequest $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }
}
