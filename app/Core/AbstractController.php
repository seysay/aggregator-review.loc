<?php

namespace App\Core;

use App\Model\Goods;

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
     * @var View. received View object
     */
    protected $view;

    /**
     * Controller constructor. Assigns the received values to variables
     * @param AbstractModel $goodsModel
     * @param View $view
     */
    public function __construct(AbstractModel $goodsModel, View $view)
    {
        $this->view = $view;
        $this->goodsModel = $goodsModel;
    }
}
