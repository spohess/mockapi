<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

abstract class Controller
{
    protected string $title = 'Título Padrão';

    public function __construct()
    {
        View::share('title', $this->title);
    }
}
