<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cardrow extends Component
{
    /**
     * a set of 4 products to display
     * @var Product[]
     */
    public $products;

    /**
     * Create a new component instance.
     *
     * @param Product[] $products
     * @return void
     */
    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cardrow');
    }
}
