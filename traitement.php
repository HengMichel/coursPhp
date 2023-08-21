<?php
if(isset($_POST["valider"])){
// recup data
    $nom = htmlspecialchars( $_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo"<pre>";
    print_r($_FILES);
    echo"</pre>";
    // name img
    $imgName = $_FILES["image"]["name"];
    // loc temporaire server
    $tmpName = $_FILES["image"]["tmp_name"];
    // $_SERVER["DOCUMENT_ROOT"] -> racine server -> doc principale
    // $destination = $_SERVER["DOCUMENT_ROOT"];
    // if the doc images its in your document + name img
    $destination = $_SERVER["DOCUMENT_ROOT"]."/coursPhp/images/".$imgName;
    echo $destination;
    move_uploaded_file($tmpName,$destination);

    echo"<pre>";
    echo "$nom $email $message";
    echo"</pre>";
}