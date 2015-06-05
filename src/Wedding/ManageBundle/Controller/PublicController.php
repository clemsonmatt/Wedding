<?php

namespace Wedding\ManageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Wedding\ManageBundle\Entity\Rsvp;

/**
 * @Route("/")
 */
class PublicController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('WeddingManageBundle:Public:index.html.twig');
    }

    /**
     * @Route("/rsvp", name="rsvp")
     */
    public function rsvpAction(Request $request)
    {
        $rsvp = new Rsvp();
        $form = $this->createForm('rsvp', $rsvp);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $rsvp = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($rsvp);
            $em->flush();

            /* success message */
            $this->addFlash('success', 'Your rsvp was successfully submitted');

            return $this->redirectToRoute('about');
        }

        return $this->render('WeddingManageBundle:Public:rsvp.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('WeddingManageBundle:Public:about.html.twig');
    }

    /**
     * @Route("/directions", name="directions")
     */
    public function directionsAction()
    {
        return $this->render('WeddingManageBundle:Public:directions.html.twig');
    }

    /**
     * @Route("/honeymoon", name="honeymoon")
     */
    public function honeymoonAction()
    {
        return $this->render('WeddingManageBundle:Public:honeymoon.html.twig');
    }

    /**
     * @Route("/photos", name="photos")
     */
    public function photosAction()
    {
        return $this->render('WeddingManageBundle:Public:photos.html.twig');
    }

    /**
     * @Route("/registries", name="registries")
     */
    public function registriesAction()
    {
        return $this->render('WeddingManageBundle:Public:registries.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('WeddingManageBundle:Public:contact.html.twig');
    }
}
