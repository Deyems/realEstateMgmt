<?php
    //$conn = mysqli_connect("localhost","username","password","database");
    $conn = mysqli_connect("localhost","root","","estate_mgmt_data");
    // if($conn){
    //     echo "Success";
    // } else{echo "Failed: ".mysqli_error($conn);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="../fontawesome-free-5.5.0-web/js/all.js"></script>
    <title>estate fetch</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <div>
                <div>logo</div>
                <div></div>
                <div>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Support</a></li>
                    </ul>
                    <div class="btn">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div>
                <h1>Give a description of <br> what you want</h1>
            </div>
        </header>
        <main>
            <form action="" method="post">
                <section>
                    <h1 align="center">Choose where you wish to live</h1>
                    <div>
                        <div><p> Enter your search</p></div>
                        <div><p> State:</p></div>
                        <div><p> Lga</p></div>
                    </div>
                    <div>
                        <div><input type="search" name="" id=""></div>
                        <div>
                            <select name="state" id="">
                                <option value="Abia">Abia</option>
                                <option value="Abuja">Abuja</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa-ibom">Akwa-ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Osun">Osun</option>
                                <option value="Rivers">Rivers</option>
                            </select>
                        </div>
                        <div>
                            <select name="lga" id="">
                                <option value="<?php echo "ebrima" ?>"> <?php echo "" ?>ebrima</option>
                                <option value="<?php echo "depo" ?>"> <?php echo "" ?>Depo</option>
                                <option value="<?php echo "lama" ?>"> <?php echo "" ?>lama</option>
                                <option value="<?php echo "chintok" ?>"> <?php echo "" ?>Chintok</option>
                                <option value="<?php echo "laulau" ?>"> <?php echo "" ?>laulau</option>
                                <option value="<?php echo "ikorodu" ?>"> <?php echo "" ?>ikorodu</option>
                                <option value="<?php echo "ikeja" ?>"> <?php echo "" ?>ikeja</option>
                                <option value="<?php echo "mushin" ?>"> <?php echo "" ?>mushin</option>
                                <option value="<?php echo "okoko" ?>"> <?php echo "" ?>okoko</option>
                                
                            </select>
                        </div>
                    </div>
                    <div>
                        <div><p> Type of house</p></div>
                        <div><p> Mode of House</p></div>
                        <div><p> Category</p></div>
                    </div>
                    <div>
                        <div>
                            <select name="housetype" id="">
                                <option value="<?php echo "bungalow" ?>"> <?php echo "" ?>Bungalow</option>
                                <option value="<?php echo "single storey" ?>"> <?php echo "" ?>Single Storey</option>
                                <option value="<?php echo "duplex" ?>"> <?php echo "" ?>Duplex</option>
                                <option value="<?php echo "mansion" ?>"> <?php echo "" ?>Mansion</option>
                                <option value="<?php echo "estate" ?>"> <?php echo "" ?>Estate</option>
                                <option value="<?php echo "three_storey" ?>"> <?php echo "" ?>three_storey</option>
                            </select>
                        </div>
                        <div>
                            <select name="mode" id="">
                                <option value="<?php echo "land" ?>"> <?php echo "" ?>land</option>
                                <option value="<?php echo "land_and_house" ?>"> <?php echo "" ?>land & house</option>
                            </select>
                        </div>
                        <div>
                            <select name="category" id="">
                                <option value="<?php echo "sale" ?>"> <?php echo "" ?>for sale</option>
                                <option value="<?php echo "rent" ?>"> <?php echo "" ?>For rent</option>
                                <option value="<?php echo "lease" ?>"> <?php echo "" ?>For lease</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div><p> Number of Bedrooms</p></div>
                        <div class="prices"><p> Min Price:</p><p> Max Price:</p></div>
                        <div><p> </p></div>
                    </div>
                    <div>
                        <div>
                            <select name="bedrooms" id="">
                                <option value="<?php echo "2" ?>"> <?php echo "" ?>2</option>
                                <option value="<?php echo "3" ?>"> <?php echo "" ?>3</option>
                                <option value="<?php echo "4" ?>"> <?php echo "" ?>4</option>
                                <option value="<?php echo "5" ?>"> <?php echo "" ?>5</option>
                                <option value="<?php echo "6" ?>"> <?php echo "" ?>6</option>
                                <option value="<?php echo "7" ?>"> <?php echo "" ?>7</option>
                            </select>
                        </div>
                        <div class="prices">
                            <select name="minprice" id="">
                                <option value="<?php echo "100000" ?>"> <?php echo "" ?>100000</option>
                                <option value="<?php echo "200000" ?>"> <?php echo "" ?>200000</option>
                                <option value="<?php echo "500000" ?>"> <?php echo "" ?>500000</option>
                                <option value="<?php echo "1000000" ?>"> <?php echo "" ?>1000000</option>
                                <option value="<?php echo "2000000" ?>"> <?php echo "" ?>2000000</option>
                                <option value="<?php echo "5000000" ?>"> <?php echo "" ?>5000000</option>
                            </select>
                            <select name="maxprice" id="">
                                <option value="<?php echo "1000000" ?>"> <?php echo "" ?>1000000</option>
                                <option value="<?php echo "2000000" ?>"> <?php echo "" ?>2000000</option>
                                <option value="<?php echo "5000000" ?>"> <?php echo "" ?>5000000</option>
                                <option value="<?php echo "10000000" ?>"> <?php echo "" ?>10000000</option>
                                <option value="<?php echo "20000000" ?>"> <?php echo "" ?>20000000</option>
                                <option value="<?php echo "50000000" ?>"> <?php echo "" ?>50000000</option>
                            </select>
                        </div>
                        <div><button type="submit" name="search">Search</button></div>
                    </div>
                </section>
            </form>
        </main>
        <?php
            if(isset($_POST["search"])){
                $state = $_POST["state"];
                $lga = $_POST["lga"];
                $house_type = strtolower($_POST["housetype"]);
                $mode = $_POST["mode"];
                $category = $_POST["category"];
                $bedrooms = $_POST["bedrooms"];
                $minprice = $_POST["minprice"];
                $maxprice = $_POST["maxprice"];
                
                $sql = "SELECT * FROM search_info WHERE house_type='$house_type' and mode='$mode' and lga='$lga' and state='$state' and category='$category' and no_of_bedrooms='$bedrooms' and price<='$maxprice' and price>='$minprice' ";
                $sql_query = mysqli_query($conn,$sql);
                $no_of_rows = mysqli_num_rows($sql_query);
           
        ?>
        <section class="results">
            <div><h1> Search Results</h1></div>
            <div>
                <?php
                    if($sql_query && ($no_of_rows>0) ){
                        echo "<p>Top results from $state</p><br>";
                    }else{
                        echo "<p>No results found from $state</p>";
                    }
                    echo "<div>";
                    while($row = mysqli_fetch_array($sql_query)){
                        $picture = $row["pixs"];
                        $address = $row["address"];
                        $house_type_db = $row["house_type"];
                        $mode_db = $row["mode"];
                        $lga_db = $row["lga"];
                        $state_db = $row["state"];
                        $category_db = $row["category"];
                        $no_of_bedrooms_db = $row["no_of_bedrooms"];
                        $price_db = $row["price"];
                        echo "<div>".
                                // "<div>".
                                    "<figure>".
                                        "<img src='images/$picture' alt='gallery'>".
                                        "<div>".
                                            "<figcaption>$no_of_bedrooms_db-Bedroom $house_type_db<br>"." $address"."</figcaption>".
                                            "<p>"."<i class='fa fa-check fa-2x'></i></p>".
                                        "</div>".
                                        "<div>".
                                            "<a href='#'>Contact Agent</a>".
                                            "<a href='#'>Make Payment</a>".
                                        "</div>".
                                    "</figure>".
                                "</div>";
                            // "</div>";
                    }
                    echo "</div>";
                }
                ?>
                <!-- <div>
                    <div>
                        <figure>
                            <img src="images/<?php echo "house2.PNG"?>" width="180" height="120" alt="house1">
                            <div>
                                <figcaption><?php echo "2 Bedrooms ";?><?php echo "Bungalow <br>";?><?php echo " 5,Ajose Close Ori-okuta <br>";?></figcaption>
                                <p><i class="fa fa-check fa-2x"></i></p>
                            </div>
                            <div>
                                <a href="#">Contact Agent</a>
                                <a href="#">Make Payment</a>
                            </div>
                        </figure>
                    </div>
                </div> -->

            </div>
        </section>

        <footer>
            <div>
                <div>
                    <figure>
                        <img src="images/" alt="logo">
                    </figure>
                    <p>We aim to connect property owners with buyers at no fee.</p>
                </div>
                <div>
                    <h2>GET IN TOUCH</h2>
                    <p><i class="fa fa-phone"></i>+2348170090080</p>
                    <p><i class="fa fa-phone-square"></i>+2348180090080</p>
                    <p><i class="fa fa-map-marker"></i>6, Oroki Avenue, Gateway poly, ede, <br>Victoria Island,<br> Lagos.</p>
                    <p><i class="fa fa-envelope"></i>triump@gmail.com</p>
                </div>
                <div>
                    <h2>LINKS</h2>
                    <p><a href="">About</a></p>
                    <p><a href="">Contact</a></p>
                    <p><a href="">Support</a></p>
                    <p><a href="">Services</a></p>
                </div>
            </div>
            <div>
                <div><p>&copy; copyrights 2019 - 2022</p></div>
                <div>
                    <div>Follow Us</div>
                    <div><i class="fab fa-facebook"></i></div>
                    <div><i class="fab fa-instagram"></i></div>
                    <div><i class="fab fa-linkedin"></i></div>
                    <div><i class="fab fa-twitter"></i></div>
                </div>
            </div>
        </footer>
    </div> <!--END OF WRAPPER-->
</body>
</html>