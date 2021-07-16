<?php
    if(isset($_POST['submitButton'])){
        if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['message'])){
            $to = "ndjogdesirejunior@outlook.fr";
            $monNom = $_POST['nom'];
            $monPrenom = $_POST['prenom'];
            $monMessage = $_POST['message'] ;
            $monEmail = $_POST['email'];
            $headers = 'From: '.$monEmail."\r\n".
            'Reply-To: '.$to."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            $contact = "Formulaire Contact";
        
                if(!empty($monNom) AND !empty($monPrenom) AND !empty($monEmail) AND !empty($monMessage)){
                    if(mail($to, $contact, $monMessage, $headers)){ // l'envoi du mail
                         header('Location: ../index.php?success');} // redirection vers l'index
                }else{
                    header('Location: ../index.php?error');
                }

            }else{
                
                header('Location: ../index.php');
            }
    }
?>