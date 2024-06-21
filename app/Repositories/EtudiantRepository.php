<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Etudiant;


class EtudiantRepository implements EtudiantRepositoryInterface
{
    protected $model;

    public function __construct(Etudiant $etudiant)
    {
        $this->model = $etudiant;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $etudiant = $this->model->find($id);
        if ($etudiant) {
            $etudiant->update($data);
            return $etudiant;
        }
        return null;
    }

    public function delete($id)
    {
        $etudiant = $this->model->find($id);
        if ($etudiant) {
            $etudiant->delete();
            return true;
        }
        return false;
    }
}