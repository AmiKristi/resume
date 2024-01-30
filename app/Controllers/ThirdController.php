<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ThirdController extends BaseController
{
    public function secondes()
    {
        return view("secondes");
    }

    public function thirdes()
    {
        return view("Mika/test");
    }

    public function practice()
    {
        return view("Practice/FordaPractice");
    }

    public function home()
    {
        return view("github/home");
    }

    public function about()
    {
        return view("github/about");
    }

    public function education()
    {
        return view("github/education");
    }

    public function skills()
    {
        return view("github/skills");
    }

    public function interests()
    {
        return view("github/interests");
    }

    public function contact()
    {
        return view("github/contact");
    }

   
    
}
