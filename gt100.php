<?php

$url = "http://localhost:8080/examTopic/gt100";
$result = file_get_contents($url);


$topics = json_decode($result);

?>
<table style="border: thin darkorange solid;" cellpadding="3" cellspacing="5" border="1">
    <tr>
        <th>Konu Basligi</th>
        <th>Puan</th>
        <th>Tip</th>
    </tr>
    <?php foreach($topics as $topic): ?>
        <tr>
            <td><?php echo $topic->topicName?></td>
            <td><?php echo $topic->point?></td>
            <td><?php echo $topic->type?></td>
        </tr>
    <?php endforeach; ?>
</table>