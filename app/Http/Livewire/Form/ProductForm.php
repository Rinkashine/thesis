<?php

namespace App\Http\Livewire\Form;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;

class ProductForm extends Component
{
    public $brand;

    public $category;

    public $name;

    public $stock;

    public $cprice;

    public $sprice;

    public $weight;

    public $sku;

    public $status;

    public $description;

    public $listofcategory;

    public $listofbrand;

    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();

        return view('livewire.form.product-form', [

            'categories' => $categories, 'brands' => $brands,
        ]);
    }

    public function mount()
    {
        $categories = Category::orderBy('name', 'desc')->get()->first();
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'cprice' => 'required',
            'sprice' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ]);
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'cprice' => 'required',
            'sprice' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ];
    }

    public function StoreProductData()
    {
        $this->validate();
    }
}
