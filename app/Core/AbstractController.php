<?php

namespace App\Core;

use App\Model\Goods;
use App\Model\Reviews;

/**
 * Class AbstractController. Contains __construct for controllers
 * @package App\Core
 */
abstract class AbstractController
{
    /**
     * @var Goods. received Model object
     */
    protected $goodsModel;

    /**
     * @var Reviews. received Model object
     */
    protected $reviewsModel;
    /**
     * @var View. received View object
     */
    protected $view;

    /**
     * Controller constructor. Assigns the received values to variables
     * @param AbstractModel $goodsModel
     * @param AbstractModel $reviewsModel
     * @param View $view
     */
    public function __construct(AbstractModel $goodsModel,AbstractModel $reviewsModel, View $view)
    {
        $this->view = $view;
        $this->goodsModel = $goodsModel;
        $this->reviewsModel = $reviewsModel;
    }
}
