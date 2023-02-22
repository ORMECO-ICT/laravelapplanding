<?php

namespace App\Http\Controllers;

use App\Models\Portal;
use App\Http\Requests\StorePortalRequest;
use App\Http\Requests\UpdatePortalRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

class PortalController extends Controller
{
    public const BASE = 'portals';
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $portals = Portal::all();
        return response(view("portals.index", compact('portals')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response('App Portals Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortalRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Portal $Portal): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portal $Portal): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortalRequest $request, Portal $Portal): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portal $Portal): RedirectResponse
    {
        //
        return redirect()->route('/');
    }
}
