<?php include './init.php'; ?>
<?php include './security.php'; ?>
<?php
$obj = new base_class;

$obj->Normal_Query("SELECT * FROM users WHERE username like '%".$_POST['username']."%'");
$array = $obj->fetch_all();
foreach($array as $key):
    $name =  $key->name;
    $image = $key->image;
    $username = $key->username;

    echo "
    <div id='user'><a  href='personal.php?username=$username' class='link'>&nbsp;<span>$username</span></a></div>
    ";
    
  endforeach;

?>

