<?php
$conn = mysqli_connect('localhost','root','','realestate');
if($conn){
    echo "We are connected!";
} else{
    echo "Not Yet Connected".mysqli_connect_error($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <form action="" method="post">
        <select name="state">
        <option value="Lagos">Lagos</option>
        <option value="Abuja">Abuja</option>
        <option value="Ondo">Ondo</option>
        </select>

        <select name="city">
        <option value="Ketu">Ketu</option>
        <option value="Ikorodu">Ikorodu</option>
        <option value="Oshodi">Oshodi</option>
        <option value="Gwari">Gwari</option>
        <option value="Wuse">Wuse</option>
        <option value="Lipkakala">Lipkakala</option>
        <option value="Ajayi">Ajayi</option>
        <option value="Lantern">Lantern</option>
        <option value="Shinta">Shinta</option>
        </select>
        <input type="submit" value="Search" name="search">
    </form>
    <h2>Search Results</h2>
    <style>
        .wrapper{
            display: grid;
            grid-gap: 10px;
            grid-template-columns: repeat(2,1fr);
            border: 1px solid salmon;
            width: 100%;
            padding: 0.7%;
        }
        .box{
            width: 70%;
            padding: 2%;
            border: 1px solid green;
            border-radius: 5px;
            /* height: */
        }
                </style>
    
    <?php
        if(isset($_POST['search'])){
            $state = $_POST['state'];
            $city = $_POST['city'];
            $sql = mysqli_query($conn,"SELECT * FROM `estatemgr` WHERE `state` = '$state' AND `city`= '$city' ");
            ?>
        <div class="wrapper">
            <?php
            while($row = mysqli_fetch_array($sql)){
                $state1 = $row['state'];
                $city1 = $row['city'];
                $description1 = $row['description'];
                $outright_price1 = $row['outright_price'];
                $monthly1 = $row['monthly'];
                $quarterly1 = $row['quarterly'];
                $half_year = $row['6_months'];
                $annually1 = $row['annually'];
                $initial_sum1 = $row['initial_sum'];

                ?>

                
                    <div class="box">
                        <p>State:<?php echo "$state1"?></p>
                        <p>City:<?php echo "$city1"?></p>
                        <p>description:<?php echo "$description1"?></p>
                        <p>Outright Price:<?php echo "$outright_price1"?></p>
                        <p>monthly:<?php echo "$monthly1"?></p>
                        <p>quarterly:<?php echo "$quarterly1"?></p>
                        <p>$half_year:<?php echo "$half_year"?></p>
                        <p>$initial_sum:<?php echo "$initial_sum1"?></p>

                    </div>
                
                <?php
            }
        }
    ?>
    </div>
</body>
    <script src="main.js"></script>
</html>