<?php

use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use Filament\Pages\Auth\PasswordReset\ResetPassword;
use Illuminate\Support\Facades\Route;

route::get("/", HomePage::class);
route::get("/categories", CategoriesPage::class);
route::get("/products", ProductsPage::class);
route::get("/cart", CartPage::class);
route::get('/products/{product}', ProductDetailPage::class);

route::get('/checkout', CheckoutPage::class);
route::get('/my-orders', MyOrdersPage::class);
route::get('/my-orders/{order}', MyOrderDetailPage::class);

route::get('/login', LoginPage::class);
route::get('/register', RegisterPage::class);
route::get('/forgot', ForgotPasswordPage::class);
route::get('/reset', ResetPassword::class);

route::get('/success', SuccessPage::class);
route::get('/cancel', CancelPage::class);

