<?php

//Admin Dashboard Import
use App\Http\Controllers\Backend\Auth\ChangePasswordController;
//Admin Controller Import
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\LogoutController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Auth\ResetController;
use App\Http\Controllers\Backend\Page\DashboardController;
use App\Http\Controllers\Backend\Page\ProfileController;
//Import Admin Product Related Stuff
use App\Http\Controllers\Backend\Product\BrandController;
use App\Http\Controllers\Backend\Product\CategoryController;
use App\Http\Controllers\Backend\Product\InventoryController;
use App\Http\Controllers\Backend\Product\InventoryTransferController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Product\SupplierController;
//Import Admin Transaction Stuff
use App\Http\Controllers\Backend\Transaction\OrderController;
use App\Http\Controllers\Backend\Transaction\PostController;
use App\Http\Controllers\Backend\Users\CustomerController;
use App\Http\Controllers\Backend\Users\RoleController;
use App\Http\Controllers\Backend\Users\UsersController;
//Import Report Controller Stuff
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




Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
        Route::resource('login', LoginController::class)->only(['index', 'store']);
    });

    Route::middleware(['auth:web'])->group(function () {
        //Begin: Export Files for Category
        Route::get('/category/excel', [CategoryController::class, 'exportcategoriesexcel'])->name('exportcategoriesexcel');
        //Begin: Export Files for Brand
        Route::get('/brand/excel', [BrandController::class, 'exportbrandexcel'])->name('exportbrandexcel');
        //Begin: Export Files for Product
        Route::get('/product/excel', [ProductController::class, 'exportproductexcel'])->name('exportproductexcel');
        //Begin:Export Files for Supplier
        Route::get('/supplier/excel', [SupplierController::class, 'exportsupplierexcel'])->name('exportsupplierexcel');
        //Begin:Export Files for Role
        Route::get('/role/excel', [RoleController::class, 'exportroleexcel'])->name('exportroleexcel');
        //Begin: Export Files for Browser Type
        Route::get('/report/browser/excel/{startdate}/{enddate}', [BrowserTypeController::class, 'exportbrowsertypeexcel'])->name('exportbrowsertypeexcel');
        //Begin: Export Files for User Type
        Route::get('/report/UserType/excel/{startdate}/{enddate}', [UserTypeController::class, 'exportusertypeexcel'])->name('exportusertypeexcel');
        //Begin: Export Files for List of Most Visited Page
        Route::get('/report/MostVisitedPage/excel/{startdate}/{enddate}', [MostVisitedPageController::class, 'exportMostVisitedPageExcel'])->name('exportMostVisitedPageExcel');
        //Begin: Export Files for Number of Cancelled Orders
        Route::get('/report/cancelledorders/excel',[CancelledOrderController::class,'exportCancelledOrdersExcel'])->name('exportCancelledOrdersExcel');
        //Begin: Export Files  for Cancellation Reason
        Route::get('/report/cancellationreasons/excel',[CancellationReasonController::class,'exportCancellationReasonsExcel'])->name('exportCancellationReasonsExcel');
        //Begin: Export Files for Number of Reject Orders
        Route::get('/report/rejectedorders/excel',[NumberRejectedOrderController::class,'exportRejectedOrdersExcel'])->name('exportRejectedOrdersExcel');
        //Begin: Export Files for Number of cancelled orders overtime
        Route::get('/report/cancellationovertime/excel',[CancellationOverTimeController::class,'exportCancellationOverTime'])->name('report.exportCancellationOverTime');
        //Begin: Export Files for Monthly Cancellation Reports
        Route::get('/report/monthlycancellation/excel/{month}/{year}',[MonthlyCancellationController::class,'exportMonthlyCancellation'])->name('report.exportMonthlyCancellation');
        //Begin: Export Files for Numbers of Created Customers Per Month
        Route::get('/report/customerPerMonth/excel',[CustomersGainedPerMonthController::class,'exportCustomerPerMonthEXCEL'])->name('exportCustomerPerMonthEXCEL');
        //Begin: Export Files for Number of Products Bought by the Customer
        Route::get('/report/productbycustomer/excel/',[ProductBuyerController::class,'exportProductByCustomerExcel'])->name('report.exportProductByCustomerExcel');
        //Begin: Export Files for Number of Verified Accounts
        Route::get('/report/VerifiedAccount/excel/',[VerifiedAccountController::class,'exportVerifiedAccountsExcel'])->name('report.exportVerifiedAccountsExcel');
        //Begin: Export Files for Non Verified Accounts
        Route::get('/report/NonVerifiedAccount/excel/',[NonVerifiedAccountController::class,'exportNonVerifiedAccountExcel'])->name('report.exportNonVerifiedAccountsExcel');
        //Begin:
        Route::get('/report/OrdersByProduct/excel/',[QuantityProductsOrderedController::class,'exportOrdersByProductExcel'])->name('report.exportOrdersByProductExcel');
        //Begin:
        Route::get('/report/OrdersByCustomer/customerbyproduct/excel/',[TotalOrderedProductPerCustomerController::class,'exportOrdersByCustomer'])->name('report.exportOrdersByCustomer');
        //Begin:
        Route::get('/report/customerbyproduct/excel/{name}',[CustomerBoughtProductController::class,'exportCustomerByProductExcel'])->name('report.exportCustomerByProductExcel');
        //Begin: Export files for the Type of Payment
        Route::get('/report/PaymentByType/excel/{startdate}/{enddate}', [PaymentByTypeController::class, 'exportPaymentByType'])->name('report.exportPaymentByType');
        //Begin: Export files for the list of products and their respective ratings
        Route::get('/report/productratings/excel/{sorting}/{startdate}/{enddate}',[ProductRatingController::class,'exportProductRatingsExcel'])->name('report.exportProductRatingsExcel');
        //Begin: Export Files for the products and list of customers who rate that product
        Route::get('/report/productratings/ProductRatingsByCustomer/excel/{sorting}/{startdate}/{enddate}/{name}',[RatingsByCustomerController::class,'exportProductRatingsByCustomerExcel'])->name('report.exportProductRatingsByCustomerExcel');
        //Begin Export Files for Sales Overtime
        Route::get('/report/SalesOvertime/excel', [SalesOverTimeController::class, 'exportsalesovertime'])->name('exportsalesovertime');
        //Begin: Export Files for Sales by Product
        Route::get('/report/salesprod/excel/{sorting}/{startdate}/{enddate}', [SalesByProductController::class, 'exportSalesByProductEXCEL'])->name('exportSalesProductEXCEL');
        //Begin Export Files for Sales by Brand
        Route::get('/report/salesbrand/excel/{sorting}/{startdate}/{enddate}', [SalesByBrandController::class, 'exportSalesBrandEXCEL'])->name('exportSalesBrandEXCEL');
        //Begin: Export Files For Sales by Category
        Route::get('/report/salescategory/excel/{sorting}/{startdate}/{enddate}', [SalesByCategoryController::class, 'exportSalesCategoryEXCEL'])->name('exportSalesCategoryEXCEL');
        //Begin: Export Files for number of brand ordered
        Route::get('/report/orderbrand/excel/{sorting}/{startdate}/{enddate}', [TotalOrderedBrandController::class, 'exportOrderBrandExcel'])->name('exportOrderBrandExcel');
        //Begin: Export Files for number of category ordered
        Route::get('/report/ordercategory/excel/{sorting}/{startdate}/{enddate}', [TotalOrderedCategoryController::class, 'exportOrderCategoryExcel'])->name('exportOrderCategoryExcel');
        //Begin: Export Files for customers total spent
        Route::get('/report/CustomersTotalSpent/excel/{sorting}/{startdate}/{enddate}',[CustomerTotalSpentController::class,'exportCustomerTotalSpent'])->name('exportCustomerTotalSpent');
        //Begin: Export files for List of genders
        Route::get('/report/gender/excel', [GenderController::class, 'exportGenderExcel'])->name('exportGenderExcel');

        Route::middleware(['PreventBackHistory'])->group(function () {
            //Begin: Logout Module
            Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
            //Begin: Dashboard Module
            Route::resource('dashboard', DashboardController::class)->only(['index']);
            //Begin: Product Attribute Module
            Route::resource('brand', BrandController::class)->only(['index']);
            Route::resource('category', CategoryController::class)->only('index');
            //Begin: Inventory Module
            Route::resource('inventory', InventoryController::class)->except(['edit', 'show', 'create']);
            Route::get('product/inventory_history/{id}', [ProductController::class, 'ProductInventoryHistory'])->name('ProductInventoryHistory');
            //Begin: Purchase Order Module
            Route::resource('transfer', InventoryTransferController::class);
            Route::get('/receive/{id}', [InventoryTransferController::class, 'receive'])->name('inventory.receive');
            //Begin: Product Module
            Route::get('/product/archive', [ProductController::class, 'ProductArchiveIndex'])->name('ProductArchiveIndex');
            Route::delete('/product/archive/{id}', [ProductController::class, 'ProductArchiveDestroy']);
            Route::put('/product/archive/{id}', [ProductController::class, 'ProductArchiveRestore']);
            Route::get('/product/featuredproducts', [ProductController::class, 'FeaturedProductIndex'])->name('product.FeaturedProduct');
            Route::resource('product', ProductController::class);
            //End: Product Module
            //Begin: Order
            Route::get('/orders/print_waybill/{id}',[OrderController::class, 'Invoice'])->name('invoice');
            Route::resource('orders', OrderController::class)->only('index', 'show');
            //End: Order Module
            //Begin: Banner Module
            Route::resource('post', PostController::class)->only('index');
            //End: Banner Module
            //Begin: Supplier Module
            Route::get('/supplier/archive', [SupplierController::class, 'SupplierArchiveIndex'])->name('SupplierArchiveIndex');
            Route::resource('supplier', SupplierController::class);
            //End: Supplier Module
            //Begin: Profile Module
            Route::get('/profile/changepassword', [ProfileController::class, 'changepass'])->name('AdminChangePass');
            Route::post('/profile/changepassword', [ProfileController::class, 'resetpass']);
            Route::resource('profile', ProfileController::class)->only('index');
            Route::resource('changepassword', ChangePasswordController::class)->only('index');
            //End: Profile Module

            //Begin:List Of Reports: System
            Route::get('/report/browser', [BrowserTypeController::class, 'BrowserIndex'])->name('report.browser');

            Route::get('/report/cancelledorders',[CancelledOrderController::class,'CancelledOrders'])->name('report.CancelledOrders');
            Route::get('/report/cancellationreasons',[CancellationReasonController::class,'CancellationReasons'])->name('report.CancellationReasons');
            Route::get('/report/rejectedorders',[NumberRejectedOrderController::class,'RejectedOrders'])->name('report.RejectedOrders');
            Route::get('/report/cancellationovertime',[CancellationOverTimeController::class,'CancellationOverTime'])->name('report.CancellationOverTime');
            Route::get('/report/monthlycancellation/{month}/{year}', [MonthlyCancellationController::class,'MonthlyCancellation'])->name('report.MonthlyCancellation');
            Route::get('/report/customerPerMonth',[CustomersGainedPerMonthController::class,'customerPerMonth'])->name('report.customerPerMonth');
            Route::get('/report/showCustomerPerMonth/{month}/{year}', [ReportController::class,'showCustomerPerMonth'])->name('report.ShowCustomerPerMonth');
            Route::get('/report/PaymentByType', [PaymentByTypeController::class, 'PaymentTypeIndex'])->name('report.PaymentByType');
            Route::get('/report/UserType', [UserTypeController::class, 'UserTypeIndex'])->name('report.UserType');
            Route::get('/report/MostVisitedPage', [MostVisitedPageController::class, 'MostVisitedPageIndex'])->name('report.MostVisitedPageIndex');
            Route::get('/report/SalesOvertime', [SalesOverTimeController::class, 'SalesOvertimeIndex'])->name('report.SalesOvertime');
            Route::get('/report/Cancellation', [ReportController::class, 'CancellationIndex'])->name('report.Cancellation');
            Route::get('/report/accountverification',[ReportController::class,'AccountVerification'])->name('report.AccountVerification');
            Route::get('/report/VerifiedAccount',[VerifiedAccountController::class,'VerifiedAccount'])->name('report.VerifiedAccount');
            Route::get('/report/NonVerifiedAccount',[NonVerifiedAccountController::class,'NonVerifiedAccount'])->name('report.NonVerifiedAccount');
            Route::get('/report/TopBuyerPerProduct',[ReportController::class,'TopBuyerPerProduct'])->name('report.TopBuyerPerProduct');
            Route::get('/report/OrdersByProduct',[QuantityProductsOrderedController::class,'OrdersByProduct'])->name('report.OrdersByProduct');
            Route::get('/report/OrdersByProduct/ProductByCustomer/{name}',[ProductBuyerController::class,'ProductByCustomer'])->name('report.ProductByCustomer');
            Route::get('/report/OrdersByCustomer',[TotalOrderedProductPerCustomerController::class,'OrdersByCustomer'])->name('report.OrdersByCustomer');
            Route::get('/report/OrdersByCustomer/CustomerByProduct/{name}',[CustomerBoughtProductController::class,'CustomerByProduct'])->name('report.CustomerByProduct');

            Route::get('/report/productratings',[ProductRatingController::class,'ProductRatings'])->name('report.ProductRatings');
            Route::get('/report/productratings/ProductRatingsByCustomer/{product_id}/{product_name}',[RatingsByCustomerController::class,'ProductRatingsByCustomer'])->name('report.ProductRatingsByCustomer');
            //Return To Be Made Soon
            Route::get('/report/Return', [ReportController::class, 'ReturnIndex'])->name('report.Return');
            //End: List of Reports: System

            //Begin: List of Reports: Demographics
            Route::get('/report/gender', [GenderController::class, 'GenderIndex'])->name('report.Gender');
            //End: List of Reports: Demographics

            //Begin: List of Reports: Sales
            Route::get('/report/SalesByProduct', [SalesByProductController::class, 'SalesByProductIndex'])->name('report.SalesProd');

            Route::get('/report/CustomersTotalSpent', [CustomerTotalSpentController::class, 'CustomersTotalSpent'])->name('report.CustomersTotalSpent');
            Route::get('/report/salesbrand', [SalesByBrandController::class, 'salesBrand'])->name('report.SalesBrand');
            Route::get('/report/orderbrand', [TotalOrderedBrandController::class, 'BrandOrderIndex'])->name('report.OrderBrand');
            Route::get('/report/salescategory', [SalesByCategoryController::class, 'salesCategory'])->name('report.SalesCategory');
            Route::get('/report/ordercategory', [TotalOrderedCategoryController::class, 'CategoryOrderIndex'])->name('report.OrderCategory');
            //End: List of Reports: Sales
            //Begin: Reports Table
            Route::resource('report', ReportController::class);
            //End: Reports Table
            //Begin: Customers Module
            Route::get('/customer/archive', [CustomerController::class, 'CustomerArchiveIndex'])->name('CustomerArchiveIndex');
            Route::resource('customer', CustomerController::class)->only('index', 'show');
            //End: Customers Module

            //Begin: Users Module
            Route::get('/user/archive', [UsersController::class, 'UserArchiveIndex'])->name('UserArchiveIndex');
            Route::resource('user', UsersController::class);
            Route::post('role/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
            Route::delete('role/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
            Route::resource('role', RoleController::class);
            //End: Users Module

        });
    });
});
