<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Etudiant;
use App\Models\Etudiant_formation;


class FormationRepository implements FormationRepositoryInterface
{
    protected $model;

    public function __construct(Etudiant_formation $formation)
    {
        $this->model = $formation;
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
        $formation = $this->model->find($id);
        if ($formation) {
            $formation->update($data);
            return $formation;
        }
        return null;
    }

    public function delete($id)
    {
        $formation = $this->model->find($id);
        if ($formation) {
            $formation->delete();
            return true;
        }
        return false;
    }
}