<?php

namespace App\Controller;

use App\Core\AbstractController;

/**
 * Class ReviewsController
 * @package App\Controller
 */
class ReviewsController extends AbstractController
{
    /**
     * @param $id
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function show($id)
    {
        $data = $this->reviewsModel->getReviews($id);

        $this->view->show('reviews/show.html.twig', $data);
        $this->showGoods($id);
    }

    /**
     * @param $id
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function showGoods($id)
    {
        $data = $this->goodsModel->getRating($id);
        $this->view->show('reviews/show_detal.html.twig', $data);
    }
}
