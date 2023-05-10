<?php

use App\Http\Controllers\Backend\Reports\ReportController;
use App\Http\Controllers\Backend\Reports\BrowserTypeController;
use App\Http\Controllers\Backend\Reports\MostVisitedPageController;
use App\Http\Controllers\Backend\Reports\UserTypeController;
use App\Http\Controllers\Backend\Reports\GenderController;
use App\Http\Controllers\Backend\Reports\PaymentByTypeController;
use App\Http\Controllers\Backend\Reports\SalesOverTimeController;
use App\Http\Controllers\Backend\Reports\SalesByProductController;
use App\Http\Controllers\Backend\Reports\CustomerTotalSpentController;
use App\Http\Controllers\Backend\Reports\SalesByCategoryController;
use App\Http\Controllers\Backend\Reports\SalesByBrandController;
use App\Http\Controllers\Backend\Reports\TotalOrderedBrandController;
use App\Http\Controllers\Backend\Reports\TotalOrderedCategoryController;
use App\Http\Controllers\Backend\Reports\CancelledOrderController;
use App\Http\Controllers\Backend\Reports\CancellationOverTimeController;
use App\Http\Controllers\Backend\Reports\MonthlyCancellationController;
use App\Http\Controllers\Backend\Reports\CancellationReasonController;
use App\Http\Controllers\Backend\Reports\NumberRejectedOrderController;
use App\Http\Controllers\Backend\Reports\CustomersGainedPerMonthController;
use App\Http\Controllers\Backend\Reports\AccountVerificationController;
use App\Http\Controllers\Backend\Reports\VerifiedAccountController;
use App\Http\Controllers\Backend\Reports\NonVerifiedAccountController;
use App\Http\Controllers\Backend\Reports\QuantityProductsOrderedController;
use App\Http\Controllers\Backend\Reports\ProductBuyerController;
use App\Http\Controllers\Backend\Reports\TotalOrderedProductPerCustomerController;
use App\Http\Controllers\Backend\Reports\CustomerBoughtProductController;
use App\Http\Controllers\Backend\Reports\ProductRatingController;
use App\Http\Controllers\Backend\Reports\RatingsByCustomerController;
use App\Http\Controllers\Backend\Reports\CustomerGainedPerMonthListController;


Route::middleware(['auth:web'])->group(function () {
    //Begin: Export Files for Browser Type
    Route::get('/report/browser/pdf/{startdate}/{enddate}', [BrowserTypeController::class, 'exportbrowsertypeexcel'])->name('exportbrowsertypeexcel');
    //Begin: Export Files for User Type
    Route::get('/report/UserType/pdf/{startdate}/{enddate}', [UserTypeController::class, 'exportusertypeexcel'])->name('exportusertypeexcel');
    //Begin: Export Files for List of Most Visited Page
    Route::get('/report/MostVisitedPage/pdf/{startdate}/{enddate}', [MostVisitedPageController::class, 'exportMostVisitedPageExcel'])->name('exportMostVisitedPageExcel');
    //Begin: Export Files for Number of Cancelled Orders
    Route::get('/report/cancelledorders/pdf',[CancelledOrderController::class,'exportCancelledOrdersExcel'])->name('exportCancelledOrdersExcel');
    //Begin: Export Files  for Cancellation Reason
    Route::get('/report/cancellationreasons/pdf',[CancellationReasonController::class,'exportCancellationReasonsExcel'])->name('exportCancellationReasonsExcel');
    //Begin: Export Files for Number of Reject Orders
    Route::get('/report/rejectedorders/pdf',[NumberRejectedOrderController::class,'exportRejectedOrdersExcel'])->name('exportRejectedOrdersExcel');
    //Begin: Export Files for Number of cancelled orders overtime
    Route::get('/report/cancellationovertime/pdf',[CancellationOverTimeController::class,'exportCancellationOverTime'])->name('report.exportCancellationOverTime');
    //Begin: Export Files for Monthly Cancellation Reports
    Route::get('/report/monthlycancellation/pdf/{month}/{year}',[MonthlyCancellationController::class,'exportMonthlyCancellation'])->name('report.exportMonthlyCancellation');
    //Begin: Export Files for Numbers of Created Customers Per Month
    Route::get('/report/customerPerMonth/pdf',[CustomersGainedPerMonthController::class,'exportCustomerPerMonthEXCEL'])->name('exportCustomerPerMonthEXCEL');
    //Begin: Export Files for List of Customers Created between that month
    Route::get('/report/customerPerMonth/{from}/{to}/pdf',[CustomerGainedPerMonthListController::class,'exportCustomerPerMonthList'])->name('exportCustomerPerMonthList');
    //Begin: Export Files for Number of Products Bought by the Customer
    Route::get('/report/productbycustomer/pdf/',[ProductBuyerController::class,'exportProductByCustomerExcel'])->name('report.exportProductByCustomerExcel');
    //Begin: Export Files for Number of Verified Accounts
    Route::get('/report/VerifiedAccount/pdf/',[VerifiedAccountController::class,'exportVerifiedAccountsExcel'])->name('report.exportVerifiedAccountsExcel');
    //Begin: Export Files for Non Verified Accounts
    Route::get('/report/NonVerifiedAccount/pdf/',[NonVerifiedAccountController::class,'exportNonVerifiedAccountExcel'])->name('report.exportNonVerifiedAccountsExcel');
    //Begin:
    Route::get('/report/OrdersByProduct/pdf/',[QuantityProductsOrderedController::class,'exportOrdersByProductExcel'])->name('report.exportOrdersByProductExcel');
    //Begin:
    Route::get('/report/OrdersByCustomer/customerbyproduct/pdf/',[TotalOrderedProductPerCustomerController::class,'exportOrdersByCustomer'])->name('report.exportOrdersByCustomer');
    //Begin:
    Route::get('/report/customerbyproduct/pdf/{name}',[CustomerBoughtProductController::class,'exportCustomerByProductExcel'])->name('report.exportCustomerByProductExcel');
    //Begin: Export files for the Type of Payment
    Route::get('/report/PaymentByType/pdf/{startdate}/{enddate}', [PaymentByTypeController::class, 'exportPaymentByType'])->name('report.exportPaymentByType');
    //Begin: Export files for the list of products and their respective ratings
    Route::get('/report/productratings/pdf/{sorting}/{startdate}/{enddate}',[ProductRatingController::class,'exportProductRatingsExcel'])->name('report.exportProductRatingsExcel');
    //Begin: Export Files for the products and list of customers who rate that product
    Route::get('/report/productratings/ProductRatingsByCustomer/pdf/{sorting}/{startdate}/{enddate}/{name}',[RatingsByCustomerController::class,'exportProductRatingsByCustomerExcel'])->name('report.exportProductRatingsByCustomerExcel');
    //Begin Export Files for Sales Overtime
    Route::get('/report/SalesOvertime/pdf', [SalesOverTimeController::class, 'exportsalesovertime'])->name('exportsalesovertime');
    //Begin: Export Files for Sales by Product
    Route::get('/report/salesprod/pdf/{sorting}/{startdate}/{enddate}', [SalesByProductController::class, 'exportSalesByProductEXCEL'])->name('exportSalesProductEXCEL');
    //Begin Export Files for Sales by Brand
    Route::get('/report/salesbrand/pdf/{sorting}/{startdate}/{enddate}', [SalesByBrandController::class, 'exportSalesBrandEXCEL'])->name('exportSalesBrandEXCEL');
    //Begin: Export Files For Sales by Category
    Route::get('/report/salescategory/pdf/{sorting}/{startdate}/{enddate}', [SalesByCategoryController::class, 'exportSalesCategoryEXCEL'])->name('exportSalesCategoryEXCEL');
    //Begin: Export Files for number of brand ordered
    Route::get('/report/orderbrand/pdf/{sorting}/{startdate}/{enddate}', [TotalOrderedBrandController::class, 'exportOrderBrandExcel'])->name('exportOrderBrandExcel');
    //Begin: Export Files for number of category ordered
    Route::get('/report/ordercategory/pdf/{sorting}/{startdate}/{enddate}', [TotalOrderedCategoryController::class, 'exportOrderCategoryExcel'])->name('exportOrderCategoryExcel');
    //Begin: Export Files for customers total spent
    Route::get('/report/CustomersTotalSpent/pdf/{sorting}/{startdate}/{enddate}',[CustomerTotalSpentController::class,'exportCustomerTotalSpent'])->name('exportCustomerTotalSpent');
    //Begin: Export files for List of genders
    Route::get('/report/gender/pdf', [GenderController::class, 'exportGenderExcel'])->name('exportGenderExcel');
    //Begin: Export Files for Account Verification
    Route::get('/report/accountverification/pdf',[AccountVerificationController::class,'exportAccountVerification'])->name('exportAccountVerification');

    Route::middleware(['PreventBackHistory'])->group(function () {
        //Begin: Reports Table
        Route::resource('report', ReportController::class)->only(['index']);
        //Begin: Browser Type
        Route::get('/report/browser', [BrowserTypeController::class, 'BrowserIndex'])->name('report.browser');
        //Begin: Cancelled Orders
        Route::get('/report/cancelledorders',[CancelledOrderController::class,'CancelledOrders'])->name('report.CancelledOrders');
        //Begin: Cancellation Reasons
        Route::get('/report/cancellationreasons',[CancellationReasonController::class,'CancellationReasons'])->name('report.CancellationReasons');
        //Begin: Reject Orders
        Route::get('/report/rejectedorders',[NumberRejectedOrderController::class,'RejectedOrders'])->name('report.RejectedOrders');
       //Begin: Cancellation Over Time
       Route::get('/report/cancellationovertime',[CancellationOverTimeController::class,'CancellationOverTime'])->name('report.CancellationOverTime');
       //Begin: Monthly Cancellation
       Route::get('/report/monthlycancellation/{month}/{year}', [MonthlyCancellationController::class,'MonthlyCancellation'])->name('report.MonthlyCancellation');
       //Begin: Customer Per Month
       Route::get('/report/customerPerMonth',[CustomersGainedPerMonthController::class,'customerPerMonth'])->name('report.customerPerMonth');
       //Begin: List of Customer Per Month
       Route::get('/report/CustomerPerMonth/{month}/{year}', [CustomerGainedPerMonthListController::class,'CustomerPerMonthList'])->name('report.ShowCustomerPerMonth');
       //Begin: Payment By Type
       Route::get('/report/PaymentByType', [PaymentByTypeController::class, 'PaymentTypeIndex'])->name('report.PaymentByType');
       //Begin: User Type
       Route::get('/report/UserType', [UserTypeController::class, 'UserTypeIndex'])->name('report.UserType');
       //Begin: Most Visited Page
       Route::get('/report/MostVisitedPage', [MostVisitedPageController::class, 'MostVisitedPageIndex'])->name('report.MostVisitedPageIndex');
       //Begin: Sales Over Time
       Route::get('/report/SalesOvertime', [SalesOverTimeController::class, 'SalesOvertimeIndex'])->name('report.SalesOvertime');
       //Begin: Account Verification
       Route::get('/report/accountverification',[AccountVerificationController::class,'AccountVerification'])->name('report.AccountVerification');
       //Begin: Verified Accounts
       Route::get('/report/VerifiedAccount',[VerifiedAccountController::class,'VerifiedAccount'])->name('report.VerifiedAccount');
       //Begin: Non Verified Accounts
       Route::get('/report/NonVerifiedAccount',[NonVerifiedAccountController::class,'NonVerifiedAccount'])->name('report.NonVerifiedAccount');
       //Begin: Orders By Product
       Route::get('/report/OrdersByProduct',[QuantityProductsOrderedController::class,'OrdersByProduct'])->name('report.OrdersByProduct');
       //Begin:
       Route::get('/report/OrdersByProduct/ProductByCustomer/{name}',[ProductBuyerController::class,'ProductByCustomer'])->name('report.ProductByCustomer');
       //Begin:
       Route::get('/report/OrdersByCustomer',[TotalOrderedProductPerCustomerController::class,'OrdersByCustomer'])->name('report.OrdersByCustomer');
       //Begin:
       Route::get('/report/OrdersByCustomer/CustomerByProduct/{name}',[CustomerBoughtProductController::class,'CustomerByProduct'])->name('report.CustomerByProduct');
       //Begin:
       Route::get('/report/productratings',[ProductRatingController::class,'ProductRatings'])->name('report.ProductRatings');
       //Begin:
       Route::get('/report/productratings/ProductRatingsByCustomer/{product_id}/{product_name}',[RatingsByCustomerController::class,'ProductRatingsByCustomer'])->name('report.ProductRatingsByCustomer');
       //Begin:
       Route::get('/report/gender', [GenderController::class, 'GenderIndex'])->name('report.Gender');
       //Begin:
       Route::get('/report/SalesByProduct', [SalesByProductController::class, 'SalesByProductIndex'])->name('report.SalesProd');
       //Begin:
       Route::get('/report/CustomersTotalSpent', [CustomerTotalSpentController::class, 'CustomersTotalSpent'])->name('report.CustomersTotalSpent');
       //Begin:
       Route::get('/report/salesbrand', [SalesByBrandController::class, 'salesBrand'])->name('report.SalesBrand');
       //Begin:
       Route::get('/report/orderbrand', [TotalOrderedBrandController::class, 'BrandOrderIndex'])->name('report.OrderBrand');
       //Begin:
       Route::get('/report/salescategory', [SalesByCategoryController::class, 'salesCategory'])->name('report.SalesCategory');
       //Begin:
       Route::get('/report/ordercategory', [TotalOrderedCategoryController::class, 'CategoryOrderIndex'])->name('report.OrderCategory');

    });

});
