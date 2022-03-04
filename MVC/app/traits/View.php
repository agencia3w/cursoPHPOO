<?php

namespace app\traits;

use core\Twig;

trait View
{

    private function Twig()
    {
        $twig = new Twig;

        $loadTwig = $twig->loadTwig();

        $twig->loadExtensions();
        $twig->loadFunctions();

        return $loadTwig;
    }

    public function view($data, $view)
    {
        $template = $this->twig()->load(str_replace('.', '/', $view) . '.html');

        return $template->display($data);
    }
}
