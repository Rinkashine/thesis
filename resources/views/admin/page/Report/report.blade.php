@extends('admin.layout.admin')
@section('content')
@section('title', 'Report')

<div class="mt-2 rounded-md intro-y bg-gradient-to-b from-white to-slate-50">
    <div class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400">
        <div class="flex items-center pb-5 text-base font-medium border-b border-slate-200/60 dark:border-darkmode-400">
            Report
        </div>
        <div class="flex items-center py-5 text-base font-medium">
            System Section
        </div>
        <!-- Report Container -->
        <div class="grid grid-cols-12 gap-4">
            <!-- Browser -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Browser.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Browser</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.browser') }}">View Details</a>
                </div>
            </div>
            <!-- Most Visited Page -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/MostVisitedPage.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Most Visited Page</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.MostVisitedPageIndex') }}">View Details</a>
                </div>
            </div>
            <!-- User Type -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/UserType.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">User Type</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.UserType') }}">View Details</a>
                </div>
            </div>
            <!-- Gender -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Gender.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Gender</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.Gender') }}">View Details</a>
                </div>
            </div>
            <!-- Payment By Type -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/PaymentByType.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Payment By Type</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.PaymentByType') }}">View Details</a>
                </div>
            </div>

            <!-- No# Cancelled Orders per User -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">No# Cancelled Orders per User</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.CancelledOrders') }}">View Details</a>
                </div>
            </div>
            <!-- Cancellation Over Time -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Cancellation Over Time</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.CancellationOverTime') }}">View Details</a>
                </div>
            </div>
            <!-- Cancellation Reasons -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Cancellation Reasons</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.CancellationReasons') }}">View Details</a>
                </div>
            </div>
            <!-- Rejected Orders -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Rejected Orders</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.RejectedOrders') }}">View Details</a>
                </div>
            </div>
            <!-- Customer Per "Date" -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Customers Per "Date"</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.customerPerMonth') }}">View Details</a>
                </div>
            </div>
            <!-- Account Verification -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Account Verification</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.AccountVerification') }}">View Details</a>
                </div>
            </div>
            <!-- OrdersByProduct -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Product Order Volume</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.OrdersByProduct') }}">View Details</a>
                </div>
            </div>
            <!-- OrdersByProduct -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Customer's Order Volume</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.OrdersByCustomer') }}">View Details</a>
                </div>
            </div>
            <!-- Product Ratings -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Product Ratings</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.ProductRatings') }}">View Details</a>
                </div>
            </div>
        </div>

        <div class="flex items-center py-5 mt-8 text-base font-medium border-t">
            Sales Section
        </div>

        <div class="grid grid-cols-12 gap-4">
            <!-- Sales Over Time -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/SalesOvertime.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Monthly Sales</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.SalesOvertime') }}">View Details</a>
                </div>
            </div>
            <!-- Sales By Product -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/SalesbyProduct.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Product Sales</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.SalesProd') }}">View Details</a>
                </div>
            </div>
            <div class="col-span-6 zoom-in p-2 t    ext-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/CustomerTotalSpent.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm"> Customer Expenditure</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.CustomersTotalSpent') }}">View Details</a>
                </div>
            </div>
            <!-- Product Sales per Brand -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/ProductSalesperBrand.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Brand Sales</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.SalesBrand') }}">View Details</a>
                </div>
            </div>
            <!-- Products Sales per Category -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Category</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.SalesCategory') }}">View Details</a>
                </div>
            </div>
            <!-- Products Sold per Brand -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Brand Order Volume</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.OrderBrand') }}">View Details</a>
                </div>
            </div>
            <!-- Products Sold per Category -->
            <div class="col-span-6 zoom-in p-2 text-xs bg-white border rounded-md shadow-md md:col-span-3 lg:col-span-2 w-fit">
                <div>
                    <img class="object-scale-down w-full max-w-md max-h-56" src="{{ asset('dist/images/Construction.svg') }}">
                </div>
                <div>
                    <div class="ml-1 sm:text-sm">Category Order Volume</div>
                </div>
                <div class="p-1 mt-1 text-sm text-center border-t">
                    <a class="sm:text-base" href="{{ Route('report.OrderCategory') }}">View Details</a>
                </div>
            </div>
        </div>
            <!-- End: Reports Table -->
        </div>
    </div>
</div>
@endsection
