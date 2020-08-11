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

    public function order($view, $request)
    {
        $view = str_replace('order-', '', $view);
        breadcrumbs($request, 'Order ' . ucfirst($view), array(
                crumb('Home'),
                crumb('Shop', 'shop'))
        );
        render($this->page, "Order\\$view", $request);
    }
}