<?php

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Usuario.php');
require_once('../../dao/LivroDao.php');
require_once('../../model/Livro.php');
require_once('../../dao/FeedbackDao.php');
require_once('../../model/Feedback.php');

$livro = new Livro();
$livrodao = new LivroDao();

$usuario = new Usuario();
$userdao = new UserDao();

$feedback = new Feedback();
$feedbackdao = new FeedbackDao();

foreach($userdao->user() as $usuario) {

$idu = $usuario->getID();

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Comentar </title>
</head>
<body>
<form action="../../controller/FeedbackController.php" method="post" name="criar">
<input type="number" value="<?php echo $idu; ?>" name="idu" hidden/>
<input type="number" value="1" name="idl" hidden/>
<label> nota </label>
<input type="number" max="5" min="0" name="nota" required/>
<br/>
<label> comentario </label>
<textarea rows="" cols="" maxlength="500" name="comentario" required>
</textarea>
<input type="submit" value="envia" name="criar"/>
</form>
</body>
</html>