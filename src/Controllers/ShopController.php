<?php


namespace Mubangizi\Controllers;


class ShopController extends Controller
{

    public function index($view, $request)
    {
        breadcrumbs($request, "All Products", array(
                crumb('Home'), crumb('Shop', 'shop'))
        );
        render($this->page, $view, $request);
    }

    public function cart($view, $request)
    {
        breadcrumbs($request, "Your Shopping cart", array(
                crumb('Home'), crumb('Shop', 'shop'))
        );
        render($this->page, $view, $request);
    }

    public function checkout($view, $request)
    {
        breadcrumbs($request, "Checkout", array(
                crumb('Home'),
                crumb('Shop', 'shop'),
                crumb('Cart', 'cart'))
        );
        render($this->page, $view, $request);
    }
}