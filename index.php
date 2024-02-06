<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin: 0 auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body >
    <?php
     $conn =mysqli_connect("localhost","root","","contacts");
     if (mysqli_connect_errno()) {
         echo"". mysqli_connect_error();
         die("The Database failed to connecet with Error: ". mysqli_connect_error());
     }
     else{
        //  echo "Connected Successfully";
     }
     
    ?>
 
    <form action="contact.php" method="post">
        <input type="text" name="First" required placeholder="First Name">
        <input type="text" name="Last" required placeholder="Last Name">
        <input type="text" name="Mobile" required placeholder="Mobile Number">
        <input type="text" name="Fax" required placeholder="Fax">
        <input type="email" name="Email" required placeholder="Email">
        <input type="text" name="Web" required placeholder="Web">
        <input type="submit" value="Submit" name="Submit">
    </form>
    <table style="margin-top: 40px;">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Fax</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Web</th>
  </tr> 
    <?php
    $q = "SELECT * FROM contactinfo";
     $result = mysqli_query($conn, $q);  
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row["first"]."</td>";
        echo "<td>".$row["last"]."</td>";
        echo "<td>".$row["fax"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["mobile"]."</td>";
        echo "<td>".$row["web"]."</td>";
        echo "</tr>";

    }
     ?>
  </tr>
</table>

   
     <table>
        
     </table>
    
</body>
</html>