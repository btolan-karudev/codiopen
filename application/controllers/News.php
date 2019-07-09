<?php

class News extends CI_Controller
{
    public function index()
    {
        //	Première requête
        $this->benchmark->mark('requete1_start');
        $query = $this->db->query('SELECT `id`, `username`, `user_rank` FROM `users`')->result();
        $this->benchmark->mark('requete1_end');

        //	Deuxième requête
        $this->benchmark->mark('requete2_start');
        $query = $this->db->select('id, username, user_rank')->from('users')->get()->result();
        $this->benchmark->mark('requete2_end');

        $this->output->enable_profiler(true);
    }
//    public function index()
//    {
//        $this->accueil();
//    }

    public function accueil()
    {
        $this->output->enable_profiler(true);
        $this->load->model('news_model', 'newsManager');

//        editer_news($id, $titre = null, $contenu = null)
        $resultat = $this->newsManager->liste_news();
//        var_dump($resultat);


//        $this->load->view('news/vue', $resultat, false);
    }
}