<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help the puppies!!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script>
    $('#carousel-indicator').carousel({});
</script> -->

</head>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">HelpUs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto px-5 text-center">
                <li class="nav-item px-3">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About us</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- caorosal -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pic1.jpg" class="d-block w-100" alt="Help me please">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="changeIt">Help me</h5>
                    <p class="changeIt">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pic2.jpg" class="d-block w-100" alt="Help me please">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="changeIt">I am cute</h5>
                    <p class="changeIt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pic3.jpg" class="d-block w-100" alt="help me plase">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="changeIt">Adopt me</h5>
                    <p class="changeIt">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> About Us</h2>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="pic6.jpg" alt="helpme" class="img-fluid editImg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Adopt to help them</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, doloribus? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, laboriosam!</p>
                    <a href="about.php" class="btn btn-outline-primary">Abou us</a>
                </div>
            </div>
        </div>
    </section>



    <section class="my-5 bg-light">
        <div class="py-5">
            <h2 class="text-center"> our Dogs</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card ">
                        <img src="pic6.jpg" class="card-img-top " alt="">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img src="pic1.jpg" class="card-img-top editCard" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img src="pic3.jpg" class="card-img-top editCard" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> Contact us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="POST">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Comments</label>
                    <textarea name="comments" id="" cols="30" rows="10" class="form-control" placeholder="comments"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>

    </section>


    <footer class="footer">
        <p class="text-center bg-dark text-white">Copywrite reserved</p>
    </footer>























</body>

</html>