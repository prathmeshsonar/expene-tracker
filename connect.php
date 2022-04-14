<?php

      if(isset($_POST['submit1']))
{
  $userid = ($_POST["userid"]);
  $date =($_POST['date']);
  $item = ($_POST["item"]);
  $price = ($_POST["price"]);
  $iname=($_POST["iname"]);
  
$conn = new mysqli('sql200.epizy.com','epiz_30900905','dD28o5MLJSuyH','epiz_30900905_Prathmesh');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into expense(userid,date,item,iname,price)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$userid, $date, $item, $iname, $price);
    $stmt->execute();
    echo "<h3>             Submited Sucessfully :) </h3>";
    echo "\r\nYou selected :".$iname;
    echo "\r\nDate : ".$date;

    $stmt->close();
    $conn->close();

}

}
?>
