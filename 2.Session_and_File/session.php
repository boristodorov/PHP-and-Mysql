<?php
session_start();

if ($_SESSION['isLoged'] == true){
    echo 'Cao! <a href= "destroy.php">Izlaz</a> <br>';
}
else{
    if ($_POST){
        $user = trim($_POST['username']);
        $pass = trim ($_POST['pass']);
        
        if ($user == 'boris' && $pass == 'todorov'){
            $_SESSION['isLoged'] = TRUE;
            header('Location: session.php');
            exit;
        }
        else {
            echo 'Greska!';
        }
    }
}


?>


<form method="post">
    <div>Ime: <input type="text" name="username" /></div>
    <div>Sifra: <input type="password" name="pass" /></div>
    <div><input type="submit" value="Go"/></div>
</form>