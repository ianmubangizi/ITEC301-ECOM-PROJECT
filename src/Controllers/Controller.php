<?php

namespace Mubangizi\Controllers;

use Mubangizi\Application;

class Controller
{
    protected $app;
    protected $page;
    protected $router;

    public function __construct()
    {
        $this->app = Application::instance();
        $this->page = $this->app->page;
        $this->router = $this->app->router;
    }

    public function index($view, $request)
    {
        switch ($view) {
            case 'about-us';
                breadcrumbs($request, "About Us", array(crumb('Home', 'index')));
                $this->page->title("Learn About us");
                break;
            case 'contact-us';
                breadcrumbs($request, "Contact Us", array(crumb('Home', 'index')));
                $this->page->title("How to Contact us");
                break;
            case 'products';
                breadcrumbs($request, "Products", array(crumb('Home', 'index')));
                $this->page->title("Our Beauty Products");
                break;
            case '404';
                $this->page->title("Page was not found");
                break;
            case '500':
                $this->page->title("Oops, Server Error");
                break;
            default:
                $this->page->title("Divine African Beauty");
                break;
        }
        if (isset($request['params']['alert'])) {
            switch ($request['params']['alert']) {
                case 'sign-in-success':
                    if (get_user()->role !== ANONYMOUS) {
                        alert(
                            'Login Success',
                            "Happy Shopping, " . get_user()->firstname,
                            'thumb-up',
                            'success'
                        );
                    }
                    break;
                case 'sign-out-success':
                    if (get_user()->role === ANONYMOUS) {
                        alert(
                            "Have a good",
                            'Sign out Success',
                            'thumb-up',
                            'success'
                        );
                    }
                    break;
                default:
                    break;
            }
        }
        render($this->page, $view, $request);
    }

    public function to($page, $query = '')
    {
        $this->router->to($page, $query);
    }

}
