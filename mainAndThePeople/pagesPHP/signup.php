<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>The Fontys People</title>
    </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-bg-blue justify-content-between">
            <a class="logoImage" href="index.php">
                <img src="../img/group(4).png" alt="Company logo">
            </a>
            <a class="logoBtn" href="index.php">The Fontys People </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav navbar-right ml-auto">
                    <a class="nav-item" href="index.php">Home</a>
                    <a class="nav-item" href="thePeople.php?target=home">The People</a>
                    <a class="nav-item active" href="mypage.php">My Page</a>
                    <a class="nav-item" href="about_news.php">About</a>
                </div>
            </div>
        </nav>
    </header>
<div class="websiteContents">
    <div class="signup-form jumbotron-fluid bg-white">
        <h1 class="display-4">Sign up</h1>
        <div class="mb-4"></div>
        <form method="post" action="../php/addtodb.php" onsubmit="return validateSignup();">
            <div class="form-row">
                <div class="form-group col-5">
                    <label class="lead" for="inputEmail">Email *</label>
                    <span class="input-errors">
                        <span id="emailInvalidFormat">Email is not in a valid format</span>
                    </span>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required maxlength=100>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-5">
                    <label class="lead" for="inputPassword">Password *</label>
                    <span class="input-errors">
                        <span id="passTooShortError">The password you entered must be at least 8 characters long</span>
                        <span id="passTooSimpleError">The password you entered is too simple</span>
                    </span>
                    <input type="password" class="form-control" id="inputPassword" name ="inputPassword" placeholder="Password" required minlength=8 maxlength=100>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-5">
                    <label class="lead" for="inputName">Name *</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name" maxlength=50 required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-5">
                    <label class="lead" for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="Street name 55" maxlength=50>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-5">
                    <label class="lead" for="inputPostalcode">Postal code</label>
                    <input type="text" name="inputPostalcode" class="form-control" id="inputPostalcode" placeholder="1234AB" maxlength=8>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-5">
                    <label class="lead" for="inputCity">City</label>
                    <input type="text" name="inputCity" class="form-control" id="inputCity" maxlength=100>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-5">
                    <label class="lead" for="inputStatus">Status</label>
                    <span class="input-errors">
                        <span id="genderNoChoiceError">You did not select your status</span>
                    </span>
                    <select id="inputStatus" class="form-control" name="inputStatus">
                        <option selected>Choose...</option>
                        <option>Student</option>
                        <option>Teacher</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btnSignup" style="background-color: #3f51b5">Sign up</button>
        </form>
    </div>
</div>


    <footer class="navbar footer navbar-expand-lg navbar-light navbar-bg-blue justify-content-between">
        <div class="navbar-text text-white">Copyright © 2018, Polina Rymshina, Matei Voicu</div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"c
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <script src="../js/search.js"></script>
</body>
</html>
