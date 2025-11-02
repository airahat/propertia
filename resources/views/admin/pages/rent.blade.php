@extends('admin.layout.master')
@section('title', 'Rentals')

@section('content')

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Assign Rent to Tenant</h3>
            <a href="#" class="btn btn-secondary">Back</a>
        </div>


        <div class="card border-0 shadow-sm p-4">
            <form>
                <div class="mb-3">
                    <label class="form-label">Select Property</label>
                    <select class="form-select">
                        <option selected disabled>Choose...</option>
                        <option>Modern Apartment in Banani</option>
                        <option>Commercial Space in Gulshan</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label">Tenant Name</label>
                    <input type="text" class="form-control" placeholder="Enter tenant name" />
                </div>


                <div class="mb-3">
                    <label class="form-label">Rent Amount (৳)</label>
                    <input type="number" class="form-control" placeholder="Enter rent amount" />
                </div>


                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Due Day (1-31)</label>
                        <input type="number" class="form-control" min="1" max="31" />
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Notes (optional)</label>
                    <textarea class="form-control" rows="3" placeholder="Any additional details..."></textarea>
                </div>


                <button class="btn btn-primary w-100">Assign Rent</button>
            </form>
        </div>
    </div>

@endsection
