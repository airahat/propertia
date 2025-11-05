@extends('admin.layout.master')
@section('title', 'Properties')

@section('content')

    <div class=" py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Properties</h3>
            <a href="/properties/create" class="btn btn-primary">Add New Property</a>
        </div>


        <!-- Filters -->
        <form class="card mb-4 p-3 bg-white border-0 shadow-sm">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search property..." />
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Property Type</option>
                        <option>Apartment</option>
                        <option>House</option>
                        <option>Commercial</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Status</option>
                        <option>Available</option>
                        <option>Rented</option>
                        <option>Sold</option>
                    </select>
                </div>
                <div class="col-md-2 d-grid">
                    <button class="btn btn-secondary">Filter</button>
                </div>
            </div>
        </form>


        <!-- Properties Table -->
        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Property Type</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Area</th>
                            <th>Size (sqft.)</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($properties as $property )
                        
                        <tr>
                            <td>{{ $property ['title'] }}</td>
                            <td>{{ $property ['description'] }}</td>
                            <td>{{ $property ['property_type_id'] }}</td>
                            <td>{{ $property ['adress'] }}</td>
                            <td>{{ $property ['city'] }}</td>
                            <td>{{ $property ['area'] }}</td>
                            <td>{{ $property ['size_in_sqft'] }}</td>
                            <td>{{ $property ['price'] }}</td>
                            <td >
                                <div class="d-flex gap-2 align-items-center">

                                    <a href="#" class="btn btn-sm btn-primary">View</a>
                                    <a href="#" class="btn btn-sm btn-info">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>


            </div>

        @endsection
