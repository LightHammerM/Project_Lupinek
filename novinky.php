<?php
session_start();

require('Db.php');
Db::connect('localhost', 'lupinci', 'lupinci', 'Lup1nc12020*');

$novinky = array(
    'novinky_id' => '',
    'titulek' => '',
    'obsah' => '',
    'datum' => '',
);
if ($_POST)
{
    if (!$_POST['novinky_id'])
    {
        Db::query('
            INSERT INTO novinky (titulek, obsah)
            VALUES (?, ?)
        ', $_POST['titulek'], $_POST['obsah']);
    }
    //přepsat přesměrování
    header('Location: novinky5.php');   
    exit();
}
?>


<style>
.form
{

position: relative;
background-image: url(form.png);
background-repeat: no-repeat;
background-position: center;
height: 80%;
text-align: center;

}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
 <HTML>                           
 <HEAD>
 <meta http-equiv="content-type" content="text/html; charset=iso-8859-2"/>
 <link href="bootstrap/css/bootstrap.css" media="all" type="text/css" rel="stylesheet">
  <link href="styly.css" media="all" type="text/css" rel="stylesheet">

 </HEAD>
 <BODY>
 <div class="hlava"  ><p style="font-size: 64px">Logos Polytechnos</p></div>
<form method="post">
<div class="form"> 
<br><br><br><br><br><br><br>
    <h3>Tvorba novinek</h3>
    Název:&nbsp;&nbsp;</td><td><input maxlength="50" class="titulek" type="text" name="titulek" value="<?= htmlspecialchars($novinky['titulek']) ?>" /> <br><br>
    Obsah:&nbsp;&nbsp;</td><td><textarea maxlength="350" style="resize: none;" class="obsah" name="obsah"><?= htmlspecialchars($novinky['obsah']) ?></textarea> <br><br>
    <button type="submit" class="btn btn-light" value="Uložit" /> Uložit </button>
 </div></form>
 </BODY>
 
 
                                                                                                               <br>




 
 
 <div class="pata" >Kok</div>
 </HTML>
