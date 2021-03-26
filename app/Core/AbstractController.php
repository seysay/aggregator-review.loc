<?php

namespace App\Core;

/**
 * Class AbstractController. Contains __construct for controllers
 * @package App\Core
 */
abstract class AbstractController
{
//    /**
//     * @var Model. received Model object
//     */
//    protected $studentsModel;
    /**
     * @var View. received View object
     */
    protected $view;
//
//    protected $booksModel;

    /**
     * Controller constructor. Assigns the received values to variables
     * @param View $view
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }
}