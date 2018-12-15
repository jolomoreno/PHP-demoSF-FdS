<?php
/**
 * PHP version 7.2
 * demoSF_FdS - ApiPersonaController.php
 *
 * @author   Javier Gil <franciscojavier.gil@upm.es>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es ETS de Ingeniería de Sistemas Informáticos
 * Date: 15/12/2018
 * Time: 10:37
 */

namespace App\Controller;

use App\Entity\Persona;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiPersonaController
 *
 * @package App\Controller
 *
 * @Route(path="/api/v1/persona", name="api_persona_")
 */
class ApiPersonaController extends AbstractController
{

    /**
     * @Route(path="", name="getc", methods={ Request::METHOD_GET })
     * @return JsonResponse
     */
    public function getcPersona(): JsonResponse
    {
        /** @var Persona[] $personas */
        $personas = $this->getDoctrine()
            ->getRepository(Persona::class)
            ->findAll();
        return (null === $personas)
            ? $this->error(Response::HTTP_NOT_FOUND, 'NOT FOUND')
            : new JsonResponse(
                [ 'personas' => $personas ]
            );
    }

    /**
     * @Route(path="/{dni}", name="get", methods={ Request::METHOD_GET })
     * @param Persona|null $persona
     * @return JsonResponse
     */
    public function getPersona(?Persona $persona): JsonResponse
    {
//        /** @var Persona $persona */
//        $persona = $this->getDoctrine()
//            ->getRepository(Persona::class)
//            ->find($dni);
        return (null === $persona)
            ? $this->error(Response::HTTP_NOT_FOUND, 'NOT FOUND')
            : new JsonResponse(
                $persona
            );
    }

    /**
     * @param int $statusCode
     * @param string $message
     *
     * @return JsonResponse
     */
    private function error(int $statusCode, string $message): JsonResponse
    {
        return new JsonResponse(
            [
                'code' => $statusCode,
                'message' => $message
            ],
            $statusCode
        );
    }
}
