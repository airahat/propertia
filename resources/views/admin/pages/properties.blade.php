@extends("admin.layout.master")
@section("title", "Properties")

@section("content")

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Properties</h3>
            <a href="#" class="btn btn-primary">Add New Property</a>
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
                            <th>Image</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Purpose</th>
                            <th>Price</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
            </div>

@endsection