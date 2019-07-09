<?php

class News extends CI_Controller
{
    public function index()
    {
        $this->accueil();
    }

    public function accueil()
    {
        $this->load->model('news_model', 'newsManager');

//        editer_news($id, $titre = null, $contenu = null)
        $resultat = $this->newsManager->count(array('auteur' => 'Bob'));
        var_dump($resultat);


//        $this->load->view('news/vue', $resultat, false);
    }
}