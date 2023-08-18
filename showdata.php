<?php
    include_once("./header.php");
    // include_once("./navbar.php");
?>

<section class='mt-3'>
    <div class="container" align='center'>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>" >
        <input type="submit" class= 'btn btn-primary' name="showBtn" value="Display Data">

        <?php
        extract($_POST);
        if(isset($showBtn) or isset($_GET['d'])){
            include_once("./db_conn.php");
            $link= mysqli_connect($hostName,$username,$password,$databaseName);
            $qry= "select * from Shreshth_portfolio";
            $resultSet= mysqli_query($link,$qry);
            $table=<<<Tab
            <div class= 'table-responsive mt-3'>
            <table class="table table-bordered table-striped" width='700px'>
            <thead class="thead-dark">
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    
                </tr>
            </thead>
            <tbody>
            Tab;
                while($row= mysqli_fetch_assoc($resultSet)){
                    $r="<tr><td>$row[Name]</td>
                            <td>$row[Email]</td>
                            <td>$row[Phone_no]</td>";
                    $table .=$r;
                }
                $table .= "</tbody></table></div>";
                echo $table;

            // while($row=mysqli_fetch_row($resultSet)){
            //     // var_dump($row);
            //     echo"$row[0],$row[1],<br>";
            // }
            // while($row=mysqli_fetch_assoc($resultSet)){
            //     // var_dump($row);
            //     echo"$row[emp_id],<br>";
            // }
            // while($row=mysqli_fetch_array($resultSet)){
            //     // var_dump($row);
            //     echo"$row[emp_name],$row[0],<br>";
            // }
            
        }
        ?>
        </form>
    </div>    

</section>




<?php    
    include_once("./footer.php");
?>