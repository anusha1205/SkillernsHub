<style>
      body {
            width: 100%;

      }

      #results {
            width: 100%;
            height: auto;
            gap: 2%;
            padding: 2%;
            display: flex;
            flex-wrap: wrap;

      }

      .searchable-div {
            margin-top: 3%;
            height: fit-content;
            width: 31.7%;
            border-radius: 10px;
            box-sizing: border-box;
            padding: 2%;
            box-shadow: 0 0 10px rgba(21, 14, 14, 0.664);
      }


      .search-section {
            gap: 4%;
            display: flex;
            flex-direction: column;
            padding: 2%;
            margin: 5%;
            box-shadow: 0 0 10px rgba(21, 14, 14, 0.664);
            flex-wrap: wrap;
      }

      .search-section-1-1,
      .search-section-1-2 {
            display: flex;
            width: 100%;
            justify-content: space-evenly;
            font-family: 'Raleway', sans-serif;
      }

      .internship-heading {
            font-family: 'Montserrat', sans-serif;
      }



      body {
            font-family: Arial, sans-serif;
            margin: 20px;
      }

      .search-section {
            margin-bottom: 20px;
      }

      label {
            display: block;
            margin: 10px 0;
      }

      input,
      select,
      button {
            margin: 5px 0;
      }

      button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            cursor: pointer;
      }

      button:hover {
            background-color: #0056b3;
      }

      .searchable-div {
            display: none;
            /* Hide divs by default */
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
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
</style>

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/loginsystem">Skiller</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/loginsystem/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/loginsystem/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/loginsystem/signup.php">Signup</a>
      </li>
      
       
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->
<nav style="margin-bottom: 1%;background-color: rgb(43, 182, 152);padding: 1.5%;"
      class="navbar navbar-light navbar-expand-lg">
      <div class="container-fluid" style="display: flex;flex-direction: row;">
            <div class="navbar-brand-div" style="width: 80%;">
                  <img src="/SkillernsHub/image/SkillernsHub.png" alt="" style="width: 12%;">
                  <div style="width: 50%;">
                        <a href="/loginsystem/welcome.php" class="Skillerns"
                              style="font-size: 2.4rem;font-family: 'Raleway', sans-serif;text-decoration: none;">Skillerns</a>
                        <a href="/loginsystem/welcome.php"
                              style="font-size: 2.9rem;font-family: 'Rubik Burned', system-ui;text-decoration: none;"
                              class="hub">Hub</a>
                        <h5 style="font-family: 'Raleway', sans-serif;font-size: 1.3rem;">Sky Shine Skills with
                              SkillernsHub</h5>
                  </div>
                  <!-- <div style="display: flex;flex-direction: column;">
                              <a class="navbar-brand" style="font-size: 2rem;font-family: 'Mulish', sans-serif;" href="/loginsystem/login.php">ANUSHA GONAL</a>
                              <a class="navbar-brand" style="font-size: 1.2rem;margin-left: 0%;font-family: 'Poppins', sans-serif;" href="/loginsystem/login.php">Computer Science Student</a>
                        </div> -->

            </div>
            <div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav" style="flex-grow: 0;align-items: center;">
                  <ul class="navbar-nav"
                        style="display: flex;flex-direction: row;margin-top: 3%;margin-bottom: 3%;justify-content: center;max-width: 100%;">
                        <li class="nav-item" style="padding: 0 4% 0 2%;">
                              <a style="color: rgb(89, 204, 173);font-size: 1.4rem;font-family: 'Montserrat', sans-serif;"
                                    class="nav-link active" aria-current="page" href="/loginsystem/login.php">Home <span
                                          class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="padding: 0 4% 0 2%;">
                              <a style="color: rgb(89, 204, 173);font-size: 1.4rem;font-family: 'Montserrat', sans-serif;"
                                    class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item" style="padding: 0 4% 0 2%;">
                              <a style="color: rgb(89, 204, 173);font-size: 1.4rem;font-family: 'Montserrat', sans-serif;"
                                    class="nav-link" href="profile.html">Contact</a>
                        </li>
                        <li class="nav-item" style="border-width: 0px;padding: 0 4% 0 2%;">
                              <a style="color: rgb(89, 204, 173);font-size: 1.4rem;font-family: 'Montserrat', sans-serif;"
                                    class="nav-link " href="contact.html">MyProfile</a>
                        </li>
                  </ul>
            </div>
      </div>
</nav>