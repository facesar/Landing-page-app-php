<?php
header('Content-Type:text/html;charset=utf-8');

include 'config_form_2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Data with PHP</title>
    <link rel="shortcut icon" href="./images/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="./styles/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/media-query.css" media="all and (min-width: 270px) and (max-width: 1600px)">
</head>
<body>

    <header class="header_component">
        <div class="container mt-3">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="https://facesar.netlify.app/#en">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="../form/demo.php">Functions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../upload/index.php">Examples</a>
                    </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end icons">
                        <li>
                            <a href="https://www.instagram.com/rostran.fabio/" class="instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/FabioRostran" class="twitter"><i class="fab fa-twitter twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/fabio-rostran-631093214/" class="linkedin"><i class="fab fa-linkedin-in linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container mt-4">
                <div class="row mobil">
                    <div class="col text-center">
                        <div class="mt-5">
                            <h1 class="butter">Butterfly</h1>
                            <p class="fs-5 lh-base">are insects in the macrolepidopteran clade Rhopalocera from the order Lepidoptera, which also includes moths.</p>

                            <a href="https://facesar.netlify.app/#en"><button type="button" class="btn btn-outline-secondary">Read About Me</button></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="video">
                            <video class="video" width="420" height="340" controls loop muted poster="poster.png">
                                <source src="./images/butterfly.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
    </header>
   
    <section class="section">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row" role="listbox">
                    <div class="carousel-item col-md-4 active">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_2.jpg" class="card-img-top" alt="crowned hairstreak butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Crowned Hairstreak</h5>
                                <p class="card-text">The crowned hairstreak is found from southern Mexico to Ecuador. It is a very rare butterfly</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">view more</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_3.jpg" class="card-img-top" alt="blue morpho butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Blue Morpho</h5>
                                <p class="card-text">The blue morpho butterfly is found in central and south America, along with Mexico and Venezuela</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop_2">view more</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_4.jpg" class="card-img-top" alt="checkerspot butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Checkerspot</h5>
                                <p class="card-text">The Bay checkerspot is a butterfly endemic to the San Francisco.It is a federally threatened species</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop_3">view more</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_5.jpg" class="card-img-top" alt="Clubtail butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Clubtail</h5>
                                <p class="card-text">The common clubtail butterfly is found from the Nicobar Islands and Assam in India, east to Hainan in China</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop_4">view more</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_6.jpg" class="card-img-top" alt="Claudina butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Claudina</h5>
                                <p class="card-text">ClaudinaAgriasis found from Venezuela and Guyana to Bolivia.It is found rainforest at altitudes between 200 and 600 meters</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop_5">view more</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_7.jpg" class="card-img-top" alt="Indian Leaf butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Indian Leaf</h5>
                                <p class="card-text">The Indian Leaf butterfly also called the orange oakleaf, Indian oakleaf, is found in Tropical Asia from India to Japan</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop_6">view more</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_8.jpg" class="card-img-top" alt="Moon Dust butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Moon Dust</h5>
                                <p class="card-text">The adults are quite social and their abundance varies greatly. The flight period of the black-veined white is between April and July.</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop_7">view more</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_9.jpg" class="card-img-top" alt="Monarch butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Monarch</h5>
                                <p class="card-text">Monarch butterfly is most familiar North American butterfly, and is considered an iconic pollinator species.</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop_8">view more</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./images/image_10.jpg" class="card-img-top" alt="Cyanea butterfly">
                            <div class="card-body">
                                <h5 class="card-title">Cyanea</h5>
                                <p class="card-text">The cyanea butterfly found in the Indonesia, Papua New Guinea, the Solomon Islands and Australia.Females are white</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop_9">view more</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row aling-items-center">
                <div class="col">
                    <div class="col-md-12 result">
                        <?php 
                            echo strtoupper($title);
                            ?>
                        <p>
                                <?php
                                echo ucwords($name);
                                echo '<br>';
                                echo $email;
                                echo '<br>';
                                echo ucwords($comment);
                                ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_main">

            <div class="container">
                <div class="mt-4 text-center">
                    <h1 class="butter mt-4">Write a Comment</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fs-5">Your Name</label>
                        <span class="form-label fs-5" style="color:red"><?php echo $name_Err;?></span>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="<?php echo ucwords($name)?>" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fs-5">Email address</label>
                        <span class="form-label fs-5" style="color:red"><?php echo $email_Err;?></span>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $email?>" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fs-5">Your Message</label>
                        <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your Comment Here"><?php echo ucwords($comment)?></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Send</button>
                </form>

                <div class="mt-4 text-center">
                    <h3 class="h3 fs-5">theme and desing by <a href="https://facesar.netlify.app/#en" target="_blank">Rostran Fabio</a></h3>
                </div>
            </div>            
    </section>

    <section>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">crowned hairstreak</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_2.2.jpg" class="rounded mx-auto d-block" alt="crowned hairstreak butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Blue Morpho</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_3.1.jpg" class="rounded mx-auto d-block" alt="blue morpho butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">checkerspot</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_4.1.jpg" class="rounded mx-auto d-block" alt="checkerspot butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_4" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Clubtail</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_5.1.jpg" class="rounded mx-auto d-block" alt="Clubtail butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_5" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Claudina</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_6.1.jpg" class="rounded mx-auto d-block" alt="Claudina butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_6" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Indian Leaf</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_7.1.jpg" class="rounded mx-auto d-block" alt="Indian Leaf butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_7" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Moon Dust</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_8.1.jpg" class="rounded mx-auto d-block" alt="Moon Dust butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_8" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Monarch</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_9.1.jpg" class="rounded mx-auto d-block" alt="Monarch butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop_9" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cyanea</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="./images/image_10.1.jpg" class="rounded mx-auto d-block" alt="Cyanea butterfly">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="./script/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="./script/slick.js"></script>
</body>
</html>