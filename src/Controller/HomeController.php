<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{
	/**
	 * @Route("/", name="home")
	 * @return Response
	 *
	 */
	public function index(): Response
	{
		return $this->render('accueil.html.twig',[
			'status' => 'light',
			'niveau' => 'PAUSE',
			'score' => 0,
			'question'=>['question'=>['question'=>"",'answer'=>""]]
		]);
	}
}
?>
