<?php
$insert = false;
if(isset($_POST['fname']))
{
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
echo"ankit";
    // Collect post variables
	$fname=$_POST['fname'];
	$email=$_POST['email'];
    //$message=$_POST['message'];
    $mno=$_POST['mno'];
    $checkin=date('Y-m-d', strtotime($_POST['checkin']));
    $checkout=date('Y-m-d', strtotime($_POST['checkout']));
    $adult=$_POST['adult'];
    $selectoption=$_POST['selectoption'];
    $rooms=$_POST['rooms'];
  
    $sql="INSERT INTO `hotel`.`bookingform`( `fname`, `email`, `mno`, `checkin`, `checkout`, `adult`, `selectoption`, `rooms`, `dd`)
VALUES ('$fname','$email','$mno','$checkin', '$checkout','$adult','$selectoption','$rooms',current_timestamp())";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
	
    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  Contact Us Form  </title>
    <link rel="stylesheet" href="inquirystyle.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div>
<?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for booking </p>";
        }
    ?>
</div>

<div class="upar">
<h2>Booking/Inquiry form/Reviews</h2>
<img src="images/Untitled design.gif" alt="">
</div>

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Sector,52</div>
          <div class="text-two">Area 51</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">Loaftiltsinquiry@outlook.com</div>
          <div class="text-two">info.Loaftilts@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any inquiry please send message. We will get back to you soon. </p>
      <form action="#" >
        <div class="input-box">
          <input type="text"  id="fname" name="fname"placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="email"  id="email" name="email"placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
              <input type="text" id="message" name="message"  placeholder="Enter your message">
          
        </div>
        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>

   
  </div>
</div>
<div class="img">
  <img src="images/one.jpg" alt="">
  <div class="imgcontent">
    <h2>
      We Awaits you to create some memorable memories with us.
    </h2>

  </div>
</div>
<div>



<div class = "book">
  <form class = "book-form" action="form.php" method= "post">
    <div class="form-item">
      <label for = "name">Enter your name </label>
      <input type="text"  id="fname" name="fname">
    </div>
    <div class="form-item">
      <label for = "email">Enter your email </label>
      <input type="email"  id="email" name="email">
    </div>
    <div class="form-item">
      <label for = "phone"> mobile no.  </label>
      <input type="text"  id="mno" name="mno" >
    </div>
      <div class = "form-item">
          <label for = "checkin-date">Check In Date: </label>
          <input type = "date" id = "checkin" name="checkin" >
      </div>
      <div class = "form-item">
          <label for = "checkout-date">Check Out Date: </label>
          <input type = "date" id = "checkout" name="checkout" >
      </div>
      <div class = "form-item">
          <label for = "adult">Members </label>
          <input type = "number" min = "1" value = "1" id = "adult"  name="adult" >
      </div>
      <div class = "form-item">
          <label for = "children">Price: </label>
          <select name="selectoption" id="selectoption">
            <option value="zero">--Select--</option>
            <option value="first">2299-3399 single</option>
             <option value="second">4999-6000 double</option>
             <option value="third">6666-9999 luxurious/quad</option>
          </select>
          
      </div>
      
      <div class = "form-item">
          <label for = "rooms">Rooms: </label>
          <input type = "number" min = "1" value = "1" id = "rooms" name="rooms">
      </div>
      <div class = "form-item">
          <input type = "submit" class = "btn" value = "Book Now">
      </div>
  </form>
</div>

<div class="testimonials">
  <div class="inner">
    <h1>Reviews</h1>
    <div class="border"></div>

    <div class="row">
      <div class="col">
        <div class="testimonial">
          <img src="images/p3.png" alt="">
          <div class="name">Captain Marvel</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          </p>
        </div>
      </div>

      <div class="col">
        <div class="testimonial">
          <img src="images/p2.png" alt="">
          <div class="name">Black widow</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          </p>
        </div>
      </div>

      <div class="col">
        <div class="testimonial">
          <img src="images/p1.png" alt="">
          <div class="name">Chris Evans</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
 

</body>
</html>

