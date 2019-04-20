<?php

$products = ['Кофе', 'Молоко', 'Чай', 'Конфеты', 'Торт', 'Курица', 'Мороженое'];

if (isset($_COOKIE['product'])){
    foreach ($_COOKIE['product'] as $key => $value){
        echo $key. " = ". $value."<br>";
    }
}


function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';

    return 'Other';
}

function get_operate_name($php_uname)
{
    if (strpos($php_uname, 'Windows') >= 0) return 'Windows';
    elseif (strpos($php_uname, 'Linux') >= 0) return 'Linux';
    elseif (strpos($php_uname, 'macOS') >= 0) return 'macOS';
    elseif (strpos($php_uname, 'Ubuntu')>= 0) return 'Ubuntu';
    elseif (strpos($php_uname, 'Android') >= 0) return 'Android';

    return 'Other';
}

function records_data($ip, $brows, $operate){
    $db = new mysqli('localhost', 'Krun', 'Koska200895', 'testsite');
    $sql = "SELECT * FROM id WHERE id='$ip'";
    $res = $db->query($sql);

    if (mysqli_num_rows($res) != 0){
        $row = $res->fetch_assoc();
        if ($row['browser'] == $brows){}
        else{
            $sql = "UPDATE id SET browser='$brows' WHERE id='$ip'";
            $db->query($sql);
            $sql = "SELECT * FROM brows WHERE browser = '$brows'";
             $res = $db->query($sql);
             if (mysqli_num_rows($res)!=0) {
                 $sql = "UPDATE brows SET visits = visits + 1 WHERE browser = '$brows'";
                 $db->query($sql);
             } else {
                 $sql = "INSERT INTO brows (browser, visits) VALUES ('$brows', 1)";
                 $db->query($sql);
             }
        }
        if ($row['operate'] == $operate){}
        else {
            $sql = "SELECT * FROM operations WHERE operation = '$operate'";
            $res=$db->query($sql);
            if (mysqli_num_rows($res)!=0) {
                $sql = "UPDATE operations SET cole = cole + 1 WHERE operation = '$operate'";
                $db->query($sql);
            } else {
                $sql = "INSERT INTO operations (operation, cole) VALUES ('$operate', '1')";
                $db->query($sql);
            }
        }
    } else {
        $sql = "INSERT INTO id (id, browser, operate) VALUES ('$ip', '$brows', '$operate')";
        $db->query($sql);

        $sql = "SELECT * FROM brows WHERE browser = '$brows'";
        $res = $db->query($sql);

        if (mysqli_num_rows($res) != 0){
            $sql = "UPDATE brows SET visits=visits + 1 WHERE browser = '$brows'";
            $db->query($sql);
        }  else {
            $sql = "INSERT INTO brows (browser, visits) VALUES ('$brows', 1)";
            $db->query($sql);
        }

        $sql2 = "SELECT * FROM operations WHERE operation = '$operate'";
        $result = $db->query($sql2);

        if (mysqli_num_rows($result) != 0) {
            $sql = "UPDATE operations SET cole=cole + 1 WHERE operation = '$operate'";
            $db->query($sql);
        } else {
            $sql = "INSERT INTO operations (operation, cole) VALUES ('$operate', 1)";
            $db->query($sql);
        }
    }
    $db->close();
}


function get_data (){
    $db = new mysqli('localhost', 'Krun', 'Koska200895', 'testsite');
    $sql = "SELECT * FROM brows";
    $res = $db->query($sql);
    while ($row = $res->fetch_assoc()){
        $all['brows'][$row['browser']] = $row['visits'];
    }
    $sql = "SELECT * FROM operations";
    $res = $db->query($sql);
    while ($row = $res->fetch_assoc()){
        $all['oper'][$row['operation']]=$row['cole'];
    }
    return $all;
}


function get_real_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }  else  {    $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ip = get_real_ip();
$brows = get_browser_name($_SERVER['HTTP_USER_AGENT']);
$operate = php_uname();
$operate = get_operate_name($operate);

records_data($ip, $brows, $operate);

$all = get_data();


?>


<h3>Выберите товар</h3>
<?php foreach ($products as $value): ?>
<form action="basket.php" method="post">
    <input type="number" min="0" name="cole">
    <input type="text" name="prod" readonly value="<?php echo $value; ?>">
    <input type="submit" name="order" value="Добавить в корзину"><br>
</form>
<?php endforeach; ?>
<form action="order.php" method="post">
    <input type="submit" name="order" value="Сделать заказ">
</form>

<table>
    <tr>
        <th>Браузер</th>
        <th>Количество посещений</th>
    </tr>
    <?php foreach ($all['brows'] as $key=>$value): ?>
    <tr>
        <td><?php echo $key; ?></td>
        <td align="center"><?php echo $value; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<table>
    <tr>
        <th>Операционная система</th>
        <th>Количество посещений</th>
    </tr>
    <?php foreach ($all['oper'] as $key=>$value): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td align="center"><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

