     <?php
     session_start();

     if (!isset($_SESSION["username"])) {
          header("Location: login.php");
         
     }else{?>
          <!DOCTYPE html>
          <html lang="en">
          <head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="style.css">
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
               <title>REMEMBER ME</title>
          </head>
          <body>
               <div class="navbar">
                    <div class="logo">
                         <a href=""> <?php echo $_SESSION["username"] ?></a>
                    </div>
                    <div class="navs">
                         <ul>
                              <li><a href="index.php">Home</a></li>
                              <li><a href="blog.php">Blog</a></li>
                              <li><a href="contact.php">Contact</a></li>
                         </ul>
                         <div class="nav-btns">
                              <a href="logout.php">Logout</a>

                         </div>
                    </div>
               </div>
                    <h2>Blog Page</h2><br><br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sequi ullam,<br> asperiores iure dolore eligendi voluptates sint quo enim optio tempora natus laboriosam suscipit adipisci in qui aut, nihil exercitationem saepe?<br> Voluptatem obcaecati reiciendis optio. Pariatur incidunt labore soluta quidem.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <footer>

                         <p>hjabfjhe</p>
                         <p>hjabfjhe</p>
                         <p>hjabfjhe</p>
                         <p>hjabfjhe</p>


                         <div class="brands">
                              <i class="fa-brands fa-facebook"></i>
                              <i class="fa-brands fa-instagram"></i>
                              <i class="fa-brands fa-youtube"></i>
                              <i class="fa-brands fa-telegram"></i>
                         </div>
                    </footer>
          </body>
          </html>
<?php
}
?>