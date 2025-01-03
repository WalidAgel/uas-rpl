<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Cart - Infinity Shop')]

class CartPage extends Component
{
    public $cart_items = [];
    public $grand_total;

    public function mount()
    {
        $this->cart_items = CartManagement::getCartItemsFormCookies();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function removeItems($product_id)
    {
        $this->cart_items = CartManagement::removeCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->dispatch(
            'update-cart-count',
            ['total_count' => count($this->cart_items)]
        )->to(Navbar::class);
    }

    public function increaseQty($product_id){
        $this->cart_items = cartManagement::incrementQuantityToCartItem($product_id);
        $this->grand_total = cartManagement::calculateGrandTotal($this->cart_items);
    }

    public function decreaseQty($product_id){
        $this->cart_items = cartManagement::decrementQuantityToCartItem($product_id);
        $this->grand_total = cartManagement::calculateGrandTotal($this->cart_items);
    }
    public function render()
    {
        return view('livewire.cart-page');
    }
}
