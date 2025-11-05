<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\PropertyTypes;
use App\Models\PropertyPurpose;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $properties = Properties::all();
        // dd($properties);
        return view('admin.pages.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $propertyTypes = PropertyTypes::all();
        $propertyPurpse = PropertyPurpose::all();
        // dd($propertyType);
        return view("admin.pages.properties.create", compact("propertyTypes", "propertyPurpse"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Properties $properties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Properties $properties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Properties $properties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Properties $properties)
    {
        //
    }
}
