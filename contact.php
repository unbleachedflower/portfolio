<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css"/>
    
    <title>Contact</title>
   

  </head>

  <body>

    <!-- HERO -->
    <div class="hero">
      <?php include("header.php");?>
      <div class="row contact">

        <div class="col-md-6">
          <h1>Contact </h1>
          <form>
            <p>Name</p>
              <input type="text" name="name" placeholder="John Applause"><br><br>
            <p>Email</p>
              <input type="email" name="email" placeholder="japp@gmail.com"><br><br>
            <p>Message</P><br>
              <textarea name="message" placeholder="Please leave your note here and I'll contact you." rows="10" cols="30"></textarea><br><br>
              <input id="saveGame" type="submit" name="submit" value="Submit" style="color:white">
          </form><br>
          
        </div>

          <div class="col-md-6">
            <h3>Messages</h3>
            <section id="confirmation"></section>
            <section id="allGames"></section>
          </div>
          
      </div>
    </div>



    <?php include("footer.php");?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax.js" type="text/javascript"></script>
  </body>

</html>