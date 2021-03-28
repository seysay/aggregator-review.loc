<?php

namespace App\Core;

use Twig\Environment;

/**
 * Class View This class has method for rendering needed views
 * @package App\Core
 */
class View
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * View constructor.
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * This method renders a view
     * @param string $content Path to view
     * @param null $data Array of data
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function show($content, $data = null)
    {
        echo $this->twig->render($content, ['data' => $data]);
    }
}

