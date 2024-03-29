<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DramaModel;
use CodeIgniter\HTTP\ResponseInterface;

class DramaController extends BaseController
{
    public function index()
    {

        $drama_model = new DramaModel();
        $dramas = $drama_model->findAll();

        $array = [
            "dramas" => $dramas,
        ];

        return view('kdrama/index', $array);
    }

    public function create()
    {
        return view('kdrama/create');
    }

    public function edit($id)
{
    $drama_model = new DramaModel();
    $drama = $drama_model->where('id', $id)->first();

    return view('kdrama/edit', [
        "user_id" => $id,
        "qwerty" => $drama,
    ]);
}

    public function store()
    {
        $drama_title = esc($this->request->getPost('drama-title'));
        $drama_genre = esc($this->request->getPost('drama-genre'));
        $drama_description = esc($this->request->getPost('drama-description'));

        $drama_data = [
            'drama_title' => $drama_title,
            'drama_genre' => $drama_genre,
            'drama_description' => $drama_description,
        ];

        $drama_model = new DramaModel();
        $drama_model->insert($drama_data);

        return redirect()->to('/kdrama');
    }

    public function update($id)
    {
        $drama_title = esc($this->request->getPost('drama-title'));
        $drama_genre = esc($this->request->getPost('drama-genre'));
        $drama_description = esc($this->request->getPost('drama-description'));

        $drama_data = [
            'drama_title' => $drama_title,
            'drama_genre' => $drama_genre,
            'drama_description' => $drama_description,
        ];

        $drama_model = new DramaModel();

        $dramas = $drama_model->where('id', $id)
            ->set($drama_data)
            ->update();

        return redirect()->to('/kdrama');
    }

    public function delete($id)
    {
        $drama_model = new DramaModel();
        $dramas = $drama_model->find($id);

        if (!$dramas) {
        return redirect()->to('/kdrama');
    }

        $drama_model->delete($id, 'drama_id');

        return redirect()->to('/kdrama');
    }
}