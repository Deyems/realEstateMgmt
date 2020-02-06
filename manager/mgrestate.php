<?php
    $conn = mysqli_connect("localhost","root","","estate_mgmt_data");
    if(!$conn){
        echo "Not connected to database".mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <title>Estate MGR</title>
</head>
<body>
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
                            <button class="linker"><a href="" >Add to Search</a></button>
                            <button class="linker"><a href="" class="linker">Page Settings</a></button>
                            <button class="linker"><a href="" class="linker">Added Information</a></button>
                            <button class="linker"><a href="" class="linker">Add New Page</a></button>
                            <button class="linker"><a href="" class="linker">Footer</a></button>
                        </nav>
                    </div>
                </div>
            </aside>
            <section class="inner">
                <h1>Main Content Comes here</h1>
                <div>
                    <form method="post" enctype="multipart/form-data">
                        <h3>Upload details of your Web search here</h3>
                            <?php
                                if(isset($_POST["add"])){
                                    function check($data){
                                        $data = stripslashes($data);
                                        $data = strip_tags($data);
                                        $data = trim($data);
                                        $data = htmlspecialchars($data);
                                        $data = strtolower($data);
                                        return $data;
                                    }
                                    $state = $_POST["state"];
                                    $house_type = strtolower($_POST["housetype"]);
                                    $mode = $_POST["mode"];
                                    $lga = check($_POST["lga"]);
                                    $bedrooms = $_POST["bedrooms"];
                                    $category = $_POST["category"];
                                    $address = check($_POST["address"]);
                                    $price = intval((check($_POST["price"])));

                                    $desc_pic_name = $_FILES["pics"]["name"];
                                    $desc_pic_type = $_FILES["pics"]["type"];
                                    $desc_pic_tmpname = $_FILES["pics"]["tmp_name"];
                                    $desc_pic_error = $_FILES["pics"]["error"];
                                    $desc_pic_size = $_FILES["pics"]["size"];

                                    $allowed = array("jpeg","jpg","png","gif");
                                    $directory = "../images/";
                                    $file_unique_name = uniqid();
                                    // echo "<br>";
                                    echo $ext = strtolower(end(explode('.',$desc_pic_name)));
                                    $desc_pic_new_name = $file_unique_name.'.'.$ext;
                                    
                                    if(!$desc_pic_name){
                                        echo "No image selected for Illustration";
                                    }

                                    if(in_array($ext,$allowed)){
                                        if($desc_pic_error === 0){
                                            if($desc_pic_size<=1000000){
                                                
                                                $targetfile = $directory.$desc_pic_new_name;
                                                move_uploaded_file($desc_pic_tmpname,$targetfile);
                                            } else{echo "file size is too large";}
                                        } else{echo "Error in uploading file";}
                                    } else{echo "Extension not allowed!";}

                                    if(empty($address)&& empty($price) && empty($lga)){
                                        echo "You have not entered either the lga, address or Price";
                                    } else{
                                        $sql = "INSERT INTO search_info(id,pixs,address,house_type,mode,lga,state,category,no_of_bedrooms,price) 
                                        VALUES(null,'$desc_pic_new_name','$address','$house_type','$mode','$lga','$state','$category','$bedrooms','$price')";
                                        $sql_query = mysqli_query($conn,$sql);
                                        if(!$sql_query){
                                            echo "Error: ".mysqli_error($conn);
                                        }else{
                                            echo "You have added to your estate listings";
                                        }
                                    } // TO ASCERTAIN THE FIELDS ARE NOT EMPTY
                                }
                            ?>
                        <div>
                            
                            <div>
                                <div>
                                    <div><label for="state">State</label></div>
                                    <div><select name="state" id="state">
                                        <option value="abia">Abia</option>
                                        <option value="adamawa">Adamawa</option>
                                        <option value="akwa-ibom">Akwa-ibom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="bayelsa">bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross-rivers">Cross-rivers</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="kaduna">kaduna</option>
                                        <option value="kano">kano</option>
                                        <option value="katsina">katsina</option>
                                        <option value="kebbi">kebbi</option>
                                        <option value="kogi">kogi</option>
                                        <option value="kwara">kwara</option>

                                        <option value="Lagos">Lagos</option>
                                        <option value="nassarawa">nassarawa</option>
                                        
                                        <option value="ogun">ogun</option>                                <option value="ondo">ondo</option>
                                        <option value="osun">osun</option>
                                        <option value="oyo">oyo</option>
                                        <option value="ogun">ogun</option>
                                        <option value="plateau">plateau</option>
                                        <option value="rivers">rivers</option>
                                        
                                        <option value="sokoto">sokoto</option>
                                        <option value="taraba">taraba</option>
                                        <option value="yobe">yobe</option>
                                        <option value="Zamfara">Zamfara</option>
                                        
                                        <option value="Abuja">Abuja</option>
                                        
                                        <option value="abia">Abia</option>
                                        <option value="abia">Abia</option>
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
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            <option value="7"> 7</option>
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

            <section style="display:none;" class="inner">
                <h1>Second Main Content Comes here</h1>
                <div>
                    <form action="">
                        <h3>Upload details of your Web search here</h3>
                        <div>
                            <div>
                                <div>
                                    <div><label for="state">State</label></div>
                                    <div><select name="state" id="state">
                                        <option value="abia">Abia</option>
                                        <option value="adamawa">Adamawa</option>
                                        <option value="akwa-ibom">Akwa-ibom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="bayelsa">bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross-rivers">Cross-rivers</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="kaduna">kaduna</option>
                                        <option value="kano">kano</option>
                                        <option value="katsina">katsina</option>
                                        <option value="kebbi">kebbi</option>
                                        <option value="kogi">kogi</option>
                                        <option value="kwara">kwara</option>

                                        <option value="Lagos">Lagos</option>
                                        <option value="nassarawa">nassarawa</option>
                                        
                                        <option value="ogun">ogun</option>                                <option value="ondo">ondo</option>
                                        <option value="osun">osun</option>
                                        <option value="oyo">oyo</option>
                                        <option value="ogun">ogun</option>
                                        <option value="plateau">plateau</option>
                                        <option value="rivers">rivers</option>
                                        
                                        <option value="sokoto">sokoto</option>
                                        <option value="taraba">taraba</option>
                                        <option value="yobe">yobe</option>
                                        <option value="Zamfara">Zamfara</option>
                                        
                                        <option value="Abuja">Abuja</option>
                                        
                                        <option value="abia">Abia</option>
                                        <option value="abia">Abia</option>
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
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            <option value="7"> 7</option>
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

            <section style="display:none;" class="inner">
                <h1>2nd to last Main Content Comes here</h1>
                <div>
                    <form action="">
                        <h3>Upload details of your Web search here</h3>
                        <div>
                            <div>
                                <div>
                                    <div><label for="state">State</label></div>
                                    <div><select name="state" id="state">
                                        <option value="abia">Abia</option>
                                        <option value="adamawa">Adamawa</option>
                                        <option value="akwa-ibom">Akwa-ibom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="bayelsa">bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross-rivers">Cross-rivers</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="kaduna">kaduna</option>
                                        <option value="kano">kano</option>
                                        <option value="katsina">katsina</option>
                                        <option value="kebbi">kebbi</option>
                                        <option value="kogi">kogi</option>
                                        <option value="kwara">kwara</option>

                                        <option value="Lagos">Lagos</option>
                                        <option value="nassarawa">nassarawa</option>
                                        
                                        <option value="ogun">ogun</option>                                <option value="ondo">ondo</option>
                                        <option value="osun">osun</option>
                                        <option value="oyo">oyo</option>
                                        <option value="ogun">ogun</option>
                                        <option value="plateau">plateau</option>
                                        <option value="rivers">rivers</option>
                                        
                                        <option value="sokoto">sokoto</option>
                                        <option value="taraba">taraba</option>
                                        <option value="yobe">yobe</option>
                                        <option value="Zamfara">Zamfara</option>
                                        
                                        <option value="Abuja">Abuja</option>
                                        
                                        <option value="abia">Abia</option>
                                        <option value="abia">Abia</option>
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
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            <option value="7"> 7</option>
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

            <section style="display:none;" class="inner">
                <h1>Last Main Content Comes here</h1>
                <div>
                    <form action="">
                        <h3>Upload details of your Web search here</h3>
                        <div>
                            <div>
                                <div>
                                    <div><label for="state">State</label></div>
                                    <div><select name="state" id="state">
                                        <option value="abia">Abia</option>
                                        <option value="adamawa">Adamawa</option>
                                        <option value="akwa-ibom">Akwa-ibom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="bayelsa">bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross-rivers">Cross-rivers</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="kaduna">kaduna</option>
                                        <option value="kano">kano</option>
                                        <option value="katsina">katsina</option>
                                        <option value="kebbi">kebbi</option>
                                        <option value="kogi">kogi</option>
                                        <option value="kwara">kwara</option>

                                        <option value="Lagos">Lagos</option>
                                        <option value="nassarawa">nassarawa</option>
                                        
                                        <option value="ogun">ogun</option>                                <option value="ondo">ondo</option>
                                        <option value="osun">osun</option>
                                        <option value="oyo">oyo</option>
                                        <option value="ogun">ogun</option>
                                        <option value="plateau">plateau</option>
                                        <option value="rivers">rivers</option>
                                        
                                        <option value="sokoto">sokoto</option>
                                        <option value="taraba">taraba</option>
                                        <option value="yobe">yobe</option>
                                        <option value="Zamfara">Zamfara</option>
                                        
                                        <option value="Abuja">Abuja</option>
                                        
                                        <option value="abia">Abia</option>
                                        <option value="abia">Abia</option>
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
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            <option value="7"> 7</option>
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
        let linkbox= document.querySelectorAll(".linker");
        let mainCon = document.querySelectorAll(".inner");
        for(let i=0; i<linkbox.length; i++){
            // let currentlink = i;
            linkbox[i].addEventListener("click", show);
            function show(){
                // e.preventDefault();
                mainCon[i].style.display = "block";
                for(let $j=0; )
            }
            function hide(){
                while(i!=others){
                    mainCon[others].style.display = "none";
                }
            }
            // while(){

            // }
        }
        
        
    </script>
</html>