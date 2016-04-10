
<!DOCTYPE HTML>
<html>
    <head>
       <meta charset="UTF-8"></meta>
       <title>Insert</title>
      <link rel="stylesheet" type="text/css" rel="bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
      <div class="div2">
           <h3>Customer Details</h3>
    	     <table border="1">
               <thead>
                   <td>Firstname</td>
                   <td>Lastname</td>
                   <td>Item</td>
                   <td>Total</td>
                    <td>Order</td>
                    <td>Delete</td>
               </thead>
               <tbody>
                      <?php
                      require 'db_connect.php';
                      $obj2=new Connect;
                      if($obj2->getTable()){
                          $result=$obj2->getTable();
                          while($row = pg_fetch_assoc($result)){

                               echo"<tr>
                                     <td>".$row['fname']."</td>
                                    <td>".$row['lname']."</td>
                                    <td>".$row['item']."</td>
                                    <td>".$row['total']."</td>
                                    <td></td>
                                    <td></td>

                                  </tr>";
                          }
                        }else{
                          echo pg_last_error();
                        }
                      ?>
               </tbody>     
           </table> 
      </div>
    </body>

</html>
