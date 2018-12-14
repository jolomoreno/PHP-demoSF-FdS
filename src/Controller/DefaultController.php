<?php
/**
 * PHP version 7.2
 * demoSF_FdS - DefaultController.php
 *
 * @author   Javier Gil <franciscojavier.gil@upm.es>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es ETS de Ingeniería de Sistemas Informáticos
 * Date: 14/12/2018
 * Time: 18:03
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 *
 * @package App\Controller
 */
class DefaultController
{

    /**
     * index
     * @return Response
     */
    public function index(): Response
    {
        return new Response('Buenas tardes querido MiW!!!');
    }

    public function despidete(): Response
    {
        return new Response('Hasta luego!!!');
    }
}
