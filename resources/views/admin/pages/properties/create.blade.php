@extends('admin.layout.master')
@section('title', 'Add Property')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Add New Property</h3>
            <a href="#" class="btn btn-secondary">Back to List</a>
        </div>


        <div class="card border-0 shadow-sm p-4">
            <form>
                <div class="mb-3">
                    <label class="form-label">Property Title</label>
                    <input type="text" class="form-control" placeholder="Ex: Modern Apartment in Banani" />
                </div>


                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="4" placeholder="Write details about the property..."></textarea>
                </div>


                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Property Type</label>



                        <select class="form-select">
                            @foreach ($propertyTypes as $item)

                            <option>{{ $item['name'] }}</option>
                           
                            @endforeach
                        </select>







                    </div>


                    <div class="col-md-4">
                        <label class="form-label">Purpose</label>
                        <select class="form-select">
                            @foreach ($propertyPurpse as $purpose )
                            <option>{{ $purpose['name'] }}</option>
                            
                            @endforeach

                        </select>
                    </div>


                    <div class="col-md-4">
                        <label class="form-label">Price (৳)</label>
                        <input type="number" class="form-control" placeholder="Example: 35000" />
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" placeholder="Ex: Banani, Dhaka" />
                </div>


                <div class="mb-3">
                    <label class="form-label">Upload Images</label>
                    <input type="file" class="form-control" multiple />
                </div>


                <button class="btn btn-primary w-100">Save Property</button>
            </form>
        </div>
    @endsection
