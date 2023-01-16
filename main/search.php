<?php include('partials-front/menu.php'); ?>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="flood-search text-center">
        <div class="container">
            <?php
              $search = $_POST['search'];
            ?>
            <h2>Result Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Search Result</h2>

                <?php
                 
                
                 $sql = "SELECT * FROM tbl_footwear WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

                 $res = mysqli_query($conn, $sql);

                 $count = mysqli_num_rows($res);

                 if($count>0)
                 {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image_name = $row['image_name'];
                        ?>
                         <div class="footwear-menu-box">
                        <div class="footwear-menu-img">
                            <?php 

                               if($image_name=="")
                               {
                                  echo "<div class='error'>Image not Available</div>";
                               }
                               else
                               {
                                ?>

                                <img src="<?php echo SITEURL;?>images/footwear/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                  <?php


                               }
                            ?>
                    
                </div>

                <div class="footwear-menu-desc">
                    <h4><?php echo $title; ?></h4>
                    <p class="footwear-price"><?php echo $title; ?></p>
                    <p class="footwear-detail">
                        <?php echo $description; ?>
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

                        <?php
                    }
                 }
                 else
                 {
                    echo "<div class='error'>sorry, not found</div>";
                 }

            ?>
           


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>