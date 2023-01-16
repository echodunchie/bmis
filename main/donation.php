<?php include('partials-front/menu.php'); ?>

 <div class="clearfix"></div>
        </div>
    </section>

<h2 class="text-center">Location for Donation(buhi municipal hall)</h2>
    <section class="location text-center">
        <div class="container">
        </div>
    </section>


    <section class="flood-menu">
        <div class="container">
            <h2 class="text-center">send your donations to our</h2>

            <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/paypal.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <br><br>
    <h3 class="text-center"> or</h3>

                </div>
            </div>


    <section class="flood-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your Donation.</h2>

            <form action="#" class="order" method="POST">

    <?php
             if(isset($_SESSION['upload']))
             {
              echo $_SESSION['upload'];
              unset($_SESSION['upload']);
             }

    ?>

                
                <fieldset>
                    <legend>I will donate</legend>
                   
                    <div class="order-label">My Information</div>
                    <div class="order-label">First Name</div>
                    <input type="text" name="firstname" placeholder="E.g. Anna " class="input-responsive" required>

                    <div class="order-label">Last Name</div>
                    <input type="text" name="lastname" placeholder="E.g. Alcantara" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 0943xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. bsit2agmail.com" class="input-responsive" required>

                    <div class="order-label">Enter My Own Amount</div>
                    <input type="number" name="price" placeholder="enter the Amount of donation in peso" class="input-responsive" required>
                
                    <br><br>
                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                    

                    <input type="submit" name="submit" value="Confirm Donation" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


 </div>
</div>







              <?php
  
             if(isset($_POST['submit']))
             {
               $firstname = $_POST['firstname'];
               $lastname = $_POST['lastname'];
               $contact = $_POST['contact'];
               $email = $_POST['email'];
               $price = $_POST['price'];
                $address = $_POST['address'];
                  
                  $sql3 = "INSERT INTO donations SET
                         firstname = '$firstname',
                         lastname = '$lastname',
                         contact = '$contact',
                         email = '$email',
                         price = $price,
                         address = '$address'
                  ";  
  $res3 = mysqli_query($conn, $sql3);

                  if($res3==true)
                  {
                    $_SESSION['add'] = "<div class='success'>donations Added Successfully</div>";
                    
                  }
                  else
                  {
                    $_SESSION['add'] = "<div class='error'>Failed to add donation</div>";
                    header('location:'.SITEURL.'order.php');
                  }
         }

    ?>


            <div class="clearfix"></div>
        </div>
    </section>

    <!-- Navbar Section Ends Here -->




      <?php include('partials-front/footer.php'); ?>
    
 