<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,300,400,500,700,900" rel="stylesheet">

    <title>Campus Hero | Ureckon 2019</title>

    <style>
        body {
            font-family: 'Fira Sans', sans-serif;
            height: auto;
            width: 100vw;
            border: 0;
            margin: 0;
            padding: 0 !important;
            overflow-x: hidden;
        }

        .navbar-brand{
            color: #fc2c77;
            font-size: 1.35rem;
            font-weight: 500;
        }

        .nav-item {
            padding: 1.5vh 1.2vw !important;
            font-size: 1.25rem;
            font-weight: 300;
        }

        .homes{
            height: auto;
            background: linear-gradient(to top right,#fc144e 0%,#6c4079 100%) no-repeat;
            padding: 15vh 4vw 10vh 4vw !important;
            text-align: center;
        }

        .main-headline{
            padding: 0vh 15vw;
            margin-top: 5vh;
            color: #3b1147;
            font-family: 'Abril Fatface', serif;
            font-weight: 400;
            text-align: center;
        }

        .abt-headline{
            padding: 2vh 8vw;
            margin: 5vh;
            font-size: 1.25rem;
            font-weight: 500;
            text-align: center;
            color: #4e083d;
        }

        .btn-outline-dark{
            border-color: #3b1147 !important;
            border-width: 0.1rem !important;
            border-radius: 5rem !important;
            font-size: 1.4rem;
            font-weight: 400;
            color: #dfd5e6;
            background-color: #220533 !important;
            padding-top: 1.5vh;
            padding-bottom: 1.5vh;
        }

        .btn-outline-dark:hover{
            color: #220533;
            background-color: transparent !important;
        }

        .img-resp{
            height: 220px !important;
            width: 220px !important;
            border-radius: 50%;
            border-width: 0.1rem;
            border: #fc3a52 solid 0.4rem;
        }

        .features-x{
            height: auto;
            background-color: rgb(224, 229, 233);
            padding: 9vh 4vw 5vh 4vw !important;
            text-align: center;
        }

        .features-headline{
            padding: 0vh 15vw;
            margin-top: 5vh;
            color:#fc2c77;
            font-family: 'Abril Fatface', serif;
            font-weight: 400;
            text-align: center;
        }

        .about-hd{
            padding: 2vh 8vw;
            font-size: 1.0rem;
            font-weight: 500;
            text-align: center;
        }

        .ben-heading{
            margin-top: 4.5vh;
            margin-bottom: 2vh;
            font-size: 1.8rem;
            font-weight: 700;
            color: #fc2c77;
        }

        .about-tbl{
            padding: 0.5rem 1rem;
            font-weight: 300;
        }


        .register-x{
            height: auto;
            background-color: #fc3a52;
            padding: 9vh 4vw 10vh 4vw !important;
            text-align: center;
        }


        .card-x{
            padding: 3vh 3vw;
            border: #ff0544 solid 0.4rem;
        }

        .form-label{
            font-weight:500;
            font-size: 1.0rem;
            margin-top: 1vh;
        }

        .register-headline{
            padding: 0vh 15vw;
            margin-top: 5vh;
            color:#facbdc;
            font-family: 'Abril Fatface', serif;
            font-weight: 400;
            text-align: center;
        }

        .btn-register{
            border-color: #ff0544;
            background-color: #ff0544;
            color:#facbdc;
        }

        .btn-register:hover{
            background-color: transparent;
            color:#ff0544;
        }

        .contact-x{
            height: auto;
            padding: 9vh 4vw 10vh 4vw !important;
            text-align: center;
        }

        .contact-headline{
            padding: 0vh 15vw;
            margin-top: 5vh;
            color:#a8a8a8;
            font-family: 'Abril Fatface', serif;
            font-weight: 400;
            text-align: center;
        }

        .about-cnt{
            padding: 2vh 8vw;
            font-size: 1.0rem;
            font-weight: 500;
            text-align: center;
            color: #dfd5e6;
        }

        .ar-is{
            border-radius: 50%;
            padding: 1vh;
        }

        .copr{
            padding: 0.5vh;
            background-color: #0e0116;
        }

        .about-cr{
            padding-top: 1vh;
            font-size: 1.0rem;
            font-weight: 300;
            text-align: center;
            color: #dfd5e6;
        }

        /* X-Small devices (landscape phones, 320px and up) */
        @media (min-width: 320px) {
            .navbar-nav {
                margin-left: 0vw;
                text-align: center;
            }

            .form-registration{
                width: 50vw;
                text-align: left;
                margin-left: 0vw;
            }

            .wis{
                width: 50vw;
                margin-left: 0vw;
            }
        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
            .navbar-nav {
                margin-left: 0vw;
                text-align: center;
            }

            .form-registration{
                width: 50vw;
                text-align: left;
                margin-left: 0vw;
            }

            .wis{
                width: 50vw;
                margin-left: 0vw;
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            .navbar-nav {
                margin-left: 22vw;
                text-align: center;
            }

            .form-registration{
                width: 50vw;
                text-align: left;
                margin-left: 0vw;
            }

            .wis{
                width: 50vw;
                margin-left: 0vw;
            }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            .navbar-nav {
                margin-left: 45vw;
                text-align: center;
            }

            .form-registration{
                width: 50vw;
                text-align: left;
                margin-left: 0vw;
            }

            .wis{
                width: 50vw;
                margin-left: 20vw;
            }
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .nav-item {
                padding: 1.4vh 1.6vw !important;
                font-size: 1.2rem;
                font-weight: 300;
            }


            .navbar-nav {
                margin-left: 43vw;
                text-align: center;
            }

            .form-registration{
                width: 50vw;
                text-align: left;
                margin-left: 18vw;
            }

            .wis{
                width: 50vw;
                margin-left: 25vw;
            }
        }

        /* Ultra large devices (large desktops, 1400px and up) */
        @media (min-width: 1500px) {
            .nav-item {
                padding: 1.8vh 2vw !important;
                font-size: 1.25rem;
                font-weight: 300;
            }


            .navbar-nav {
                margin-left: 44vw;
                text-align: center;
            }

            .form-registration{
                width: 50vw;
                text-align: left;
                margin-left: 21vw;
            }

            .wis{
                width: 50vw;
                margin-left: 25vw;
            }
        }





    </style>

</head>

<body>
    <!-- navbar starts here -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top"
                alt="">
            Ureckon 2019
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#homeSection">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#features">Features</a>
                <a class="nav-item nav-link" href="#register">Registration</a>
                <a class="nav-item nav-link" href="#contact">Contact Us</a>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->


    <!-- home section -->
    <div id="homeSection" class="homes">
        <h1 class="display-3 main-headline">Join Ureckon 19 Campus Hero Program</h1>
        <br>
        <p class="abt-headline">Ureckon, UEM Kolkata is Asia’s Largest Science and Technology festival with a total
            footfall of more than 1.75 lakhs, a reach of more than 2500 colleges in India and over 500 universities
            abroad. In the past 21 years, Ureckon, UEM Kolkata has worked to promote technology, scientific thinking,
            and innovation among the youth. A college ambassador is instrumental in igniting this spirit among the
            young minds of their college.</p>
        <br>
        <a href="#register" class="btn btn-outline-dark"> Register Now </a>
    </div>
    <!-- home section ends here -->


    <!-- features start here -->
    <div id="features" class="features-x">
        <h1 class="display-3 features-headline">Benefits Of Joining</h1>
        <br>
        <p class="about-hd">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur.</p>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('img/pp1.png')}}" class="img-resp">
                    <br>
                    <h4 class="display-5 ben-heading">Benefits 1</h4>
                    <p class="about-tbl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi
                        ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="col-md-4">
                    <img src="{{asset('img/pp2.jpg')}}" class="img-resp">
                    <br>
                    <h4 class="display-5 ben-heading">Benefits 2</h4>
                    <p class="about-tbl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi
                        ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="col-md-4">
                    <img src="{{asset('img/pp3.jpg')}}" class="img-resp">
                    <br>
                    <h4 class="display-5 ben-heading">Benefits 3</h4>
                    <p class="about-tbl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi
                        ut aliquip ex ea commodo consequat.</p>
                </div>

            </div>
        </div>

    </div>
    <!-- features ends here -->


    <!-- registration section start here -->
    <div id="register" class="register-x">
        <h1 class="display-3 register-headline">Register Here</h1>
        <br><br>

        <div class="form-registration">
            <div class="card card-x">
                <div class="card-body card-bodyx">
                    <form action="/" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="identityName">Name</label>
                            <input type="text" class="form-control" id="identityName" name="name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="inputEmail">Email Address</label>
                            <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="mobileNum">Mobile Number</label>
                            <input type="text" class="form-control" id="mobileNum" name="phone">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="colgName">College/University/Institution Name</label>
                            <input type="text" class="form-control" id="colgName" name="college">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="colgCity">City</label>
                            <input type="text" class="form-control" id="colgCity" name="city">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="colgStrentg">Total Student Strength of your Institution</label>
                            <input type="text" class="form-control" id="colgStrentg" name="strength">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="studyCourse">Course of Study</label>
                            <select class="form-control" id="studyCourse" name="course">
                                <option>B.Tech/B.E.</option>
                                <option>M.Tech/M.E.</option>
                                <option>BCA</option>
                                <option>MCA</option>
                                <option>BBA</option>
                                <option>MBA</option>
                                <option>B.Sc</option>
                                <option>B.Arch</option>
                                <option>BA</option>
                                <option>BCom.</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="dept">Department</label>
                            <input type="text" class="form-control" id="dept" name="department">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="yos">Year Of Study</label>
                            <select class="form-control" id="yos" name="year">
                                <option>1st year</option>
                                <option>2nd year</option>
                                <option>3nd year</option>
                                <option>4th year</option>
                                <option>5th year</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="cop">Contact Point - Gen. Secretary/President/Head Student Authority of
                                Student Body</label>
                            <input type="text" class="form-control" id="cop" name="contact">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="porh">Position of Responsibilities Held</label>
                            <input type="text" class="form-control" id="porh" name="position">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="whyHro">Why Do You Want to join as Ureckon Campus Hero?</label>
                            <input type="text" class="form-control" id="whyHro" name="why">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="knoUCHP">How did you came to know about Ureckon Campus Hero Program?</label>
                            <select class="form-control" id="knoUCHP" name="how">
                                <option>Ureckon Official FB Page</option>
                                <option>Ureckon Official Website</option>
                                <option>Ureckon Representatives</option>
                                <option>Ureckon Campus Hero Poster</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </form>
                    <br>
                    <button type="submit" class="btn btn-register btn-lg btn-block" onclick="register()">Register!</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of registration section here -->

    <!-- contact us strats here -->
    <div id="contact" class="contact-x bg-dark">
        <h1 class="display-3 contact-headline">Contact Us</h1>
        <br>
        <p class="about-cnt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur.</p>
        <br>
        <div class="row wis">
            <div class="col-md-6" style="padding:0;">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <img class="card-img-top ar-is" src="{{asset('img/dm.png')}}" alt="contactUsDM">
                    <div class="card-body">
                        <h5 class="card-title-x">Debarghya Mukherjee</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <a href="mailto:debarghya@ureckon.org?Subject=Ureckon%202019" target="_top">debarghya@ureckon.org</a>
                        </h6>
                    </div>

                </div>
            </div>
            <div class="col-md-6" style="padding:0;">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <img class="card-img-top ar-is" src="{{asset('img/sc.png')}}" alt="contactUsSC">
                    <div class="card-body">
                        <h5 class="card-title-x">Srijani Chatterjee</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <a href="mailto:srijani@ureckon.org?Subject=Ureckon%202019" target="_top">srijani@ureckon.org</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of contact us -->

    <!-- copyright -->
    <div id="cpyright" class="copr">
        <p class="about-cr">Copyright Reserved. Ureckon 2019.</p>
    </div>












    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script>
        register = () => {
            // function to register
            console.log("working");
        }
    </script>
</body>

</html>
