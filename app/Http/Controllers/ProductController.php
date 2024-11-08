<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Metoda wyświetlająca wszystkie kategorie
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Metoda wyświetlająca produkty dla wybranej kategorii
    public function showCategoryProducts($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('categories.show', compact('category'));
    }
}
