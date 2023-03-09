<?php

use Illuminate\Support\Facades\Routes;
//Admin Dashboard Import
use App\Http\Controllers\Backend\Page\DashboardController;
//Admin Controller Import
use App\Http\Controllers\Backend\Page\ProfileController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\ResetController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Auth\ChangePasswordController;
use App\Http\Controllers\Backend\Auth\LogoutController;
//Import Admin Product Related Stuff
use App\Http\Controllers\Backend\Product\BrandController;
use App\Http\Controllers\Backend\Product\CategoryController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Product\ProductImageController;
use App\Http\Controllers\Backend\Product\InventoryController;
use App\Http\Controllers\Backend\Product\InventoryTransferController;
use App\Http\Controllers\Backend\Product\SupplierController;
use App\Http\Controllers\Backend\Product\DiscountController;
//Import Admin Transaction Stuff
use App\Http\Controllers\Backend\Transaction\ChatController;
use App\Http\Controllers\Backend\Transaction\OrderController;
use App\Http\Controllers\Backend\Transaction\PostController;
use App\Http\Controllers\Backend\Reports\ReportController;
use App\Http\Controllers\Backend\Users\CustomerController;
use App\Http\Controllers\Backend\Users\RoleController;
use App\Http\Controllers\Backend\Users\UsersController;
use App\Http\Controllers\Backend\Users\PermissionController;

Route::group(['prefix' => 'admin'],function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function () {
        Route::resource('login', LoginController::class)->only(['index','store']);
        Route::resource('register', RegisterController::class)->only(['index','store']);
        Route::get('reset/password/{token}', [ResetController::class, 'ShowResetForm'])->name('reset.password.form');
        Route::post('reset/password',[ResetController::class,'ResetPassword'])->name('reset.password');
        Route::resource('reset', ResetController::class)->only(['index','store']);
    });

    Route::middleware(['auth:web'])->group(function () {
        //Export Files for Category
        Route::get('/category/excel',[CategoryController::class,'exportcategoriesexcel'])->name('exportcategoriesexcel');
        Route::get('/category/csv',[CategoryController::class,'exportcategoriescsv'])->name('exportcategoriescsv');
        Route::get('/category/html',[CategoryController::class,'exportcategorieshtml'])->name('exportcategorieshtml');
        Route::get('/category/pdf',[CategoryController::class,'exportcategoriespdf'])->name('exportcategoriespdf');
        //Export Files for Brand
        Route::get('/brand/excel',[BrandController::class,'exportbrandexcel'])->name('exportbrandexcel');
        Route::get('/brand/csv',[BrandController::class,'exportbrandcsv'])->name('exportbrandcsv');
        Route::get('/brand/html',[BrandController::class,'exportbrandhtml'])->name('exportbrandhtml');
        Route::get('/brand/pdf',[BrandController::class,'exportbrandpdf'])->name('exportbrandpdf');
        //Export Files for Product
        Route::get('/product/excel',[ProductController::class,'exportproductexcel'])->name('exportproductexcel');
        Route::get('/product/csv',[ProductController::class,'exportproductcsv'])->name('exportproductcsv');
        Route::get('/product/html',[ProductController::class,'exportproducthtml'])->name('exportproducthtml');
        Route::get('/product/pdf',[ProductController::class,'exportproductpdf'])->name('exportproductpdf');
        //Export Files for Supplier
        Route::get('/supplier/excel',[SupplierController::class,'exportsupplierexcel'])->name('exportsupplierexcel');
        Route::get('/supplier/csv',[SupplierController::class,'exportsuppliercsv'])->name('exportsuppliercsv');
        Route::get('/supplier/html',[SupplierController::class,'exportsupplierhtml'])->name('exportsupplierhtml');
        Route::get('/supplier/pdf',[SupplierController::class,'exportsupplierpdf'])->name('exportsupplierpdf');
        //Export Files for Role
        Route::get('/role/excel',[RoleController::class,'exportroleexcel'])->name('exportroleexcel');
        Route::get('/role/csv',[RoleController::class,'exportrolecsv'])->name('exportrolecsv');
        Route::get('/role/html',[RoleController::class,'exportrolehtml'])->name('exportrolehtml');
        Route::get('/role/pdf',[RoleController::class,'exportrolepdf'])->name('exportrolepdf');
        //Export Files For Browser Type
        Route::get('/report/browser/excel/{startdate}/{enddate}',[ReportController::class,'exportbrowsertypeexcel'])->name('exportbrowsertypeexcel');
        //Export Files For User Type
        Route::get('/report/UserType/excel/{startdate}/{enddate}',[ReportController::class,'exportusertypeexcel'])->name('exportusertypeexcel');
        //Export Files For Sales Over Time
        Route::get('/report/SalesOvertime/excel',[ReportController::class,'exportsalesovertime'])->name('exportsalesovertime');

        //Export Files for Sales Product
        Route::get('/report/salesprod/pdf',[ReportController::class,'exportSalesProductPDF'])->name('exportSalesProductPDF');

        Route::get('/report/salesprod/excel/{sorting}/{startdate}/{enddate}',[ReportController::class,'exportSalesProductEXCEL'])->name('exportSalesProductEXCEL');



        Route::get('/report/salesprod/csv',[ReportController::class,'exportSalesProductCSV'])->name('exportSalesProductCSV');
        Route::get('/report/salesprod/html',[ReportController::class,'exportSalesProductHTML'])->name('exportSalesProductHTML');
        //Export Files for Sales Customer
        Route::get('/report/salescustomer/excel/{sorting}/{startdate}/{enddate}',[ReportController::class,'exportCustomerTotalSpent'])->name('exportCustomerTotalSpent');
        //Export Files for Sales Brand
        Route::get('/report/salesbrand/excel/{sorting}/{startdate}/{enddate}',[ReportController::class,'exportSalesBrandEXCEL'])->name('exportSalesBrandEXCEL');
        //Export Files for Sales Category
        Route::get('/report/salescategory/excel/{sorting}/{startdate}/{enddate}',[ReportController::class,'exportSalesCategoryEXCEL'])->name('exportSalesCategoryEXCEL');
        //Export Files For No of Brand Orders
        Route::get('/report/orderbrand/excel/{sorting}/{startdate}/{enddate}',[ReportController::class,'exportOrderBrandExcel'])->name('exportOrderBrandExcel');
        //Export Files For No of Category Orders
        Route::get('/report/ordercategory/excel/{sorting}/{startdate}/{enddate}',[ReportController::class,'exportOrderCategoryExcel'])->name('exportOrderCategoryExcel');
        //Export Files for Most Viewed Product
        Route::get('/report/MostVisitedPage/excel/{startdate}/{enddate}',[ReportController::class,'exportMostVisitedPageExcel'])->name('exportMostVisitedPageExcel');
        //Export Files for Gender
        Route::get('/report/gender/excel',[ReportController::class,'exportGenderExcel'])->name('exportGenderExcel');

        Route::middleware(['PreventBackHistory'])->group(function () {
            Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
            Route::resource('dashboard', DashboardController::class)->only(['index']);
            Route::resource('brand',  BrandController::class)->only(['index']);
            Route::resource('category',  CategoryController::class)->only('index');

            Route::resource('inventory',  InventoryController::class)->except(['edit','show','create']);

            Route::get('/receive/{id}', [InventoryTransferController::class, 'receive'])->name('inventory.receive');
            Route::resource('transfer', InventoryTransferController::class);

            Route::get('/product/archive', [ProductController::class,'ProductArchiveIndex'])->name('ProductArchiveIndex');
            Route::put('/product/archive/{id}', [ProductController::class, 'ProductArchiveRestore']);
            Route::delete('/product/archive/{id}', [ProductController::class, 'ProductArchiveDestroy']);
            Route::get('product/inventory_history/{id}',[ProductController::class, 'ProductInventoryHistory'])->name('ProductInventoryHistory');

            Route::resource('product',  ProductController::class);
            Route::resource('orders', OrderController::class)->only('index','show');
            Route::resource('chat', ChatController::class)->only('index');
            Route::resource('post', PostController::class)->only('index');
            Route::get('/supplier/archive', [SupplierController::class,'SupplierArchiveIndex'])->name('SupplierArchiveIndex');
            Route::resource('supplier', SupplierController::class);
            Route::get('/profile/changepassword', [ProfileController::class,'changepass'])->name('AdminChangePass');
            Route::post('/profile/changepassword', [ProfileController::class,'resetpass']);
            Route::resource('profile', ProfileController::class)->only('index');
            Route::resource('changepassword', ChangePasswordController::class)->only('index');





            Route::resource('discount', DiscountController::class);


            Route::get('/report/PaymentByType}',[ReportController::class,'PaymentTypeIndex'])->name('report.PaymentByType');

            Route::get('/report/UserType',[ReportController::class,'UserTypeIndex'])->name('report.UserType');

            Route::get('/report/SalesOvertime',[ReportController::class,'SalesOvertimeIndex'])->name('report.SalesOvertime');

            Route::get('/report/MostVisitedPage',[ReportController::class,'MostVisitedPageIndex'])->name('report.MostVisitedPageIndex');

            Route::get('/report/Cancellation',[ReportController::class,'CancellationIndex'])->name('report.Cancellation');

            Route::get('/report/Return',[ReportController::class,'ReturnIndex'])->name('report.Return');

            Route::get('/report/salesprod', [ReportController::class, 'salesProd'])->name('report.SalesProd');

            Route::get('/report/CustomersTotalSpent',[ReportController::class,'CustomersTotalSpent'])->name('report.CustomersTotalSpent');


            Route::get('/report/salesbrand', [ReportController::class, 'salesBrand'])->name('report.SalesBrand');
            Route::get('/report/orderbrand', [ReportController::class, 'BrandOrderIndex'])->name('report.OrderBrand');


            Route::get('/report/salescategory',[ReportController::class,'salesCategory'])->name('report.SalesCategory');
            Route::get('/report/ordercategory',[ReportController::class,'CategoryOrderIndex'])->name('report.OrderCategory');
            Route::get('/report/gender',[ReportController::class,'GenderIndex'])->name('report.Gender');


            Route::get('/report/browser',[ReportController::class,'BrowserIndex'])->name('report.browser');
            Route::resource('report', ReportController::class);

            Route::get('/customer/archive',[CustomerController::class,'CustomerArchiveIndex'])->name('CustomerArchiveIndex');
            Route::resource('customer', CustomerController::class)->only('index','show');

            Route::get('/user/archive',[UsersController::class,'UserArchiveIndex'])->name('UserArchiveIndex');
            Route::resource('user', UsersController::class);
            Route::post('role/{role}/permissions',[RoleController::class, 'givePermission'])->name('roles.permissions');
            Route::delete('role/{role}/permissions/{permission}',[RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
            Route::resource('role', RoleController::class);
            Route::resource('permission', PermissionController::class)->only('index');
        });
    });
});

?>
