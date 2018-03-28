<div class="websiteContents jumbotron-fluid bg-white">
    <form method="post" action="../php/auth.php" class="form-login container">
        <h1 class="display-4 mb-4">Sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <div class="mb-2"></div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="mb-2"></div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" name="rememberme"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #3f51b5">Sign in</button>
        <div class="mb-2"></div>
        <a class="container pl-0" href="../pagesPHP/signup.php">Don't have an account?</a>
    </form>
</div>