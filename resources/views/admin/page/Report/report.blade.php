@extends('admin.layout.admin')
@section('content')
@section('title', 'Report')

<div class="intro-y box p-5">
    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
            Report
        </div>
        <!-- Begin: Reports Table -->
        <div class="overflow-x-auto scrollbar-hidden">
            <div class="overflow-x-auto">
                    <table class="table table-striped mt-5 table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="whitespace-nowrap ">Name</th>
                                <th class="whitespace-nowrap text-center">Category</th>
                                <th class="whitespace-nowrap text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Browser</td>
                                <td class="whitespace-nowrap text-center">System</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.browser') }}">View Details</a> </td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Most Visited Page</td>
                                <td class="whitespace-nowrap text-center">System</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.MostVisitedPageIndex') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">User Type</td>
                                <td class="whitespace-nowrap text-center">Sales</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.UserType') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Payment By Type</td>
                                <td class="whitespace-nowrap text-center">Payment</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.PaymentByType') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Gross Sales</td>
                                <td class="whitespace-nowrap text-center">Sales</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.GrossSales') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Profit By Product</td>
                                <td class="whitespace-nowrap text-center">Sales</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.ProfitByProduct') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Sales over time</td>
                                <td class="whitespace-nowrap text-center">Sales</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.SalesOvertime') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Sales by Product</td>
                                <td class="whitespace-nowrap text-center">Sales</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.SalesProd') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Sales by Customer</td>
                                <td class="whitespace-nowrap text-center">Sales</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.SalesCustomer') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Sales by Brand</td>
                                <td class="whitespace-nowrap text-center">Sales</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.SalesBrand') }}">View Details</a></td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap cursor-pointer hover:underline">Sales by Category</td>
                                <td class="whitespace-nowrap text-center">Sales</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ Route('report.SalesCategory') }}">View Details</a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End: Reports Table -->
        </div>
    </div>
</div>
@endsection
