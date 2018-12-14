<?php
/**
 * PHP version 7.2
 * demoSF_FdS - PersonaController.php
 *
 * @author   Javier Gil <franciscojavier.gil@upm.es>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es ETS de Ingeniería de Sistemas Informáticos
 * Date: 14/12/2018
 * Time: 20:53
 */

namespace App\Controller;

use App\Entity\Persona;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PersonaController
 *
 * @package App\Controller
 *
 * @Route(path="/persona")
 */
class PersonaController extends AbstractController
{

    /**
     * @Route(path="", name="persona_index")
     * @return Response
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Persona[] $personas */
        $personas = $em->getRepository(Persona::class)->findAll();

        return $this->render(
            'Persona/index.html.twig',
            [ 'personas' => $personas ]
        );
    }
}
