<?php

namespace App\Http\Controllers\Backend\Product;

use App\Exports\BrandExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;

class BrandController extends Controller
{
    //Show Brand Page
    public function index()
    {
        abort_if(Gate::denies('brand_access'), 403);

        return view('admin.page.product.brand');
    }

    //Export Brand to Excel
    public function exportbrandexcel()
    {
        abort_if(Gate::denies('brand_export'), 403);

        return Excel::download(new BrandExport, 'brands.xlsx');
    }
}
