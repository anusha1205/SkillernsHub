<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    // Check if the keys are set in $_POST before accessing them
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $institute = isset($_POST["institute"]) ? $_POST["institute"] : "";
    $cpassword = isset($_POST["cpassword"]) ? $_POST["cpassword"] : "";
    $year = isset($_POST["year"]) ? $_POST["year"] : "";
    $branch = isset($_POST["branch"]) ? $_POST["branch"] : "";

    $exists = false;

    if (($password == $cpassword) && $exists == false) {
        // Fix the SQL query by properly closing the VALUES parentheses
        $sql = "INSERT INTO `personal_details` (`name`, `email`, `password`, `institute`, `year`, `branch`) VALUES ('$name', '$email', '$password', '$institute', '$year', '$branch')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $showAlert = true;
        } else {
            // Display an error message if the query fails
            $showError = "Error: " . mysqli_error($conn);
        }
    } else {
        $showError = "Passwords do not match";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
    <!-- <link rel="icon" href="image/SkillernsHub.png"> -->
    <link rel="stylesheet" href="css styling/styles.css" />
    <link rel="stylesheet" href="css styling/firstpage.css">
    <link rel="stylesheet" href="css styling/style2.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- <link rel="icon" href="/Internship/image/skillernshub-logo.png"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Burned&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Rubik+Burned&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Merriweather&family=Montserrat:wght@400;500&family=Open+Sans&family=Playpen+Sans:wght@200&display=swap"
            rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Merriweather&family=Montserrat:wght@400;500&family=Mulish:wght@700&family=Open+Sans&family=Playpen+Sans:wght@200&display=swap"
            rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Merriweather&family=Montserrat:wght@400;500&family=Mulish:wght@700&family=Open+Sans&family=Playpen+Sans:wght@200&family=Poppins&display=swap"
            rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

      <link rel="icon" href="image/SkillernsHub.png">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik+Burned&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Rubik+Burned&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Merriweather&family=Montserrat:wght@400;500&family=Open+Sans&family=Playpen+Sans:wght@200&display=swap"
            rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Merriweather&family=Montserrat:wght@400;500&family=Mulish:wght@700&family=Open+Sans&family=Playpen+Sans:wght@200&display=swap"
            rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Merriweather&family=Montserrat:wght@400;500&family=Mulish:wght@700&family=Open+Sans&family=Playpen+Sans:wght@200&family=Poppins&display=swap"
            rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

      <!-- Bootstrap JavaScript and Popper.js -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;

        }

        .message {
            margin-top: 10px;
            color: #333;
            text-align: center;
        }

        .submit-button:hover {
            cursor: pointer;
            text-decoration: none;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;

        }

        .message {
            margin-top: 10px;
            color: #333;
            text-align: center;
        }

        .submit-button:hover {
            cursor: pointer;
            text-decoration: none;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        .navbar {
            padding: 2%;
        }

        .navbar-brand-div {
            display: flex;
            align-items: center;
            gap: 5%;

        }

        .brand-logo {
            text-decoration: none;
            display: flex;
            /* border-radius: 100%;
    background-color: rgb(151, 151, 151); */
            align-items: center;
            color: rgb(43, 43, 110);
        }

        .brand-logo:hover {
            color: rgb(99, 99, 119);
        }

        .navbar-brand {
            color: rgb(4, 4, 41);
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: grey;
        }

        .nav-link {
            background-color: #041411;
            border-radius: 15px;

        }




        .navbar-div {
            background-color: #41ae97;
            color: black;
            display: flex;
            padding: 3%;

        }

        .Skillerns,
        .hub {
            color: black;
        }

        .Skillerns:hover,
        .hub:hover {
            color: beige;
        }


        .menu-button {
            display: flex;
            flex-wrap: nowrap;

            gap: 4%;
        }

        .btns {
            color: black;
        }

        .btns:hover {
            color: #094034;
            text-decoration: underline;
            text-decoration-color: rgb(2, 50, 42);
        }

        section {
            margin: 1% 6%;
            padding: 1em;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.559);
        }


        #signup-div {

            width: 60%;
        }

        h2,
        h3 {
            color: #41ae97;
        }

        h1 {
            color: #1a6757;
        }

        button {
            background-color: #41ae97;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        footer {
            text-align: center;
            padding: 1em 0;
            background-color: #41ae97;
            color: #ecf0f1;
            position: relative;
            width: 100%;
            bottom: 0;
        }

        @media (max-width:1017px) and (min-width:0px) {}
    </style>
    
</head>

<body>
    <?php require '_nav.php' ?>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can  <a href="/loginsystem/login.php">login @SkillernsHub</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>



    <div style="display: flex;flex-direction: row;margin-top: 2%;gap: 2%;" class="section-and-signup">
        <section>
            <h1 style="display: flex;justify-content: space-evenly;font-size: 2rem;margin-bottom: 4%;margin-top: 2%;">
                Wanna Apply for Internship based on what you crave? <a href="#signup-div"><button
                        style="font-size: 1rem;border-radius: 10px;">Get Started Now Sign up ASAP
                        !</button></a> </h1>

            <h2>Our Mission</h2>

            <p>
                We strive to develop an advanced software solution that seamlessly
                connects students with internship opportunities, revolutionizing the way
                students explore and secure internships.
            </p>

            <h2>The Challenge</h2>
            <p>
                In the rapidly evolving landscape of student career development, there
                is a critical need for an innovative software solution. Existing systems
                often fall short in providing personalized recommendations tailored to
                individual skills, interests, and career aspirations. SkillernsHub
                addresses this gap by optimizing the pairing of students with
                internships through a sophisticated keyword matching algorithm.
            </p>

            <h2>Key Features</h2>
            <ul>
                <li>
                    <strong>Personalized Recommendations:</strong> Our system employs a
                    keyword matching algorithm to intelligently match student profiles
                    with relevant internship opportunities.
                </li>
                <br />
                <li>
                    <strong>User-Friendly Interface:</strong> SkillernsHub ensures a
                    smooth interaction, allowing students to easily input and update their
                    information for a seamless experience.
                </li>
            </ul>

            <h2>Why Choose Us?</h2>
            <p>At SkillernsHub, we stand out with:</p>
            <ul>
                <li>Efficient Keyword Matching Algorithm</li>
                <li>Seamless User Experience</li>
                <!-- <li>
                    Testimonials: "SkillernsHub transformed my internship search! The
                    personalized recommendations were spot-on, helping me find the perfect
                    opportunity." - John Doe
                </li> -->
            </ul>


        </section>
    </div>

    <div style="display: flex;justify-content: center;margin-top: 5%;">
        <div id="signup-div" style="width: 60%;">
            <!-- <h1>Feel Free to Signup at</h1> -->
            <form method="post" name="reg-users" action="/loginsystem/signup.php">
                <h1>Sign up</h1>

                <label for="name">Name:</label>
                <input placeholder="Enter Your Name" type="text" name="name" required />

                <label for="email">Email ID:</label>
                <input placeholder="Enter Your Email ID" type="email" name="email" required />

                <label>Password:</label>
                <input placeholder="Enter a strong password" type="password" name="password" required />
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                </div>
                <div id="collegeFields">
                    <label for="institute">Institute Name:</label>
                    <input placeholder="Institute Name studying in" type="text" name="institute" />

                    <label for="year">Year of Study:</label>
                    <select name="year" id="year">
                        <option value="0">Select an option</option>
                        <option value="1">First Year</option>
                        <option value="2">Second Year</option>
                        <option value="3">Third Year</option>
                        <option value="4">Fourth Year</option>
                        <option value="5+">5th or more</option>
                    </select>

                    <label for="branch">Branch:</label>
                    <input placeholder="Branch Pursuing" type="text" name="branch" />
                </div>

                <!-- <button type="button" onclick="signUp()">Sign Up</button> -->
                <button type="submit" class="btn btn-success">Sign Up</button>


                <p>Already Have an account? <a href="/loginsystem/signup.php">Visit SkillernsHub To Explore our
                        website</a></p>
            </form>
        </div>
    </div>




    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>