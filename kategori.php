<meta charset="UTF-8" />

<?php


$url = "http://localhost:8080/ytu/category/all";
$response = file_get_contents($url);

$obj = json_decode($response);


?>
<table border="1">
    <tr>
        <th>Kategori Adi</th>
    </tr>
    <?php foreach($obj as $o): ?>
        <tr>
            <td><?php echo $o->categoryName ?></td>
        </tr>
    <?php endforeach; ?>
</table>