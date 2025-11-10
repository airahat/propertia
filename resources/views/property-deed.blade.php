<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Deed of Property</title>


</head>

<body class="deed-body">
    <div class="deed-container ">


    <div class="stamp-header" style="text-align: center; margin-bottom: 10px;">
        <img src="{{ asset('deed-header.jpg') }}" 
             alt="Stamp Paper Header" 
             style="width: 100%; max-width: 190mm; max-height: 300px; display: block; margin: 0 auto;">
    </div>

        <div class="row p-5">


            <div class="col text-center mb-5">
                <h3 class="fw-bolder">Deed of Property</h3>
                <h4>Transfer of Property Ownership</h4>
            </div>


            <div class="section ">
                <strong>Date:</strong> {{ $sale->sale_date?? '___________________' }}<br>
                <strong>Place:</strong> {{ $sale->city ?? '___________________' }}
            </div>

            <div class="d-flex mt-5">

                <div class="section ">
                    <strong>Seller:</strong><br>
                    Name: Propertia Ltd.<br>
                    Address: 12 Circular Road, Dhaka<br>    
                    Contact: 017XXXXXXXX
                </div>

                <div class="section ms-auto">
                    <strong>Buyer:</strong><br>
                    Name: {{ $sale->buyer_name ?? '___________________' }}<br>
                    {{-- Address: {{ $buyer['address'] ?? '___________________' }}<br> --}}
                    Contact: {{$sale->buyer_phone ?? '___________________' }}
                </div>
            </div>

            <div class="section mt-5">
                <strong>Property Details:</strong><br>
                Property Address: {{ $sale->address ?? '___________________' }}<br>
                City: {{ $sale->city ?? '___________________' }}<br>
                Land/Plot Area: {{ $sale->area ?? '___________________' }}<br>
                Registration Number: REG-213123
                {{-- {{ $sale->registration_number ?? '___________________' }} --}}
            </div>

            <div class="section mt-5">
                <strong>Terms and Conditions:</strong><br>
                1. The seller confirms that the property is free from all encumbrances.<br>
                2. The buyer agrees to purchase the property as per the agreed terms.<br>
                3. Both parties agree to abide by the laws governing property transactions.
            </div>

            <div class="section signature d-flex mt-5 pt-5">
                <div>
                    <div class="line border-top"></div>
                    Seller Signature
                </div>
                <div class="ms-auto"> 
                    <div class="line  border-top"></div>
                    Buyer Signature
                </div>
            </div>

            <div class="section mt-3">
                <strong>Witnesses:</strong><br><br>
                1. Name: 
                {{-- {{ $witnesses[0]['name'] ?? '___________________' }}  --}}
                Signature: _______________<br>
                2. Name: 
                {{-- {{ $witnesses[1]['name'] ?? '___________________' }} --}}
                 Signature: _______________
            </div>

        </div>
    </div>
</body>

</html>
