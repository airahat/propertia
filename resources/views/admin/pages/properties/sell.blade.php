@extends("admin.layout.master")
@section("title", "Sell Property")

@section("content")
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Record a Property Sale</h3>
            <a href="#" class="btn btn-secondary">Back</a>
        </div>


        <div class="card border-0 shadow-sm p-4">
            <form>
                <div class="mb-3">
                    <label class="form-label">Select Property</label>
                    <select class="form-select">
                        <option selected disabled>Select a property...</option>
                        <option>Modern Apartment in Banani</option>
                        <option>Commercial Space in Gulshan</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label">Buyer Name</label>
                    <input type="text" class="form-control" placeholder="Enter buyer name" />
                </div>


                <div class="mb-3">
                    <label class="form-label">Buyer Phone</label>
                    <input type="text" class="form-control" placeholder="Enter buyer phone" />
                </div>


                <div class="mb-3">
                    <label class="form-label">Selling Price (৳)</label>
                    <input type="number" class="form-control" placeholder="Enter sold price" />
                </div>


                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Sale Date</label>
                        <input type="date" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Payment Status</label>
                        <select class="form-select">
                            <option selected>Paid</option>
                            <option>Partial</option>
                            <option>Pending</option>
                        </select>
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Notes (optional)</label>
                    <textarea class="form-control" rows="3" placeholder="Any additional details..."></textarea>
                </div>


                <button class="btn btn-primary w-100">Save Sale Record</button>
        </div>
@endsection