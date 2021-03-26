<?php

namespace App\Controller;

use App\Core\AbstractController;
use App\Model\Goods;
use App\Form\StudentsForm;

/**
 * Class GoodsController
 * @package App\Controller
 */
class GoodsController extends AbstractController
{
    public function index()
    {
        $data = $this->goodsModel->getGoods();
        $this->view->show('index.html.twig', $data);
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
