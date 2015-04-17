<?php

$url = "http://localhost:8080/exam/lte75";
$response = file_get_contents($url);

$obj = json_decode($response);


?>
<table border="1">
    <tr>
        <th>Ogrenci No</th>
        <th>Not</th>
    </tr>
    <?php foreach($obj as $umeyr): ?>
        <tr>
            <td><?php echo $umeyr->studentId ?></td>
            <td><?php echo $umeyr->score ?></td>
        </tr>
    <?php endforeach; ?>
</table>