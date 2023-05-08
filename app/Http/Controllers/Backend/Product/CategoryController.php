<?php

namespace App\Http\Controllers\Backend\Product;

use App\Exports\CategoryExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    //Show Category Page
    public function index()
    {
        abort_if(Gate::denies('category_access'), 403);

        return view('admin.page.product.category');
    }

    //Export Category to Excel
    public function exportcategoriesexcel()
    {
        abort_if(Gate::denies('category_export'), 403);

        return Excel::download(new CategoryExport, 'categories.xlsx');
    }


}
