@extends('customer.layout.base')
@section('content')
@section('title', 'About Us')
<!-- Begin: Header -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        About us
    </h2>
</div>
<!-- End: Header -->
<!-- Begin: Main Container -->
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Mission, Vision, and Core Values -->
    <div class="intro-y col-span-12 lg:col-span-4 box py-10 ">
        <i data-lucide="shield" class="block w-12 h-12 text-primary mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Mission</div>
        <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">To give the customers a positive and provide them with our excellent services.</div>
    </div>
    <div class="intro-y col-span-12 lg:col-span-4 box py-10">
        <i data-lucide="send" class="block w-12 h-12 text-primary mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Vision</div>
        <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">To learn and improve on how businesses are moving forward with using E-commerce.</div>
    </div>
    <div class="intro-y col-span-12 lg:col-span-4 box py-10">
        <i data-lucide="trending-up" class="block w-12 h-12 text-primary mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Core Values</div>
        <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">To define who we are- how we serve, how we function, how we commit, and we move foward for a brighter future for our customers and growth for our business.</div>
    </div>
    <!-- END: Mission, Vision, and Core Values -->
    <!-- BEGIN:Go Dental Information -->
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="box">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Go Dental Information
                </h2>
            </div>
            <div class="w-full h-full sm:h-full p-5 text-justify">
                <div class="indent-5"> Roman Dental Supplies Trading is a company launched in 2009 owned by Par, Roldan Vargas.
                    The company is located at Grand Royale Subdivision, Barangay. Pinagbakahan, City of Malolos,
                    Bulacan. The company is an importer and distributor of dental supplies and equipment.
                    The company offers business transactions from 8:00 am to 5:00 pm, Monday to Saturday.</div>
                <div class="indent-5 mt-2">
                The company would like to share to the customers that by reaching the company using Go Dental.
                The customers can order and buy the dentals supplies from the company through online means.
                It is  a great way for Roman Dental Supplies Trading to use E-commerce for their business to grow.
                </div>
                <div class="indent-5 mt-2">
                By exploring Go Dental there are some customers who would be thrilled that there is a company like Roman Dental Supplies Trading that would have an E-commerce business.
                It is because dental clinics or other clinics would sometimes have a hard time looking for supplies that they need.
                This also shows that Roman Dental Supplies Trading can Expand their business and continue to grow over the years to come.

                </div>
            </div>
        </div>
    </div>
    <!-- End: Go Dental Information -->
    <!-- Begin: Go Dental Image -->
    <div class="intro-y box col-span-12 lg:col-span-6 ">
        <div class="flex items-center justify-center">
            <img src="{{ asset('icons/about.jpg') }}" class="w-full h-96" alt="About Us Image" data-action="zoom" />
        </div>
    </div>
    <!-- End Go Dental Image -->
</div>
<!-- Begin: Go Dental Map -->
<div class="box intro-y mt-5 p-3 border-b border-slate-200/60">
    <div id="map"  class="w-full h-96 "></div>
</div>
<!-- End: Go Dental Map -->

@endsection
@push('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMPLUYUqR8R0YvltLkdenCqsCqH2v7kvQ&callback=initMap"></script>
<script>
    // Initialize and add the map
    function initMap() {
    // The location of Uluru
    const uluru = { lat: 14.869930304129703, lng: 120.81190889325947 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
    }

    initMap();
    window.initMap = initMap;
</script>
@endpush

