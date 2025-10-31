@extends("admin.layout.master")
@section("title", "Rentals")

@section("content")
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Active Rentals</h3>
            <a href="/rent" class="btn btn-primary">Assign New Rent</a>
        </div>


        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Property</th>
                            <th>Tenant</th>
                            <th>Rent Amount</th>
                            <th>Start Date</th>
                            <th>Due Day</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modern Apartment in Banani</td>
                            <td>Rahim Uddin</td>
                            <td>৳ 35,000 / month</td>
                            <td>2025-02-01</td>
                            <td>5th of every month</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-info">View</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">End</a>
                            </td>
                        </tr>


                        <tr>
                            <td>Commercial Space in Gulshan</td>
                            <td>Karim & Sons Ltd</td>
                            <td>৳ 1,20,000 / month</td>
                            <td>2024-11-15</td>
                            <td>10th of every month</td>
                            <td><span class="badge bg-warning text-dark">Pending Payment</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-info">View</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">End</a>
                            </td>
                        </tr>
                    </tbody>
            </div>

@endsection