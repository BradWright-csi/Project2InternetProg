<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title></title>
    <style>
      ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
      }

      li {
      float: left;
     }

      li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      }

      li a:hover:not(.active) {
      background-color: #111;
     }

     .active {
      background-color: #04AA6D;
      }
</style>
</head>
<body>
  <?php 
function navBar($title, $img)
{
  echo<<<EOT
      <div class="wrapper">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <img src="$img"  alt="Logo" style="width:700px;height:400px;" >
               <h2 class="mt-2">$title</h2>
               <div class="menu">
                  <ul>
                     <li><a href="./index.php">About</a></li>
                     <li><a href="./gallery.html">Gallery</a></li>
                     <li><a href="#">Quote</a></li>
                     <li><a href="#">Order</a></li>
                     <li><a href="#">Design</a></li>
                     <li><a href="./loginPage.php">Log In</a></li>
                     <li><a href="./signUp.php">Sign Up</a></li>
                     <li><a href="./signOut.php">Log Out</a></li>
                  </ul>
               </div>
            </nav>
         </header>
      </div>
   EOT;
   }
  
      ?>
   </body>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>