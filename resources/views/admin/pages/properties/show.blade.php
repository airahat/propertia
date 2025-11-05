@extends('admin.layout.master')
@section('title', 'Property Details')

@section('content')

    <div class=" py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">{{ $property['title'] }} Details</h3>
            <a href="/properties/create" class="btn btn-primary">Add New Property</a>
        </div>


        <div class="card">
            <div class="card-body">
                <table class="table">
                
                        <tr>
                            <th>Title</th>
                            <td>
                                {{ $property['title'] }}
                            </td>
                        <tr>
                            <th>Description</th>
                            <td>
                                {{ $property['description'] }}
                            </td>
                        </tr>
                        <tr>
                            <th>Address</th>
                              <td>
                                {{ $property['address'] }}
                            </td>
                        </tr>

                        <tr>
                            <th>Size</th>
                               <td>
                                {{ $property['size_in_sqft'] }} sqft
                            </td>
                        </tr>
                        <tr>
                        <th>Price</th>
                        <td>
                                {{ $property['price'] }}
                            </td>
                        </tr>

                </table>
            </div>

        </div>


@endsection