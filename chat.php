 <?php 
 include 'db.php';
   $query = "SELECT * FROM chat ORDER BY Id DESC";
   $run = $con->query($query);
     while ($row = $run->fetch_array()) :
              
       ?>
        <div id="chat_data">
         <span style="color: green;"><b><?php echo $row['Name'] ; ?></b></span> :
          <span style="color: brown;"><b><?php echo $row['Massage'] ; ?></b></span>
            <span style="float: right;"><b><?php echo formatDate($row['Date'] ); ?></b></span>
        </div>
        <?php endwhile;?>  