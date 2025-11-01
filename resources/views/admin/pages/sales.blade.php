@extends('admin.layout.master')
@section("title", "Sales")
@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Sales Records (Static Demo)</h2>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Sold Properties
        </div>

        <div class="card-body p-0">

            <table class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Property Title</th>
                        <th>Location</th>
                        <th>Buyer Name</th>
                        <th>Sale Price</th>
                        <th>Date Sold</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lake View Apartment</td>
                        <td>Dhanmondi, Dhaka</td>
                        <td>Abdul Karim</td>
                        <td>৳ 25,00,000</td>
                        <td>12 Oct 2025</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Luxury Duplex Villa</td>
                        <td>Gulshan, Dhaka</td>
                        <td>Farzana Ahmed</td>
                        <td>৳ 80,00,000</td>
                        <td>08 Oct 2025</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Commercial Shop Space</td>
                        <td>Mirpur, Dhaka</td>
                        <td>Shohag Enterprise</td>
                        <td>৳ 12,00,000</td>
                        <td>02 Oct 2025</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Family Apartment (3BHK)</td>
                        <td>Bashundhara, Dhaka</td>
                        <td>Javed Hasan</td>
                        <td>৳ 38,00,000</td>
                        <td>28 Sep 2025</td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection
