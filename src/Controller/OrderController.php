<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends AbstractApiController
{
    public function indexAction(Request $request): Response
    {
        $orders = $this->getDoctrine()->getRepository(Order::class)->findAll();

        return $this->json($orders);
    }

    public function createAction(Request $request): Response
    {
        return new Response();
    }
}
