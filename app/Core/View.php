<?php

namespace App\Core;

/**
 * Class View This class has method for rendering needed views
 * @package App\Core
 */
class View
{
    /**
     * @var \Twig\Environment
     */
    private $twig;

    /**
     * View constructor.
     * @param \Twig\Environment $twig
     */
    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }
    /**
     * This method renders a view
     * @param string $content Path to view
     * @param null $data Array of data
     */
    public function show($content, $data = null)
    {
        echo $this->twig->render($content, array('data' => $data));
    }
}