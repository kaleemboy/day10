
        <?php
        $hostname="localhost";
        $username="root";
        $password="";
        $databasename="students";
        
        //conect to server
        $conn=new mysqli($hostname,$username,$password,$databasename);
        
        $Q="select * from reportcard";
        
        $result=$conn->query($Q);
        
        while ($row = mysqli_fetch_assoc($result)) 
                {
    echo $row['Name'] ." =  ".$row['Contact']."   =  ".$row['Section']."  =".$row['Totalmarks'];
    
    echo "<br>";
}
    

        ?>
  
