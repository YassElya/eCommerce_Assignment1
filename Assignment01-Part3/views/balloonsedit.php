<?php

$rowId = 0;
if (isset($_GET)) {
    if (isset($_GET['resourceid'])) {
        $rowId = $_GET['resourceid'];
    }
}

$balloon = new Balloon();

$bal = $balloon->getRow($rowId);

if (isset($_POST['update'])) {

    $fullBalloon = new Balloon($rowId, $_POST['color'], $_POST['size'], $_POST['shape']);
    $result = $fullBalloon->updateRow();
    if ($result) {
        header('location: index.php?resource=balloon&resourceid=0&action=list');
    } else {
        echo "Error!";
    }
}

$html = '<h2>Edit Balloon #' . $rowId . ': ' . $bal[0]['color'] . ', ' . $bal[0]['size'] . ', ' . $bal[0]['shape'] . '</h2>';

$html .= '<form method="post">
                    <label for="color">Color:</label></br>
                    <input type="text" id="color" name="color" value="' . $bal[0]['color'] . '"></br>
                    <label for="size">Size:</label></br>
                    <input type="text" id="size" name="size" value="' . $bal[0]['size'] . '"></br>       
                    <label for="shape">Color:</label></br>
                    <input type="text" id="shape" name="shape" value="' . $bal[0]['shape'] . '"></br></br>
                    <input type="submit" name="update" value="Change Values">
                </form>
                <button type="button" onClick="location.assign(\'index.php?resource=balloon&resourceid=0&action=list\')">Cancel</button>
            ';

echo $html;

?>