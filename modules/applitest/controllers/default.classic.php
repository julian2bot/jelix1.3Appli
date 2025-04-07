<?php
/**
* @package   applitest
* @subpackage applitest
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

// class defaultCtrl extends jController {
//     /**
//     *
//     */
//     function index() {
//         $rep = $this->getResponse('html');

//         // this is a call for the 'welcome' zone after creating a new application
//         // remove this line !
//         // $rep->body->assignZone('MAIN', 'default~home');
//         // $rep->body->assignZone('MAIN', 'jelix~check_install');
//         // $rep->body->assign('MAIN',  '<h1>Bienvenue dans mon application Jelix</h1><p>Ceci est la page d’accueil.</p>');
//         // $rep->fetch('hello');
//         $rep = $this->getResponse('html');
//         $rep->fetch('hello');

//         return $rep;
//     }
// }

class defaultCtrl extends jController {
    function index() {
        $rep = $this->getResponse('html');

        // Création d'un moteur de template
        $tpl = new jTpl();

        // Tu peux assigner des variables si besoin :
        $tpl->assign('nom', 'Marques');

        // Tu récupères le rendu HTML du template hello.tpl
        $rep->body->assign('MAIN', $tpl->fetch('applitest~hello'));

        return $rep;
    }


    
    function contact() {
        $rep = $this->getResponse('html');
        $tpl = new jTpl();
        // $tpl->assign('content', 'Vous pouvez nous contacter à contact@exemple.com');
        // $rep->body->assign('MAIN', $tpl->fetch('contact.tpl'));
        
        $tpl->assign('title', 'Page de contact');
        $tpl->assign('content', 'Vous pouvez nous contacter à contact@exemple.com');
        $rep->body->assign('MAIN', $tpl->fetch('applitest~contact'));

        return $rep;
        
        return $rep;
    }
}


// class defaultCtrl extends jController {

//     function index() {
//         $rep = $this->getResponse('html');
//         $tpl = new jTpl();
//         $tpl->assign('title', 'Page d\'accueil');
//         $tpl->assign('content', 'Bienvenue sur la page d\'accueil !');
//         $rep->body->assign('MAIN', $tpl->fetch('home.tpl'));
//         return $rep;
//     }

//     function contact() {
//         $rep = $this->getResponse('html');
//         $tpl = new jTpl();
//         $tpl->assign('title', 'Page de contact');
//         $tpl->assign('content', 'Vous pouvez nous contacter à contact@exemple.com');
//         $rep->body->assign('MAIN', $tpl->fetch('contact.tpl'));
//         return $rep;
//     }
// }
