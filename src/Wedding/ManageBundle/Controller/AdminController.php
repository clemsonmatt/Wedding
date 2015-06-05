<?php

namespace Wedding\ManageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Wedding\ManageBundle\Entity\Rsvp;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="admin_index")
     */
    public function indexAction()
    {
        $em         = $this->getDoctrine()->getManager();
        $rsvpRepo   = $em->getRepository('WeddingManageBundle:Rsvp');
        $rsvpResult = $rsvpRepo->findAll();

        /* count the total number of guests */
        $guestCounter = 0;
        $totalCounter = 0;
        $yesCounter   = 0;

        foreach ($rsvpResult as $rsvp) {
            if ($rsvp->getResponse() == 'yes') {
                $yesCounter++;
                $guestCounter += $rsvp->getNumber();
            }
            $totalCounter++;
        }

        return $this->render('WeddingManageBundle:Admin:index.html.twig', [
            'rsvpResult'   => $rsvpResult,
            'yesCounter'   => $yesCounter,
            'totalCounter' => $totalCounter,
            'guestCounter' => $guestCounter,
        ]);
    }

    /**
     * @Route("/rsvp/{rsvp}/edit", name="admin_rsvp_edit")
     */
    public function editAction(Rsvp $rsvp, Request $request)
    {
        $form = $this->createForm('rsvp', $rsvp);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            /* success message */
            $this->addFlash('success', 'RSVP saved.');

            return $this->redirectToRoute('admin_index');
        }

        return $this->render('WeddingManageBundle:Admin:rsvp.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/rsvp/{rsvp}/remove", name="admin_rsvp_remove")
     */
    public function removeAction(Rsvp $rsvp)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($rsvp);
        $em->flush();

        $this->addFlash('warning', 'RSVP removed.');

        return $this->redirectToRoute('admin_index');
    }
}
