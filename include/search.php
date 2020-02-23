<?php

$host="localhost";
$username="root";
$password="";
$databasename="db";

$connect= new mysqli($host,$username,$password, $db);

// $searchTerm = $_GET['term'];
if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM routes WHERE apo LIKE ?";
    $result = mysqli_query($connect, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['apo'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>
<!-- 
$select =mysql_query("SELECT apo FROM routes WHERE apo LIKE ?");
$apodata=array();

if($select->num_rows >0){
while ($row=$select->fetch_assoc()) 
{
 $data['id'] = $row['id'];
  $data['value'] = $row['apo'];
    array_push($apodata,$data);

}

}
echo json_encode($apodata);

//return json data
?> -->