<h1>
    Test
</h1>

<p>
    <a href="<?php echo css_url('stylo'); ?>">accueil</a>
    <br />

    <a href="<?php echo site_url('test'); ?>">accueil</a> du test
    <br />

    <a href="<?php echo site_url('test/secret'); ?>">page secrète</a>
    <br />

    <a href="<?php echo site_url(array('test', 'secret')); ?>">page secrète</a>
</p>

<?php
$this->session->set_userdata('bentov', 'Tolan');

$benji =  $this->session->userdata();


$resultat = $this->db->select('id, email')
    ->from('test')
//    ->where('id', 2)
//    ->limit(1)
    ->get()
    ->result();
echo '<pre>';
print_r($resultat);

