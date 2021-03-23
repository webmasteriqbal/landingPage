<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;

class LandingPageController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Coming Soon');
        return \view('welcome');
    }
}
