<?php

namespace MBLBundle\Controller;

use MBLBundle\Entity\ProfilRecherche;
use MBLBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MBL/Users/index.html.twig');

    }

    public function homepageProfilAction()
    {
        return $this->render('@MBL/Users/homepageProfil.html.twig');

    }
    public function editProfilAction()
    {
        return $this->render('@MBL/Users/editProfil.html.twig');

    }
    public function showProfilAction()
    {
        return $this->render('@MBL/Users/showProfil.html.twig');

    }


    public function addProfilAction(Request $request)
    {
        $profil = new Profil();
        $form = $this->createForm('MBLBundle\Form\ProfilType', $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $getDoctrine()->$getManager();
            $em->persist($profil);
            $em->flush();

            return $this->redirectToRoute('/');
        }
        return $this->render('MBLBundle:Users:addProfil.html.twig',
            array('form' => $form->createView(),
            ));
    }

    public function createProjectAction(Request $request)
    {
        $projet = new Projet();
        $form = $this->createForm('MBLBundle\Form\ProjetType', $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //        $projet_profil->addProjet($projet);
            //        $projet->addProfilsrecherch($projet_profil);
            $projet->setDateCreation(new \DateTime());

//            $projet->setSecteur($projet->);
//
//            $projet->setTypeDeProjet($projet);

            $em->persist($projet);
            $em->flush();
            $id = $projet->getId();
            return $this->redirectToRoute('createProfilRechercheProjet', array(
                'id' =>$id
            ));
        }


        return $this->render('@MBL/Users/createProjet.html.twig',
            array(
                'form' => $form->createView(),
                


            ));
    }
    public function createProfilRechercheProjectAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('MBLBundle:Projet')->findOneById($id);
        $projet_profil = new ProfilRecherche();
        $form_pro = $this->createForm('MBLBundle\Form\ProfilRechercheType', $projet_profil);
        $form_pro->handleRequest($request);

        if ($form_pro->isSubmitted() && $form_pro->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $projet->addProfilsrecherch($projet_profil);
            $projet_profil->addProjet($projet);
            $em->persist($projet_profil);

            $em->flush();

            return $this->redirectToRoute('homepageProfil');
        }

        return $this->render('@MBL/Users/createProjetAddProfil.html.twig',
            array('form_pro' => $form_pro->createView(),
                'projet' => $projet,

            ));
    }
}
