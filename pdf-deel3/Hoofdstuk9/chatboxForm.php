<?php
session_start();


require_once './chatbox.php';
$chatbox = new Chatbox();




if (!isset($_SESSION['chatter'])) {
    $getal = rand(111, 999);
    $_SESSION['chatter'] = "p" . $getal;
}


if (isset($_POST["action"]) && $_POST["action"] == "new") {
  $chatbox->nieuwBericht($_SESSION['chatter'], $_POST["bericht"]);
  
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chatbox</title>
    </head>
    <body>
        <h1>Berichten</h1>
        <table style="width: 500px;">
            <tbody>
                <?php
                $lijst = $chatbox->getLijst();
                foreach ($lijst as $bericht) {
                    ?>
                    <tr>
                        <td style="width: 150px;">
                            <?php print($bericht->getNickname()); ?> >
                        </td>
                        <td>
                            <?php print($bericht->getBoodschap()); ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
<?php echo $_SESSION['chatter'];?>
        <form action="chatboxForm.php" method="post">
            <p>Bericht:</p>
            <textarea name = "bericht" cols="50" rows="4"></textarea>
            <input type = "hidden" name="action" value="new">
            <p> <input type="submit" value="Versturen"></p>

        </form>
    </body>
</html>
