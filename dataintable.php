<?php

 # Init the MySQL Connection
  if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error();
  if( !mysql_select_db( 'ram' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error();

 # Prepare the INSERT Query
  $insertTPL = 'INSERT INTO `name` VALUES( "%s" , "%s" , "%s" , "%s" )';
  $insertSQL = sprintf( $insertTPL ,
                 mysql_real_escape_string( $name ) ,
                 mysql_real_escape_string( $add1 ) ,
                 mysql_real_escape_string( $add2 ) ,
                 mysql_real_escape_string( $mail ) );
 # Execute the INSERT Query
  if( !( $insertRes = mysql_query( $insertSQL ) ) ){
    echo '<p>Insert of Row into Database Failed - #'.mysql_errno().': '.mysql_error().'</p>';
  }else{
    echo '<p>Person\'s Information Inserted</p>'
  }

 # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM `names`';
 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
<table border="2">
  <thead>
    <tr>
      <th>Name</th>
      <th>Address Line 1</th>
      <th>Address Line 2</th>
      <th>Email Id</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['name']}</td><td>{$row['addr1']}</td><td>{$row['addr2']}</td><td>{$row['mail']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
    <?php
  }

?>