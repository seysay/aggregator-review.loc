<?php

namespace App\Controller;

use App\Core\AbstractController;
use App\Model\Goods;
use App\Form\StudentsForm;

class GoodsController extends AbstractController
{
    public function index()
    {
        $student = new Goods();
        $students = $student->getAll();
        $data = $this->studentsModel->getStudents();
        $this->view->show('index.html.twig', $student);


//        require_once __DIR__ .'/../Views/index.html.twig';
    }

    public function create()
    {
        $form = new StudentsForm();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($form->validate($_POST)) {
                $student = new Goods($_POST);
                $student->save();
                header("Location: /");
            }
        }
        require_once __DIR__ . '/../Views/create.html';
    }

    public function edit()
    {
        $form = new StudentsForm();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($form->validate($_POST)){
                $student = new Goods($_POST);
                $student->save();

                header("Location: /");
            }
        }
        $student = new Goods();
        $student->load($_GET['id']);


        require_once __DIR__ . '/../Views/edit.html';
    }

    public function delete()
    {
        $student = new Goods();
        $student->load($_GET['id']);
        $student->delete();
        header("Location: /");
    }
}
