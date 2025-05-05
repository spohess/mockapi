<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->title = 'Home';
        parent::__construct();
    }

    public function __invoke(): View
    {
        return view('panel.home');
    }
}
