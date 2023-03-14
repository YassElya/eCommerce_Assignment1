<html>

<body>

    <head>
        <style>
            #balloonsTable {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                margin: 15px;
                width: 80%;
            }

            #balloonsTable td,
            #balloonsTable th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #balloonsTable tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #balloonsTable tr:hover {
                background-color: #ddd;
            }

            #balloonsTable th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #23007d;
                color: white;
            }

            #balloonsTable tr {
                text-align: center;
            }

            #buttonColumn {
                width: 75px;
            }

            #balloonsTable button {
                background-color: #23007d;
                color: white;
            }
        </style>
    </head>

    <?php

    $balloon = new Balloon();

    $balloons = $balloon->getAll();

    $html = '<table id="balloonsTable">
                <th>Color</th>
                <th>Size</th>
                <th>Shape</th>
                <th>Edit</th>
                ';

    $counter = 1;
    foreach ($balloons as $b) {

        $html .= '<tr>
                    <td>' . $b['color'] . '</td>
                    <td>' . $b['size'] . '</td>
                    <td>' . $b['shape'] . '</td>
                    <td id="buttonColumn"><button id="editbutton' . $counter . '" type="button" onClick="location.assign(\'index.php?resource=balloon&resourceid=' . $counter . '&action=edit\')">Edit</button></td></td>
                </tr>';

        $counter++;
    }

    $html .= '</table>';

    echo $html;

    ?>

</body>

</html>