<!DOCTYPE html>
<html lang="en">
<head>
   <title>Indian Bank - Make your Payment Easy</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Bootstrap CSS-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Font Awesome Css-->
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
   <!--Google Font-->
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <!--Start Navigation-->
    <nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
        <a class="navbar-brand" href="index.php">Indian Bank</a>
        <span class="navbar-text">Safe Payment with Us</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="customers.php">Customers</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="transactions.php">Transfer History</a></li>
            </ul>
         </div>
    </nav>
    <!--End Navigation-->
    <!--Start Video Background-->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/backvid.mp4">
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Welcome to Indian Bank</h1>
            <small class="my-content">Easy Transfer</small><br>
            <a href="customers.php" class="btn btn-danger">Transfer Money</a>   
        </div>
    </div>
    <!--End Video Background-->
    <!--Start Contact Us-->
    <div class="container mt-4" id="Contact">
        <!--Start Contact Us Container-->
        <h2 class="text-center mb-4">Contact US</h2>
        <!--Contact us heading-->
        <div class="row">
            <form action="" method="POST">
                <input type="text" class="form-control" name="name" placeholder="Name"><br>
                <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                <textarea class="form-control" name="message" placeholder="How Can We Help You?" style="height: 150px;"></textarea><br>
                <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
            </form>
        </div>
        <!--End Contacty US Form-->
        <div class="col-md-4 stripe text-white text-center">
            <h4>Indian Bank</h4> 
            <p>Indian Bank, Near BIT Campus , Mathur, <br> Trichirappalli-620024 <br> www.indianbank.com</p> 
        </div>
    </div>
    <!--End Contact US Container-->
    <!--End Contact US-->
    <!--Start Footer-->
    <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2021 || Designed By Aashika||Admin Login</small>
    </footer>
    <!--End Footer-->
    <!-- JQuery and Bootstrap Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>
