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
        <title>Session web</title>
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

        <h1>Home Page</h1>
        <h3>Ferrari</h3>
        <div class="home-con">
            <img src="https://phantom-expansion.unidadeditorial.es/d99e9afff02c3ac173b6d6f827f3a551/crop/0x725/2043x1875/resize/828/f/webp/assets/multimedia/imagenes/2022/05/20/16530388017130.jpg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quas fuga cupiditate! Excepturi molestiae officia sint sit, voluptate perferendis modi earum, repudiandae, odio dignissimos nobis praesentium libero eveniet esse facere. Ratione beatae asperiores, repellat et ipsum laborum maiores aspernatur quasi libero pariatur voluptatum modi veritatis. Dolorum dolore, quos saepe ab cupiditate nam doloremque laboriosam commodi minus, ducimus iure eligendi aliquam necessitatibus praesentium tenetur quidem, quod recusandae architecto quam culpa? Pariatur.</p>
            <br><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dicta dignissimos nam aut sunt incidunt sapiente dolorum eum. Adipisci dicta atque laboriosam commodi! Velit perferendis, rem consequatur earum totam maiores, aperiam sapiente ea reiciendis sequi quasi maxime, ut veniam quod illo ab at cupiditate aliquam eos. Qui rerum, autem molestias voluptatum illo enim facilis excepturi libero quia, perferendis quidem similique.</p>
        </div>
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