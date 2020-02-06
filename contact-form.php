
     <?php

        

        $messaggio = "";

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        $testo = "Nome: " . $nome . "\n"
       . "Email: " . $email . "\n"
       . "Messaggio:\n" . $msg;

       

        mail('tommyvitaly@gmail.com', 'Nuovo messaggio da TommasoVitali.com', $testo);
            
        
         
        

    ?> 



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <meta name="description" content="The official page for the italian abstract painter Tommaso Vitali.Best art from Italy.">
        
        
        <title>Tommaso Vitali - message sent</title>
        <link rel="stylesheet" type="text/css" href="resources/css/contactstyle.css">
        
        
        
        
    </head>

    <body>

            <div class="answer" data-aos="zoon-in">
            <p>Thank you for contacting Tommaso Vitali.We will reply as soon as possible.</p>  
            </div>
            <div class="home">
                <a href="http://www.tommasovitali.com"> HOME</a>
            </div>

            
</body>
</html>