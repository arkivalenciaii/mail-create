<?php
session_start();
include('functions.php');
include('dbcon.php');
if(isset($_POST['submit']))
{
    create_user($name,$familyhash,$father,$mother,$email,$password);
}
if(isset($_GET['fhash']))
{
    /*$fhash_true = get_fhash($_GET['fhash']);*/
    /*if($fhash_true] == 'true')*/
    if($_GET['fhash'] == 'fxb00a')
    {
        include('form.php');
    }
    else
    {
        echo "<script>alert('Hash not found');</script>";
    }
}
?>
