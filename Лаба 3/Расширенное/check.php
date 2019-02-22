<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

if (isset($_POST['catalog'])){
    $filename = $_POST['catalog'];
    $filearray = scandir($filename);
}

if (isset($_GET['dir'])) {
    $filename = $_GET['dir'];
    $filearray=scandir($filename);
}

foreach ($filearray as $value) {
    if ($value != '.') {
        if (is_dir($filename . DIRECTORY_SEPARATOR . $value)) {
            $filearray['catal'][] = $value;
        } else $filearray['files'][] = $value;
    }
}

?>
<table>
    <form method="post">
    <th><?php echo'Каталоги:'?></th>
    <tr><?php if (isset($filearray['catal'])){ foreach ($filearray['catal'] as $value): ?></tr>
    <td><input type="radio" name="files" value="<?php echo ($filename.DIRECTORY_SEPARATOR.$value) ?>"><a href="check.php?dir=<?php echo ($filename.DIRECTORY_SEPARATOR.$value)?>""><?php echo $value?></a></td>
    <?php endforeach;} ?>
    <tr><?php if (isset($filearray['files'])){ foreach ($filearray['files'] as $value): ?></tr>
    <td><input type="radio" name="files" value="<?php echo ($filename.DIRECTORY_SEPARATOR.$value)?>"><?php echo $value ?></td>
    <?php endforeach;} ?>
        <tr>
            <td><button type="suubmit" formaction="copy.php">Копировать</button></td>
            <td><button type ="submit" formaction="delete.php">Удалить</button></td>
        </tr>
    </form>
</table>
