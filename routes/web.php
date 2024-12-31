<?php

use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\HomePage;
use App\Livewire\ProductsPage;
use Illuminate\Support\Facades\Route;

route::get("/", HomePage::class);
route::get("/categories", CategoriesPage::class);
route::get("/products", ProductsPage::class);
route::get("/cart", CartPage::class);
