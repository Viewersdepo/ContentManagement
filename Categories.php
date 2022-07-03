<?php require_once("Includes/DB.php");?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CMS</title>
        <!-- CSS Only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="./CSS/Style.css">
    </head>
    <body>
        <!--NAVBAR-->
        <div style="height: 10px;background: #27b5c8 ;"></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container">
                <a href="#" class="navbar-brand white-link">Uzo.Com</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarcollapseCMS">
                    <span class="navbar-toggler-icon"></span>
                </button>
                            <!-- start collapse div -->
                <div class="collapse navbar-collapse" id="navbarcollapseCMS">
                <ul class="navbar-nav float-sm-left">
                    <li class="nav-item">
                        <a href="MyProfile.php" class="nav-link ">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="Dashboard.php" class="nav-link ">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="Posts.php" class="nav-link">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a href="Categories.php" class="nav-link 
                        ">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="Admins.php" class="nav-link">Manage Admins</a>
                    </li>
                    <li class="nav-item">
                        <a href="Comments.php" class="nav-link">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a href="Blog.php?page1" class="nav-link ">Live Blog</a>
                    </li> 
                </ul>
                <ul class="navbar-nav float-sm-right">
                    <li class="nav-item "><a href="Logout.php" class="nav-link">Logout</a></li>
                </ul>
                <!-- End collapse div -->
                </div>
            </div>
        </nav>
        <div style="height: 10px;background:#27aac1 ;"></div>

        <!-- Header -->
        <header class="bg-dark text-white py-3">    
            <div class="container row bg-dark text-white">
                <div class="col-md-12">
                    <h1><i class="fas fa-edit" style="color: #27aac1;"></i> Manage Categories</h1>
                </div>
            </div>
        </header>
        <!-- End Header -->


        <!-- Main Area -->
        <section class="container py-2 mb-4">
                <div class="row">
                    <div class="offset-md-1 col-md-10" style="min-height:400px;">
                        <form class="" action="Categories.php" method="post">
                            <div class="card mb-3">
                                <div class="card-header bg-secondary text-light">
                                    <h1>Add New Category</h1>
                                </div>
                                <div class="card-body bg-dark">
                                    <div class="form-group">
                                        <label for="title"> <span class="FieldInfo">Category Title: </span></label>
                                         <input class="form-control" type="text" name="Title" id="title" placeholder="Type title here" value="" >
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <a href="Dashboard.php" class="btn btn-warning btn-block btn-lg"><i class="fas fa-arrow-left"></i>Back To Dashboard</a>

                                        </div>
                                        <div class="col-lg-6">
                                            <button type="button" name="Submit" class="btn btn-success btn-block btn-lg">
                                                <i class="fas fa-check"></i>Publish
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
        </section>
        
        <!-- EndMain Area -->

        
        <!-- FOOTER -->
        <footer class="bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="lead text-center">Theme By | Uzydev | <span id="year"></span>&copy; ----All right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <div style="height: 10px;background:#27aac1 ;"></div>
        
        <!--Javascript and JQuery Only-->
            <script 
            src="https://kit.fontawesome.com/57f866e821.js" crossorigin="anonymous">

            </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script>
            $('#year').text(new Date().getFullYear());
        </script>
            </body>
</html>