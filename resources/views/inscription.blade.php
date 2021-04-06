<?php
//ouverture du bd TestLeadLaravel
$objetPdo = new PDO('pgsql:host=localhost;dbname=TestLeadLaravel','postgres','root');
//preparation de la requete
$pdoStat= $objetPdo->prepare('insert into Respondents VALUES (
                                NULL , :nom,:mdp_Respondents, :NULL
)');

//liaisons
$pdoStat->bindValue(':nom',$_POST['nomRes'],PDO::PARAM_STR);
$pdoStat->bindValue(':mdp_Respondents',$_POST['pwdRes'],PDO::PARAM_STR);

//execution
$insertIsOk=$pdoStat->execute();

//test et redirection vers page
if($insertIsOk){
    $message='le contact a été ajouté';
    echo $message;
}
else{
    $message='Echec de l\'ajout';
} ?>

<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h2> bien recu
    <?php echo $message;?>
</h2>
</body>
</html>
