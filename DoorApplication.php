<?php
require __DIR__ . '/vendor/autoload.php';

use Door\Door;


$output = '';

if($_POST) {
    session_start();

    if(isset($_SESSION['door'])) {
        $door = $_SESSION['door'];
    } else {
        $door = new Door();
    }


    switch($_POST['submit']) {
        case "Lock":
            $msg = $door->lock();
            break;
        case "Unlock":
            $msg = $door->unlock();
            break;
        case "Open":
            $msg = $door->open();
            break;
        case "Open Wide":
            $msg = $door->open_wide();
            break;
        case "Shut":
            $msg = $door->shut();
            break;
        default:
            $msg = 'Something went wrong, try again';
    }
    $output = "<p>$msg</p>";

    $_SESSION['door'] = $door;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Door Simulator</title>
</head>
<body>
<h1>The Door Simulator</h1>
<form method="post">
    <fieldset>
        <legend>Door Operations</legend>
        <p><input type="submit" name="submit" value="Lock"></p>
        <p><input type="submit" name="submit" value="Unlock"></p>
        <p><input type="submit" name="submit" value="Open"></p>
        <p><input type="submit" name="submit" value="Open Wide"></p>
        <p><input type="submit" name="submit" value="Shut"></p>
    </fieldset>
</form>
<h2>Simulation Result</h2>
<?php echo $output; ?>

</body>
</html>