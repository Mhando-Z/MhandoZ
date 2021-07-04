


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      table{
        width:100%;
        font-size: 16pt;
        text-align: center;
      }
      th{
        color:red;
        font-weight:bold;
      }

      td{
        color:white;
      }

      body{
        background-color: black;
      }

      .vx{
        background-color: red;
        color:red;
        width:100%;
      }
      .cx{
        font-size: 15pt;
        font-weight: bold;
        border-radius: 10px;
        border-style: solid;
        border-width: 5px;
        border-color: red;
        position: center;
        margin:10px;
        transition: background-color 1s, color 1s;
      }

      .cx:hover{
        background-color:black;
        color:white;
      }
    </style>


  </head>
  <body>

    <div class="vx">
      <p>...</p>
    </div><br>
    <table>
      <tr>
        <th>COURSE NAME</th>
        <th>COURSE CODE</th>
        <th>DESCRIPTION</th>
        <th>YEAR</th>
        <th>SEMESTER</th>
        <th>TEACHER</th>
        <th>GRADE</th>
        <th>DEPARTMENT</th>
      </tr>

  <?php


    $connection=mysqli_connect("localhost", "root", "", "formregistration");
    if($connection==false){
        die("Connection failed. Reason: ".mysqli_connect_error());
    }



   $sql = 'SELECT * FROM `coz`';
   $retval=mysqli_query($connection, $sql);

   if(mysqli_num_rows($retval) > 0){
    while($row = mysqli_fetch_assoc($retval)){
    echo "<tr><td>"."{$row['coursename']}"."</td><td>".
        "{$row['coursecode']}"."</td><td>"."{$row['description']}".
        "</td><td>"." {$row['semester']}"."</td><td>"."{$row['year']}".
        "</td><td>"."{$row['teacher']}"."</td><td>"."{$row['grade']}".
        "</td><td>"."{$row['department']}"."</td>";

     } //end of while
   }else{
   echo "0 results";
   }
   mysqli_close($connection);



?>

</table>

<div class="vx">
  <p>...</p>
</div>
    <br><br>
    <a href="pop.html">
    <input type="button" name="" value="ADD MORE DATA" class="cx">
    </a>


    </a>
    <a href="logout.php">
    <input type="button" name="" value="LOG OUT" class="cx">
    </a>
  </body>
</html>
