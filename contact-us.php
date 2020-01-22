<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="Incognito Consulting">
    <meta name="author" content="INITS Limited">
    <link rel="shortcut icon" type='image/x-icon' href="favicon.ico" />


    <title>Contact us: Incognito Consulting</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- <link rel="stylesheet" href="assets/handleSubmit.php" /> -->
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto&display=swap" rel="stylesheet">


</head>

<body>

    <!-- menu navigation -->


    <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><img src="assets/img/incognito_logo.png" alt="INCOGNITO Logo"
                class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">HOME
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <div class="dropdown">
                        <div class="nav-link dropdown-toggle" data-toggle="dropdown">TECHNICAL
                        SERVICES
                            
                        </div>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu dropright">
                                <a class="test dropdown-item dropdown-toggle" tabindex="-1" href="#">Enterprise Networking<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="structured-cabling-and-support.html" class="dropdown-item">Structured Cabling & Support</a></li>
                                    <li><a tabindex="-1" href="network-design.html" class="dropdown-item">Network Design</a></li>
                                    <li><a tabindex="-1" href="network-management.html" class="dropdown-item">Network Management</a></li>
                                    <li><a tabindex="-1" href="wireless-solution.html" class="dropdown-item">Wireless Solutions</a></li>
                                    <li><a tabindex="-1" href="collaboration-solutions.html" class="dropdown-item">Collaboration Solutions</a></li>
                                   
                                </ul>
                            </li>
                            
                            <li><a tabindex="-1" href="managed-it-services.html" class="dropdown-item">Managed it services</a></li>
                            <li><a tabindex="-1" href="endpoint-and-network-security.html" class="dropdown-item">Endpoint and Network Security</a></li>
                            <li><a tabindex="-1" href="internet-of-things.html" class="dropdown-item">Internet of Things</a></li>
                            
                        </ul>
                </div>

                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="project-management.html" data-toggle="dropdown">PROJECT
                        MANAGEMENT</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="project-management-consulting.html">project Management
                            Consulting</a>
                        <a class="dropdown-item" href="project-management-training.html">Project Management
                            Training</a>
                        

                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="process-improvement.html">PROCESS IMPROVEMENT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.html">ABOUT US</a>
                </li>
            </ul>
        </div>

    </nav>

    <!-- SHOWCASE -->

    <section class="contact-us-header">
        <div class="overlay slider_content">
            <!-- rotating vector -->
            <div class="vector_fil">
                <img src="assets/img/line_vector_gr.svg">

            </div>
            <div class="vector_fil_wt">
                <img src="assets/img/line_vector_wt.svg">

            </div>

            <div class="container">

                <div class=" showcase-title">


                    <h5>CONTACT US</h5>
                    <h3 class="display-4 font-weight-normal">Find out where to meet up
                        <br> and talk to us.</h3>
                    <p>We will go wherever we are needed! </p>


                </div>

            </div>


        </div>


    </section>


    <section class="contact-form">
        <div class="container">
            <div class="vector_icon_contact">
                <img src="assets/img/vector_about.svg">

            </div>

            
            
            <div class="mt-5">
                <h1 class="featurette-heading">Hi. Tell us about your project.</h1>
                <p class="lead">Fill out our form below or send us an email</p>
            </div>

            <!-- form -->
        <?php require_once('handleSubmit.php') ?>
            <form method="POST">

                <input name="company_name" type="text" class="form-control" id="inputtext" placeholder="Company name" required>
                <input name="name" type="text" class="form-control mt-4" id="inputtext" placeholder="Your name" required>
                <input name="number" type="number" class="form-control mt-4" id="inputmobileno" placeholder="Mobile No" required>
                <input name="email" type="email" class="form-control mt-4" id="inputEmail" placeholder="Email Address" required>

                <textarea name="message" class="form-control mt-4" rows="10" id="validationTextarea"
                    placeholder="Tell us about your project (scope, timeline, budget, etc)" required></textarea>

                <button name="submit" type="submit" class="mt-4 btn btn-default " data-toggle="modal"
                    data-target="#myModal">Submit</button>

            </form>

           


        </div>


        </div>

    </section>



    <!-- contact -->
    <section class="page-section-home">

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="services_section">
                        <div class="section_content">
                            <div class="our_contact">
                                <h1>Let’s Talk</h1>
                                <p>Tell us about your next project</p>
                                <div class="mt-5">
                                    <a class="mt-5" href="#">start@incognito-africa.com</a>

                                </div>


                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="services_section">
                        <div class="section_content">
                            <div class="our_contact">
                                <h1>Contact</h1>
                                <p>+234 (0) 802 222 8224 <br>
                                    +234 (0) 802 222 5549</p>
                                <a href="#">hello@incognito-africa.com</a>

                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="services_section">
                        <div class="section_content">
                            <div class="our_contact">
                                <h1>Our Office</h1>
                                <p>No 40 Fola Osibo Lekki <br>phase 1, Lagos Nigeria<br></p>


                            </div>




                        </div>
                    </div>

                </div>

            </div>



    </section>


    <!-- footer -->
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/img/incognito_logo_col.svg">
                    <p class="mt-3">No 40 Fola Osibo<br> Lekki phase 1,
                        Lagos<br> Nigeria</p>
                    <!-- <div class="social_icons mt-2">
                        <img src="assets/img/fb.svg" alt="facebook">
                        <img src="assets/img/tw.svg" alt="twitter">
                        <img src="assets/img/LinkedIn.svg" alt="Linkedin">
                    </div> -->

                </div>
                <div class="col-md-7">
                    <div>
                        <h4>Get in Touch </h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p>+234 (0) 802 222 5549</p>
                                <p>+234 (0) 802 222 8224</p>


                            </div>
                            <div class="col-md-6">
                                <p>hello@itech-africa.com</p>
                            </div>

                        </div>
                        <div class="mt-5">
                            <h4>Explore</h4>
                            <div class="footer_links">
                                <div class="">
                                    <a href="process-improvement.html">Process
                                        Improvement</a>

                                </div>
                                <div class="">
                                    <a href="project-management.html">Project
                                        management</a>

                                </div>
                                <div class="">
                                    <a href="technical-services.html">Technical
                                        Services</a>

                                </div>
                                <div class="">
                                    <a href="about.html">About</a>

                                </div>
                                <div class="">
                                    <a href="contact-us.html">Contact</a>
                                </div>

                            </div>
                            <p class="mt-5">© 2019 Incognito IT Technologies Limited. All rights reserved.</p>


                        </div>


                    </div>


                </div>


            </div>

    </footer>










    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script src="assets/js/owl.carousel.min.js "></script>
    <script src="assets/js/nav-bar.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

</body>

</html>