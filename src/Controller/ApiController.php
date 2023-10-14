<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/api', name: 'api_')]
class ApiController extends AbstractController
{

    private $manager;
    private $serializer;
    private $hash;

    public function __construct(
        EntityManagerInterface $manager,
        SerializerInterface $serializer,
        UserPasswordHasherInterface $hash)
    {
     
        $this->manager = $manager;
        $this->serializer = $serializer;
        $this->hash = $hash;

    }


    #[Route('/registration', name: 'app_api', methods: ['POST'])]
    public function registration(Request $request): JsonResponse
    {
        try {
            $data = $request->getContent();
            $user = $this->serializer->deserialize($data, User::class, 'json');
            $user->setPassword($this->hash->hashPassword($user, $user->getPassword()));
            $this->manager->persist($user);
            $this->manager->flush();
            return new JsonResponse("Registered Successfully", Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return new JsonResponse($th->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }
}
