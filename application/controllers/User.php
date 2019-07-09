<?php
class User extends CI_Controller
{
    public function index() {
        $this->accueil();
    }

    public function accueil()
    {
        $this->load->model('user_model', 'userManager');

        $options_echappees = array();
        $options_echappees['pseudo'] = 'Arthur';
        $options_echappees['mot_de_passe'] = 'bonjour';

        $options_non_echappees = array();
        $options_non_echappees['date_inscription'] = 'NOW()';

        //	Renvoie false car les paramètres sont vides
        $resultat = $this->userManager->create();

        //	Renvoie true sans sauvegarder la date
        $resultat = $this->userManager->create($options_echappees);

        //	Renvoie true en sauvegardant la date comme une fonction SQL
        $resultat = $this->userManager->create($options_echappees, $options_non_echappees);
    }


}