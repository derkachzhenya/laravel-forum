<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
{
    
    public function index()
    {
        return inertia('About/Index');
    }

   
    public function create()
    {
        //
    }

   
    public function store(StoreAboutRequest $request)
    {
        //
    }

   
    public function show(About $about)
    {
        //
    }

    
    public function edit(About $about)
    {
        //
    }

    
    public function update(UpdateAboutRequest $request, About $about)
    {
        //
    }

    
    public function destroy(About $about)
    {
        //
    }
}
