
        <?php
        $hostname="localhost";
        $username="root";
        $password="";
        $databasename="newspaper";
        
        //conect to server
        $conn=new mysqli($hostname,$username,$databasename);
        
        $Q="select * from newspaper";
        
        $result=$conn->query($Q);
        
        while ($row = mysqli_fetch_assoc($result)) 
                {
    echo $row['id'] ." =  ".$row['tittle']."   =  ".$row['newspapername'];
    
    echo "<br>";
}
    

        ?>

