<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function number($max)
    {
        $number = random_int(0, $max);

        return new Response(
            'Lucky number: ' . $number . ''
        );
    }


    /**
     * @Route("/lucky/{string}")
     */
    public function name($string)
    {
        return $this->render("lucky.html.twig", ['string' => $string]);
    }
}