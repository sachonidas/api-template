<?php

namespace App\Controller\Api;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;


class DefaultController extends AbstractFOSRestController
{
    /**
     * @Route("/default", name="default", methods={"GET"})
     * @OA\Response(
     *     response=200,
     *     description="Returns a defaults response!",
     * )
     */
    public function index(): JsonResponse
    {
        return  new JsonResponse(['default' => 'Works!!!']);
    }
}
