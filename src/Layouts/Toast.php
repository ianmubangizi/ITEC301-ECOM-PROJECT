<?php


namespace Mubangizi\Layouts;


class Toast
{
    public $show, $title, $body, $status, $icon, $position, $params;

    public function __construct($title, $body, $show = true, $status = false, $icon = false, $position = false, $params = false)
    {
        $this->show = $show;
        $this->title = $title;
        $this->body = $body;
        $this->status = $status;
        $this->icon = $icon;
        $this->position = $position;
        $this->params = $params;
    }

}