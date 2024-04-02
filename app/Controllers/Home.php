<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function __construct()
    {
        $this->config = config('Theme');
        $this->data['config'] = $this->config;
    }
    public function index(): string
    {
        return view('Landing\Page\landing', $this->data);
    }
}
