<?php
include_once 'header.php'
?>

<head>
    <link href="/css/signup.css" rel="stylesheet">
</head>

<body>
    <div>
        <div class="bg-light p-5 rounded">
            <div class="col-sm-8 mx-auto">
                <main class="form-signin">
                    <form action="includes/signup.inc.php" method="post">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-4" alt="" width="72" height="57" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                            <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
                        </svg>
                        <h1 class="h3 mb-3 fw-normal">Sign-Up</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="FirstName LastName">
                            <label for="floatingInput">Full name</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email Address</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="uid" id="floatingUsername" placeholder="Password">
                            <label for="floatingUsername">Username</label>
                        </div>
                        <div class="form-floating">
                            <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->
                            <input type="password" class="form-control" name="pwd" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="pwdrepeat" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password Check</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" id="rememberMeCheckBox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign Up</button>

                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all fields!</p>";
                            } else if (($_GET["error"] == "invalidUid")) {
                                echo "<p>Choose a proper username!</p>";
                            } else if (($_GET["error"] == "invalidEmail")) {
                                echo "<p>Choose a proper email!</p>";
                            } else if (($_GET["error"] == "passwordmismatch")) {
                                echo "<p>Choose a proper password!</p>";
                            } else if (($_GET["error"] == "stmtfailed")) {
                                echo "<p>Something went wrong, try again!</p>";
                            } else if (($_GET["error"] == "usernametaken")) {
                                echo "<p>Username already taken!</p>";
                            } else if (($_GET["error"] == "none")) {
                                echo "<p>Sign Up Successful!</p>";
                            }
                        }
                        ?>

                        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
                    </form>
                </main>
            </div>
        </div>
    </div>
</body>

</html>