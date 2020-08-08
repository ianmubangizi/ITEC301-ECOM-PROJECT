<?php


namespace Mubangizi\Controllers;


class UserController extends Controller
{

    public function index($view, $request)
    {
        if (get_user()->role !== ANONYMOUS) {
            if (get_user()->role === CUSTOMER) {
                breadcrumbs($request, "User Profile", array(
                        crumb('Home', 'index'),
                        crumb('Account', 'profile'))
                );
                if ($request['url'] == url_for('dashboard')) {
                    $this->to('404');
                }
            } else {
                if ($request['url'] == url_for('profile')) {
                    $this->to('dashboard');
                }
            }
            render($this->page, $view, $request);
        } else {
            $this->to('sign-in');
        }
    }
}