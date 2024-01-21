<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
      header("location: login.php");
      exit;
}


?>
<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="image/SkillernsHub.png">
      <link rel="stylesheet" href="css styling/styles.css" />
      <link rel="stylesheet" href="css styling/firstpage.css">
      <link rel="stylesheet" href="css styling/style2.css">


      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

      <link rel="icon" href="/Internship/image/skillernshub-logo.png">

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
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


      <script>
            document.addEventListener("DOMContentLoaded", function () {
                  // Initial display of all searchable-div elements
                  const allDivs = document.querySelectorAll('.searchable-div');
                  allDivs.forEach(div => div.style.display = 'block');

                  // Attach the performSearch function to the Search button click event
                  document.getElementById('searchButton').addEventListener('click', performSearch);
            });

            function performSearch() {
                  const keyword = document.getElementById('searchInput').value.toLowerCase();
                  const selectedLanguageoptions = document.getElementById('languageoptions').value.toLowerCase();
                  const selectedInterestOption = document.getElementById('interestOption').value.toLowerCase();
                  const selectedCareerAspiration = document.getElementById('careerAspiration').value.toLowerCase();

                  // Hide all divs
                  const allDivs = document.querySelectorAll('.searchable-div');
                  allDivs.forEach(div => div.style.display = 'none');

                  // Show divs that match any of the selected options or the keyword
                  const filteredDivs = document.querySelectorAll(`.searchable-div[data-options*="${selectedLanguageoptions}"], .searchable-div[data-options*="${selectedInterestOption}"], .searchable-div[data-options*="${selectedCareerAspiration}"]`);
                  filteredDivs.forEach(div => {
                        if (div.innerText.toLowerCase().includes(keyword) || keyword === "") {
                              div.style.display = 'block';
                        }
                  });
            }

      </script>

      <style>
            /* first page css */
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



            /* styles.css */


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


            /* style2.css */
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
      </style>
</head>

<body>

      <?php require '_nav.php' ?>

      <div class="search-section">
            <div class="search-section-1-1" style="font-family: 'Quicksand', sans-serif;font-size: 1.2rem;">
                  <div style="display: flex;align-items:center;justify-content:space-evenly;">
                        <label for="searchInput" style="font-family: 'Raleway', sans-serif;">Search using
                              keyword:</label>
                        <input type="text" id="searchInput" placeholder="Enter keyword"
                              style="border-radius: 5px;border-width: 1px;font-family: 'Raleway', sans-serif;" />
                  </div>

                  <div style="display: flex;align-items:center;justify-content:space-evenly;">
                        <label for="languageoptions" style="font-family: 'Raleway', sans-serif;">Your Top Programming
                              Language:</label>
                        <select id="languageoptions"
                              style="border-radius: 5px;border-width: 1px;font-family: 'Raleway', sans-serif;">
                              <option value="html_css_javascript">Html, CSS, Javascript & Node JS</option>
                              <option value="reactjs">ReactJS</option>
                              <option value="python">Python</option>
                              <option value="figma">Figma</option>
                        </select>
                  </div>
            </div>
            <div class="search-section-1-2" style="font-family: 'Quicksand', sans-serif;font-size: 1.2rem;">
                  <div style="display: flex;align-items:center;justify-content:space-evenly;">
                        <label for="interestOption" style="font-family: 'Raleway', sans-serif;">Field
                              Interested:</label>
                        <select id="interestOption"
                              style="border-radius: 5px;border-width: 1px;font-family: 'Raleway', sans-serif;">
                              <option value="webDevelopment">Web Development</option>
                              <option value="mobileDevelopment">App Development</option>
                              <option value="dataScience">Data Science</option>
                              <option value="machineLearning">Machine Learning</option>
                              <option value="cybersecurity">Cybersecurity</option>
                              <option value="networking">Networking</option>
                        </select>
                  </div>

                  <div style="display: flex;align-items:center;justify-content:space-evenly;">
                        <label for="careerAspiration" style="font-family: 'Raleway', sans-serif;">Career
                              Aspiration</label>
                        <select id="careerAspiration"
                              style="border-radius: 5px;border-width: 1px;font-family: 'Raleway', sans-serif;">
                              <option value="leadership_skill">Leadership Skill</option>
                              <option value="collaboration">Team Collaboration</option>
                              <option value="communication">communication</option>
                              <option value="strategy">Strategic Planning</option>
                              <option value="product_making">Product Development</option>
                              <option value="creativity">Creativity</option>
                              <!-- <option value="entrepreneurship">Entrepreneurship</option> -->
                              <option value="tech_debugging">Code Debugging</option>
                        </select>

                  </div>
            </div>
            <div style="display: flex;justify-content:center;margin-top:2%;">
                  <button onclick="performSearch()" style="border-radius: 10px;width:130px;text-align:center;"><a
                              href="#results"
                              style="text-decoration: none;color: black;font-family: 'Raleway', sans-serif;font-size:1.4rem;">Search</a></button>
            </div>

      </div>

      <div id="results">
            <!-- Divs will be filtered and displayed here -->
            <!-- Divs will be filtered and displayed here -->

            <div class="searchable-div"
                  data-options="java javascript python reactjs angular analytical-skills problem-solving collaboration communication softwareEng">
                  <h2 class="internship-heading">SOFTWARE ENGINEERING INTERN</h2>
                  <p>
                        Company: CodeCraft Solutions<br>
                        Location: Bengaluru<br>
                        Duration: 10 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Proficiency in Java, JavaScript, or Python.</li>
                        <li>Familiarity with web development frameworks (e.g., React, Angular).</li>
                        <li>Strong problem-solving and analytical skills.</li>
                        <li>Excellent collaboration and communication skills.</li>
                  </ul>

                  </p>
            </div>

            <div class="searchable-div"
                  data-options="dataScience python mysql machineLearning dataScience TensorFlow Scikit-Learn teamwork communication">
                  <h2 class="internship-heading">Data Science Intern</h2>
                  <p>
                        Company: Tech Innovators Inc.<br>
                        Location: Pune<br>
                        Duration: 12 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Strong programming skills in Python and familiarity with data manipulation libraries (e.g.,
                              Pandas, NumPy).</li>
                        <li>Knowledge of machine learning algorithms and frameworks (e.g., Scikit-Learn, TensorFlow,
                              PyTorch).</li>
                        <li>Solid understanding of statistical concepts and data analysis techniques.</li>
                        <li>Excellent communication and teamwork skills.</li>
                  </ul>

                  </p>
            </div>

            <div class="searchable-div" data-options="design adobe sketch figma creativity collaboration">
                  <h2 class="internship-heading">UX/UI Design Intern</h2>
                  <p>
                        Company: Creative Innovations Studio<br>
                        Location: London<br>
                        Duration: 14 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Pursuing a degree in Graphic Design, HCI, or a related field.</li>
                        <li>Proficiency in design tools such as Adobe Creative Suite, Sketch, or Figma.</li>
                        <li>Excellent attention to detail and creativity.</li>
                        <li>Strong communication and collaboration skills.</li>
                  </ul>
                  </p>
            </div>

            <div class="searchable-div" data-options="html css javascript react vue problem-solving">
                  <h2 class="internship-heading">Web Development Intern</h2>
                  <p>
                        Company: Digital Innovations Co.<br>
                        Location: San Francisco<br>
                        Duration: 12 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Proficiency in HTML, CSS, and JavaScript.</li>
                        <li>Experience with front-end frameworks (e.g., React, Vue).</li>
                        <li>Knowledge of RESTful API design.</li>
                        <li>Strong problem-solving skills.</li>
                  </ul>
                  </p>
            </div>
            <div class="searchable-div" data-options="analytical-skills statistical-skills python sql dataAnalyst">
                  <h2 class="internship-heading">Data Analyst Intern</h2>
                  <p>
                        Company: Analytical Insights Ltd.<br>
                        Location: New York<br>
                        Duration: 8 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Analytical and statistical skills.</li>
                        <li>Proficiency in Python and data manipulation libraries.</li>
                        <li>Experience with SQL databases.</li>
                        <li>Strong attention to detail.</li>
                  </ul>
                  </p>
            </div>

            <div class="searchable-div" data-options="mobileDevelopment flutter react creativity innovation ">
                  <h2 class="internship-heading">Mobile App Development Intern</h2>
                  <p>
                        Company: AppCraft Studios<br>
                        Location: Los Angeles<br>
                        Duration: 14 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Proficiency in mobile development languages (e.g., Swift, Kotlin).</li>
                        <li>Familiarity with cross-platform frameworks (e.g., Flutter, React Native).</li>
                        <li>Understanding of mobile UI/UX principles.</li>
                        <li>Creativity and innovation.</li>
                  </ul>
                  </p>
            </div>
            <div class="searchable-div" data-options="networking firewall encryption">
                  <h2 class="internship-heading">Network Security Intern</h2>
                  <p>
                        Company: SecureNet Solutions<br>
                        Location: Chicago<br>
                        Duration: 10 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Knowledge of network protocols and security measures.</li>
                        <li>Experience with firewall and intrusion detection systems.</li>
                        <li>Understanding of encryption technologies.</li>
                        <li>Cybersecurity awareness.</li>
                  </ul>
                  </p>
            </div>

            <div class="searchable-div" data-options="SEO SEM marketing management analytical-skills communication">
                  <h2 class="internship-heading">Digital Marketing Intern</h2>
                  <p>
                        Company: MarketBoost Agency<br>
                        Location: Seattle<br>
                        Duration: 12 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Familiarity with SEO and SEM strategies.</li>
                        <li>Proficiency in social media management.</li>
                        <li>Analytical skills for campaign evaluation.</li>
                        <li>Strong written and verbal communication.</li>
                  </ul>
                  </p>
            </div>

            <div class="searchable-div" data-options="machineLearning python TensorFlow PyTorch visualization">
                  <h2 class="internship-heading">AI/ML Research Intern</h2>
                  <p>
                        Company: Quantum Intelligence Labs<br>
                        Location: Austin<br>
                        Duration: 16 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Strong background in machine learning algorithms.</li>
                        <li>Programming skills in Python and TensorFlow/PyTorch.</li>
                        <li>Research-oriented mindset.</li>
                        <li>Data analysis and visualization skills.</li>
                  </ul>
                  </p>
            </div>

            <div class="searchable-div" data-options="cybersecurity networking wireshark metasploit">
                  <h2 class="internship-heading">Cybersecurity Analyst Intern</h2>
                  <p>
                        Company: Secure Solutions Inc.<br>
                        Location: Washington, D.C.<br>
                        Duration: 12 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Understanding of cybersecurity principles and best practices.</li>
                        <li>Experience with tools like Wireshark and Metasploit.</li>
                        <li>Knowledge of network security and vulnerability assessment.</li>
                  </ul>
                  </p>
            </div>
            <div class="searchable-div" data-options="machineLearning python PyTorch TensorFlow">
                  <h2 class="internship-heading">Machine Learning Research Intern</h2>
                  <p>
                        Company: Future Intelligence Labs<br>
                        Location: Cambridge, MA<br>
                        Duration: 16 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Strong background in machine learning algorithms and frameworks (e.g., TensorFlow, PyTorch).
                        </li>
                        <li>Experience with natural language processing and computer vision.</li>
                        <li>Research-oriented mindset and ability to contribute to innovative projects.</li>
                  </ul>
                  </p>
            </div>

            <div class="searchable-div" data-options="blockchain Ethereum">
                  <h2 class="internship-heading">Blockchain Developer Intern</h2>
                  <p>
                        Company: Crypto Innovations<br>
                        Location: Miami, FL<br>
                        Duration: 12 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Proficiency in blockchain development languages (e.g., Solidity).</li>
                        <li>Understanding of smart contract development and decentralized applications (DApps).</li>
                        <li>Familiarity with blockchain platforms like Ethereum.</li>
                  </ul>
                  </p>
            </div>

            <div class="searchable-div" data-options="DevOps Kubernetes AWS Azure GCP">
                  <h2 class="internship-heading">DevOps Engineer Intern</h2>
                  <p>
                        Company: Cloud Synergy Solutions<br>
                        Location: Austin, TX<br>
                        Duration: 10 weeks<br><br>

                        <strong>Requirements:</strong>
                  <ul>
                        <li>Knowledge of continuous integration and deployment (CI/CD) pipelines.</li>
                        <li>Experience with containerization tools like Docker and orchestration tools like Kubernetes.
                        </li>
                        <li>Understanding of cloud platforms (e.g., AWS, Azure, GCP).</li>
                  </ul>
                  </p>
            </div>

      </div>
</body>

</html>