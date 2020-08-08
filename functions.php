<?php

use Mubangizi\Route;
use Mubangizi\Views\Page;
use Mubangizi\Models\User;
use Mubangizi\Application;
use Mubangizi\Models\Entity;

function get_user(): ?User
{
    if (isset($_SESSION['user'])) {
        return $_SESSION['user'];
    }
    return new User();
}

function is_auth($role = MANAGER)
{
    if (get_user()->role !== ANONYMOUS) {
        return get_user()->role === $role;
    }
    return false;
}

function site()
{
    return Application::instance()->site;
}

function get_page()
{
    return Application::instance()->page;
}

function get_alert()
{
    if (isset(get_page()->data['alert'])) {
        return get_page()->data['alert'];
    }
    return null;
}

function array_has(&$array, ...$keys)
{
    $index = sizeof($keys) - 1;
    $key = $keys[$index];
    unset($keys[$key]);
    return $index >= 0
        ? isset($array[$key])
        : array_has($array, $keys);
}

function url_for($name)
{
    return strpos($name, '@') === 0
        ? Route::$urls['POST'][$name]
        : Route::$urls['GET'][$name];
}

function get_title()
{
    if (get_page()->title !== '')
        return site() . " | " . get_page()->title;
    return site();
}

function get_cookie($cookie)
{
    return isset($_COOKIE[$cookie]) ? $_COOKIE[$cookie] : null;
}

function clear_session()
{
    session_unset();
    session_destroy();
}

function alert(&$request, $status, $text, $title = null, $icon = null)
{
    $request['alert'] = array(
        'status' => $status,
        'text' => $text,
        'title' => $title,
        'icon' => $icon,
    );
}

function update_string($values, $length, $string = "")
{
    foreach ($values as $index => $value) {
        $string = $length-- > 1
            ? $string . "$index = $value,"
            : $string . "$index = $value";
    }
    return $string;
}

function insert_string(array $values, $length, $start = "(", $end = ")", $div = ",")
{
    $array = array(
        'key' => $start,
        'value' => $start
    );
    foreach ($values as $index => $value) {
        $array['key'] = make_string($array, $length, "`$index`", 'key', $div, $end);
        $array['value'] = make_string($array, $length, $value, 'value', $div, $end);
        $length--;
    }
    return $array;
}

function make_string(array $array, $length, $string, $key, $div, $end)
{
    return $length > 1
        ? $array[$key] . $string . $div
        : $array[$key] . $string . $end;
}

function trim_string($input, $length, $ellipses = true, $strip_html = true)
{
    if ($strip_html) {
        $input = strip_tags($input);
    }

    if (strlen($input) <= $length) {
        return $input;
    }

    $last_space = strrpos(substr($input, 0, $length), ' ');
    if ($last_space !== false) {
        $trimmed_text = substr($input, 0, $last_space);
    } else {
        $trimmed_text = substr($input, 0, $length);
    }
    if ($ellipses) {
        $trimmed_text .= '...';
    }

    return $trimmed_text;
}

function path_for($dir)
{
    return Application::$paths[$dir];
}

function view($view, $path = false)
{
    return path_for($path ?: 'pages') . "$view.php";
}

function layouts($file, $path = "")
{
    switch ($path) {
        case "forms":
            $layout = path_for('forms') . $file;
            break;
        case "partials":
            $layout = path_for('partials') . $file;
            break;
        case "includes":
            $layout = path_for('includes') . $file;
            break;
        default:
            $layout = path_for('layouts') . $file;
            break;
    }
    return "$layout.php";
}

function render(Page $page, $view = null, $data = null, $title = null)
{
    if ($data != null) $page->data = $data;
    if ($view != null) $page->view = $view;
    if ($title != null) $page->title = $title;
    $page->render($page);
}

function static_file($path, $name, $root = '/public')
{
    return "$root/$path/$name";
}

function crumb($title, $url = 'index', $root = false)
{
    return array(
        'root' => $url === 'index' ?: $root,
        'title' => $title,
        'url' => url_for($url)
    );
}

function breadcrumbs(&$request, $name, $array)
{
    $request['breadcrumbs'][$name] = $array;
}


function form_data(&$request, $form, $data)
{
    $request['form-data'][$form] = $data;
}

function get_form_data()
{
    if (isset(get_page()->data['form-data'])) {
        return get_page()->data['form-data'];
    };
    return null;
}

function set_page_tab($path, $default = '')
{
    return isset($_REQUEST['tab']) && file_exists(view("$path\\" . $_REQUEST['tab']))
        ? $_REQUEST['tab'] : $default;
}

function is_active_tab($name)
{
    if (isset($_REQUEST['tab'])) {
        return $_REQUEST['tab'] === $name;
    }
    return false;
}


function active_tab($name, $tab = false): string
{
    if (is_active_tab($name)) {
        return ' active';
    } elseif ($tab !== false && $tab === $name) {
        return ' active';
    }
    return ' ';
}

function get_categories()
{
    return Entity::get_all_from('Category');
}

