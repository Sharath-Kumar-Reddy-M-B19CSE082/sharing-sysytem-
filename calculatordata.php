<?php
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
if(isset($_POST['submit'])){
  $conn = mysqli_connect("sql211.epizy.com", "epiz_28428556", "0pibt9XjWGygX","epiz_28428556_Myseproject");
  if($conn === false){
         die("ERROR: Could not connect. "
             . mysqli_connect_error());
     }
  $carusername = $_REQUEST["username"];
  $caruserphone = $_REQUEST["phonenumber"];
  $caruseremail = $_REQUEST["email"];
  $sql = "INSERT INTO calculators (username,phonenumber,email) VALUES ('$carusername','$caruserphone','$caruseremail')";
  if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
 } else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }

  mysqli_close($conn);
}

  //Establishing Connection with server by passing server_name, user_id and pass as a patameter
  $conn = mysqli_connect("sql200.epizy.com", "epiz_28564874", "zwV9AzP1Gh");
  //Selecting Database
  $db = mysqli_select_db($conn, "epiz_28564874_Myseproject");
  //sql query to fetch information of registerd user and finds user match.
  $sql = "SELECT * FROM calculators";
  $res = mysqli_query($conn, $sql);
  if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
      echo "id: " . $row["id"]. " - Name: " . $row["username"]. "phonenumber " . $row["phonenumber"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
?>