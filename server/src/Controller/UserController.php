<?php

namespace App\Controller;

header("Access-Control-Allow-Origin: *");
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Finder\Finder;
/**
 * Class  UserController
 * @package App\Controller
 *
 * @Route(path="/user")
 */
class UserController
{
    /**
     * @Route("/", name="get_users", methods={"GET"})
     */
    public function getUsers(): JsonResponse
    {
        $data = [];
        $file = file_get_contents('users.json', true);
        $json = json_decode($file, true);

        return new JsonResponse( $json, Response::HTTP_OK);
    }

    /**
     * @Route("/update/{id}", name="update_user", methods={"POST","PUT"})
     */
    public function updateUser(Request $request): JsonResponse
    {
    
        return new JsonResponse(['status' => 'customer updated!']);
    }

    /**
     * @Route("/delete/{id}", name="delete_User", methods={"DELETE"})
     */
    public function deleteUser($id): JsonResponse
    {
        return new JsonResponse(['status' => 'customer deleted']);
    }
}