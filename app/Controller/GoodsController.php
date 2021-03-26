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
        /**
         * @var array. Data that is sent to the view
         */
        $data['type'] = 'goods';
        $data['error'] = null;

        if (!empty($_POST)) {
            /**
             * @var integer. Assigned 1 if the query is successful
             */
            $result = $this->goodsModel->createGoods(
                $_POST['name'],
                $_POST['little_img'],
                $_POST['price'],
                $_POST['created'],
                $_POST['name_author_goods'],
                $_POST['count_reviews']
            );

            if ($result == true) {
                header('Location: /create');
            } else {
                /**
                 * @var array. Data that is sent to the error view.
                 */
                $data['type'] = 'goods';
                $data['error'] = 'Incorrect data';
            }
            var_dump($result);
        }
        $this->view->show('goods/form.html.twig', $data);
    }

//    public function create()
//    {
//        $form = new StudentsForm();
//
//        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//            if ($form->validate($_POST)) {
//                $student = new Goods($_POST);
//                $student->save();
//                header("Location: /");
//            }
//        }
//        require_once __DIR__ . '/../Views/create.html';
//    }

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
