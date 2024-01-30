<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DramaModel;

class DramaController extends BaseController
{
    public function index()
    {
        return view('kdrama/index');
    }

    public function create()
    {
        return view('kdrama/create');
    }

    public function edit($id)
    {
        return view('kdrama/edit');
    }

    public function store()
    {
        $drama_title = esc($this->request->getPost('drama_title'));
        $drama_genre = esc($this->request->getPost('drama_genre'));
        $drama_description = esc($this->request->getPost('drama_description'));

        $drama_data = [
            'drama_title' => $drama_title,
            'drama_genre' => $drama_genre,
            'drama_description' => $drama_description,
        ];
        
        $drama_model = new DramaModel();
        $drama_model->insert($drama_data);

        return redirect()->back();

    }

    public function update($id)
    {
        
    }

}