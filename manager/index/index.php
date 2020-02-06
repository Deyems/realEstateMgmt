<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Estate MGR</title>
</head>
<body>
    <!-- states array -->
    <?php

$states = array("Abia","Adamawa", "Anambra", "Akwa-ibom", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross-rivers", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "Imo","Kaduna", "Kano", "Kastina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nassarawa", "Ogun", "Osun", "Oyo", "Ogun", "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara", "Abuja");
$statesLength = count($states);
/*echo "<select>";
for($i = 0; $i < $statesLength; $i++){
    echo "<option id='$states[$i]'> $states[$i] </option>";
}
echo "</select>";
*/
?>
    <div class="wrapper">
        <header>
            <div class="cover">
                <div>
                    <div>Welcome: Admin</div>
                </div>
                <div>
                    <div></div>
                    <nav>
                        <a href="">Home</a>
                        <a href="">Upload</a>
                        <a href="">Upload</a>
                        <a href="">Upload</a>
                        <a href="">logout</a>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <aside>
                <div>
                    <div>
                        <div class="btn">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div>
                        <nav class="sidenav">
                            <button class="page1Btn"><a href="" >show page1</a></button>
                            <button class="page2Btn"><a href="">show page2</a></button>
                        </nav>
                    </div>
                </div>
            </aside>
            <!--start of section-->
            <section class="inner" id="page1">
                <h1>Page1</h1>
                <div>
                    <form action="">
                        <h3>Upload details of your Web search here</h3>
                        <div>
                            <div>
                                <div>
                                    <div><label for="state">State</label></div>
                                    <div><select name="state" id="state">
                                        <?php
                                        for($i = 0; $i < $statesLength; $i++){
                                            echo "<option id='$states[$i]'> $states[$i] </option>";
                                        }
                                        ?>
                                    </select></div>
                                </div> <!--CONTAINER FOR STATE TO BE ADDED-->
                                <div>
                                    <div><p>Type of house</p></div>
                                    <div><select name="housetype" id="">
                                        <option value="bungalow">bungalow</option>
                                        <option value="single storey"> Single Storey</option>
                                        <option value="duplex"> Duplex</option>
                                        <option value="mansion"> Mansion</option>
                                        <option value="estate"> Estate</option>
                                        <option value="three_storey"> three_storey</option>
                                    </select></div>
                                </div> <!--CONTAINER FOR TYPE OF HOUSE TO BE ADDED-->
                                <div>
                                    <div><label for="mode_of_house">mode_of_house</label></div>
                                    <div>
                                        <select name="mode" id="">
                                            <option value="land"> land</option>
                                            <option value="land_and_house"> land & house</option>
                                        </select>
                                    </div>
                                </div> <!--CONTAINER FOR MODE OF HOUSE TO BE ADDED-->
                            </div> <!--flex A-->

                            <div>
                                <div>
                                    <div><label for="lga">Lga</label></div>
                                    <div><input type="text" name="lga" id="lga"></div>
                                </div>
                                <div>
                                    <div><label for="no_of_bedrooms">Number of Bedrooms</label></div>
                                    <div>
                                        <select name="bedrooms" id="">
                                            <?php
                                        for($i = 1; $i <= 7; $i++){
                                            echo "<option value='$i'> $i </option>";
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div><label for="category">Category</label></div>
                                    <div>
                                        <select name="category" id="">
                                            <option value="sale"> for sale</option>
                                            <option value="rent"> For rent</option>
                                            <option value="lease"> For lease</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!--flex B-->

                            <div>
                                <div>
                                    <div><label for="address">Address</label></div>
                                    <div><input type="text" name="address"></div>
                                </div>
                                <div>
                                    <div><label for="price"> Price</label></div>
                                    <div><input type="text" name="price" id="price"></div>
                                </div>
                                
                                <div>
                                    <div><label for="upload">Upload a descriptive image</label></div>
                                    <div>
                                        <input type="file" name="pics" id="">
                                    </div>
                                </div>
                            </div> <!--flex C-->

                            
                        </div>
                        <div>
                            <div>
                                <div></div>
                                <div>
                                    <button type="submit" name="add">Add</button>
                                </div>
                            </div>
                        </div> <!--2ND DIV IN THE FORM-->
                    </form>
                </div>
            </section>
            <!--End of section-->
            
            <!--start of section-->
            <section class="inner page2" id="page2">
                <h1>Page 2</h1>
                <div>
                    <form action="">
                        <h3>Upload details of your Web search here</h3>
                        <div>
                            <div>
                                <div>
                                    <div><label for="state">State</label></div>
                                    <div><select name="state" id="state">
                                        <?php
                                        for($i = 0; $i < $statesLength; $i++){
                                            echo "<option id='$states[$i]'> $states[$i] </option>";
                                        }
                                        ?>
                                    </select></div>
                                </div> <!--CONTAINER FOR STATE TO BE ADDED-->
                                <div>
                                    <div><p>Type of house</p></div>
                                    <div><select name="housetype" id="">
                                        <option value="bungalow">bungalow</option>
                                        <option value="single storey"> Single Storey</option>
                                        <option value="duplex"> Duplex</option>
                                        <option value="mansion"> Mansion</option>
                                        <option value="estate"> Estate</option>
                                        <option value="three_storey"> three_storey</option>
                                    </select></div>
                                </div> <!--CONTAINER FOR TYPE OF HOUSE TO BE ADDED-->
                                <div>
                                    <div><label for="mode_of_house">mode_of_house</label></div>
                                    <div>
                                        <select name="mode" id="">
                                            <option value="land"> land</option>
                                            <option value="land_and_house"> land & house</option>
                                        </select>
                                    </div>
                                </div> <!--CONTAINER FOR MODE OF HOUSE TO BE ADDED-->
                            </div> <!--flex A-->

                            <div>
                                <div>
                                    <div><label for="lga">Lga</label></div>
                                    <div><input type="text" name="lga" id="lga"></div>
                                </div>
                                <div>
                                    <div><label for="no_of_bedrooms">Number of Bedrooms</label></div>
                                    <div>
                                        <select name="bedrooms" id="">
                                            <?php
                                        for($i = 1; $i <= 7; $i++){
                                            echo "<option value='$i'> $i </option>";
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div><label for="category">Category</label></div>
                                    <div>
                                        <select name="category" id="">
                                            <option value="sale"> for sale</option>
                                            <option value="rent"> For rent</option>
                                            <option value="lease"> For lease</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!--flex B-->

                            <div>
                                <div>
                                    <div><label for="address">Address</label></div>
                                    <div><input type="text" name="address"></div>
                                </div>
                                <div>
                                    <div><label for="price"> Price</label></div>
                                    <div><input type="text" name="price" id="price"></div>
                                </div>
                                
                                <div>
                                    <div><label for="upload">Upload a descriptive image</label></div>
                                    <div>
                                        <input type="file" name="pics" id="">
                                    </div>
                                </div>
                            </div> <!--flex C-->

                            
                        </div>
                        <div>
                            <div>
                                <div></div>
                                <div>
                                    <button type="submit" name="add">Add</button>
                                </div>
                            </div>
                        </div> <!--2ND DIV IN THE FORM-->
                    </form>
                </div>
            </section>
            <!--End of section-->
            
        </main>
    </div>
</body>
    <!-- <script>
        let xhr = new XMLHttpRequest();
        xhr.open("GET","addform.php",true);
        xhr.onload = function(){

        }
        xhr.send();
    </script> -->
    <script>
        let page1Btn= document.querySelector(".page1Btn"),
        page2Btn= document.querySelector(".page2Btn"),
        page1Box= document.querySelector("#page1"),
        page2Box= document.querySelector("#page2");

        page2Box.style.display = "none";

        function page1(){

            page1Box.style.display = "block";
            page2Box.style.display = "none";
            console.log('Page 1');
        }

        function page2(){

            page1Box.style.display = "none";
            page2Box.style.display = "block";
            console.log('Page 2');

        }
        page1Btn.addEventListener("click", page1);
        page2Btn.addEventListener("click", page2);
        
        
    </script>
</html>