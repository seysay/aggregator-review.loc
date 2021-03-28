<?php

namespace App\Controller;

use App\Core\AbstractController;

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
                $_POST['name_author_goods']
            );
            if ($result == true) {
                header('Location: /');
            } else {
                /**
                 * @var array. Data that is sent to the error view.
                 */
                $data['type'] = 'goods';
                $data['error'] = 'Incorrect data';
            }
        }
        $this->view->show('goods/form.html.twig', $data);
    }

    public function edit($uriSegment)
    {
        if (empty($_POST)) {
            $data = $this->goodsModel->getGoodsId($uriSegment);
            $this->view->show('goods/edit_form.html.twig', $data);
        } else {
            $result = $this->goodsModel->editGoods($uriSegment);
            if ($result == true) {
                header('Location: /');
            } else {
                /**
                 * @var array. Array of entered incorrect values
                 */
                $data = array_values($_POST);

                $data['type'] = 'goods';
                $data['error'] = 'Incorrect data';
                $this->view->show('goods/edit_form.html.twig', $data);
            }
        }
    }

    public function delete($uriSegment)
    {
        $result = $this->goodsModel->deleteGoods($uriSegment);
        if ($result == true) {
            $this->goodsModel->deleteGoods($uriSegment);
            header('Location: /');
        } else {
            /**
             * @var array. Data that is sent to the error view.
             */
            $data['type'] = 'goods';
            $data['error'] = 'Not found';
            $this->view->show('errorView.html.twig', $data);
        }
    }

    public function createReviews($uriSegment)
    {
        if (empty($_POST)) {
            $data = $this->goodsModel->getGoodsId($uriSegment);
            $this->view->show('goods/review.html.twig', $data);
        } else {
            $result = $this->goodsModel->newReview($uriSegment);
            if ($result == true) {
                header('Location: /');
            } else {
                /**
                 * @var array. Array of entered incorrect values
                 */
                $data = array_values($_POST);
                $data['type'] = 'goods';
                $data['error'] = 'Incorrect data';
                $this->view->show('goods/review.html.twig', $data);
            }
        }
    }

    public function test()
    {
        //        /**
//         * @var array. Data that is sent to the view
//         */
//        $data['type'] = 'goods';
//        $data['error'] = null;
//        $goodsId = $this->goodsModel->getGoodsId($uriSegment);
//
//        if (!empty($_POST)) {
//            /**
//             * @var integer. Assigned 1 if the query is successful
//             */
//            $result = $this->goodsModel->newReview(
//                $_POST['name_author'],
//                $_POST['rating'],
//                $_POST['comment'],
//                $_POST['good_id']
//            );
//            if ($result == true) {
//                header('Location: /');
//            } else {
//                /**
//                 * @var array. Data that is sent to the error view.
//                 */
//                $data['type'] = 'goods';
//                $data['error'] = 'Incorrect data';
//            }
//        }
//
//        $this->view->show('goods/review.html.twig', $goodsId);
    }
}
