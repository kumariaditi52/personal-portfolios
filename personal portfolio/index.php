

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
    src="https://kit.fontawesome.com/20c5629a29.js"
    crossorigin="anonymous"></script>

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="index.css" />
  <title>Aditi Portfolio</title>
  <link
    rel="icon"
    type="image/x-icon"
    href="https://res.cloudinary.com/dffu1ungl/image/upload/v1726493608/Untitled_design_10_fy1uzs.png" />
</head>

<body>
  <header>
    <nav id="desktop-nav-container">
      <a href="#home" class="logo">Aditi Portfolio</a>
      <i class="fa-solid fa-bars" id="menu-bar-icone"></i>
      <ul class="nav-list">
        <li><a href="#about" class="active">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#project">Projects</a></li>
        <li><a href="#certificate">Certificates</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

  </header>

  <section id="home" class="home-container">
    <img
      src="./assets/aditi.png"
      alt="profile pic"
      class="profile-picture" />
    <div class="home-content">
      <p class="para1">Hello, I'm</p>
      <h1 class="name">Aditi Singh</h1>
      <p class="para2">
        Full-stack Developerb (web developer) 1.6</p>
      <div class="btn-container">
        <a href="./aditiresum.pdf" class="button-1" download>Download Resume</a>

      </div>
      <div class="social-media-profiles">
        <a
          href="https://www.linkedin.com/in/aditi-singh-a533031ab/"
          target="_blank"><i class="fa-brands fa-linkedin-in icon linked-in"></i>
        </a>
        <a href="aditikumari5281@gmail.com" target="_blank"><i class="fa-solid fa-envelope icon"></i></a>
        <a href="https://github.com/kumariaditi52" target="_blank"><i class="fa-brands fa-github icon"></i></a>
      </div>
    </div>
    <!-- <a href="#about"><i class="fa-solid fa-angles-down arrow-icon"></i></a> -->
  </section>

  <section id="about" class="about-container">
    <div class="headings">
      <p class="headings-para">Get To Know More</p>
      <h1 class="section-heading">About Me</h1>
    </div>

    <div class="education">
      <h1>Education</h1>
      <p class="degree"> Bachelor of technology (computer science)</p>
      <p class="clg-name">
        Jagannath University jaipur Rajasthan <a class="clg-year">2018 - 2024</a>
      </p>
    </div>

    <div class="timeline">
      <h1 class="experience-heading">Experience</h1>
      <div class="container-timeline left-container">
        <img
          src="https://ittrainingclasses.in/images/logo.png"
          alt="Deloitte Logo" />
        <div class="text-box">
          <h2>ITC</h2>
          <h1 class="role">IT Training Classes (intenship)</h1>
          <span class="left-container-arrow"></span>
        </div>
      </div>

      <div class="container-timeline right-container">
        <img
          src="./assets/logoo1.jpg"
          alt="AtliQ Logo" />
        <div class="text-box">
          <h2>JIIFIT LLP</h2>
          <h1 class="role">Front End Web Development</h1>
          <small>sep 2023 to may 2024</small>
          <span class="right-container-arrow"></span>
        </div>
      </div>
      <div class="container-timeline left-container">
        <img
          src="./assets/logo2.jpeg"
          alt="senchola Logo" />
        <div class="text-box">
          <h2>inclination it innovations pvt</h2>
          <h1 class="role">Front End Web Development</h1>
          <small>sep 2023 - May 2024</small>
          <span class="left-container-arrow"></span>
        </div>
      </div>

      <div class="container-timeline right-container">
        <img
          src="./assets/logo2.jpeg"
          alt="AtliQ Logo" />
        <div class="text-box">
          <h2>inclination it innovations pvt
          </h2>
          <h1 class="role">backend developer</h1>
          <small>jan 2024 to oct</small>
          <span class="right-container-arrow"></span>
        </div>
      </div>
    </div>
    <!--<a href="#skills"><i class="fa-solid fa-angles-down arrow-icon"></i></a>-->
  </section>

  <section id="skills" class="skills-container">
    <div class="headings">
      <p class="headings-para">Explore My</p>
      <h1 class="section-heading">Skills</h1>
    </div>
    <div class="skills">
      <p>HTML&CSS3,</p>
      <p>JAVASCRIPT</p>
      <p>REACT JS</p>
      <p>REDUX</p>
      <p>TAILWIND CSS</p>
      <p>NEXT JS</p>
      <p>PHP</p>
      <p>NODE JS</p>
      <p>EXPRESS JS</p>
      <p> MONGODB</p>
      <p> SQL</p>
      <p> RESTAPI</p>


    </div>

  </section>

  <section id="project" class="projects-container">
    <div class="headings">
      <p class="headings-para">Browse My Recent</p>
      <h1 class="section-heading">Projects</h1>
    </div>
    <div class="project-card-container">
      <div class="card-container">
        <img
          src="./assets/todo.png"
          alt="thumbnail"
          class="project-thumbnail" />
        <div class="project-title">
          <h1>Dynamic TO-DO List</h1>

          <div class="button-logo-container">
            <button id="button" onclick="liveDashboard()">
              View Project
            </button>

          </div>
        </div>


      </div>

      <div class="card-container">
        <img
          src="./assets/Restaurant.png"
          alt="thumbnail"
          class="project-thumbnail" />
        <div class="project-title">
          <h1>Restaurant Website Design </h1>

          <div class="button-logo-container">
            <button id="button" onclick="liveDashboard()">
              View Project
            </button>

          </div>
        </div>
        <div id="live-dashboard2" class="dashboard-main">
          <div class="live-dashboard-container">
            <i
              class="fa-solid fa-xmark close-icon"
              onclick="closeDashboard()"></i>
            <h1>
              Restaurant Website Design

            </h1>
            <hr class="hr-line" />
            <p class="main-descirption">

            </p>

            <div class="project-details-container">
              <div class="details-content">
                <h1>Project Details</h1>
                <p>

              </div>
              <div class="presentation-container">
                <h1>Presentation Video</h1>
                <iframe
                  class="video-frame"
                  src="https://www.youtube.com/embed/wrtcperJ4IE?si=w6TtCShtlqDV_sbg"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
            </div>

            <h1 class="live-dashboard-heading">Live Dashboard</h1>
            <iframe
              src="https://app.powerbi.com/view?r=eyJrIjoiYWRkOTBkYjctYzI2Ny00NGFkLTljN2EtOGFlZDk4OTU4MTg2IiwidCI6ImM2ZTU0OWIzLTVmNDUtNDAzMi1hYWU5LWQ0MjQ0ZGM1YjJjNCJ9"
              frameborder="0"
              width="100%"
              height="800"
              class="frame-rate"></iframe>
            <div class="project-view-container">
              <a
                href="https://www.linkedin.com/posts/pradeep-m-analyst_datamagic-reviveinsights-codebasics-activity-7155899561398427648-r_JB/?utm_source=share&utm_medium=member_desktop"
                class="linkedin-engagement"
                target="_blank"><i class="fa-brands fa-linkedin dashboard-icon1"></i>View
                Project Engagement</a>

              <a
                href="https://github.com/pradeep-the-analyst/ReviveIQ-Insights"
                class="githun-repo"
                target="_blank"><i class="fa-brands fa-github dashboard-icon2"></i>View
                Project on GitHUB</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-container">
        <img
          src="./assets/add-to-card.png"
          alt="thumbnail"
          class="project-thumbnail" />
        <div class="project-title">
          <h1>Add To cart project</h1>

          <div class="button-logo-container">
            <button id="button" onclick="liveDashboard()">
              View Project
            </button>

          </div>
        </div>
        <div id="live-dashboard3" class="dashboard-main">
          <div class="live-dashboard-container">
            <i class="fa-solid fa-xmark close-icon" onclick="closeDashboard()"></i>

            <h1>

              <img
                src="https://res.cloudinary.com/dffu1ungl/image/upload/v1725468350/download-removebg-preview_h1cuor.png"
                alt=""
                class="logo-skill" />
            </h1>
            <hr class="hr-line" />


            <div class="details-content third-project">

            </div>

            <div class="project-view-container">
              <a
                href="https://www.linkedin.com/posts/pradeep-m-analyst_dataanalysis-excel-dataanalytics-activity-7138055223394140160-wGoB/?utm_source=share&utm_medium=member_desktop"
                class="linkedin-engagement"
                target="_blank"><i class="fa-brands fa-linkedin dashboard-icon1"></i>View
                Project Engagement</a>

              <a
                href="https://github.com/pradeep-the-analyst/excel-AtliQ-Reports"
                class="githun-repo"
                target="_blank"><i class="fa-brands fa-github dashboard-icon2"></i>View
                Project on GitHUB</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-container">
        <img
          src="./assets/delicious.png"
          alt="thumbnail"
          class="project-thumbnail" />
        <div class="project-title">
          <h1>Food Delivery Website </h1>

          <div class="button-logo-container">
            <button id="button" onclick="liveDashboard()">
              View Project
            </button>
            <div class="skill-img">


            </div>
          </div>
        </div>

        <div id="live-dashboard2" class="dashboard-main">
          <div class="live-dashboard-container">
            <i class="fa-solid fa-xmark close-icon" onclick="closeDashboard()"></i>

            <h1>
              Festive Campaign Analysis
              <br class="img-br" />

              <img
                src="https://res.cloudinary.com/dffu1ungl/image/upload/v1725383000/Microsoft-Power-BI-Logo-2013_gelnwa.png"
                alt="skill logo"
                class="logo-skill" />
              +
              <img
                src="https://res.cloudinary.com/dffu1ungl/image/upload/v1726482744/SQL_Logo_iztbna-removebg-preview_pqg3qf.png"
                alt=""
                class="logo-skill" />
            </h1>
            <hr class="hr-line" />

          </div>
          <div class="presentation-container">
            <h1>Presentation Video</h1>
            <iframe
              class="video-frame"
              src="https://www.youtube.com/embed/m4qr9eKvrhM?si=xlfwvjsYsdBD4uqY"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>




      </div>
    </div>
    </div>
    </div>



    <!-- certificate -->

  </section>

  <section id="certificate" class="certificate-container">
    <div class="headings">
      <h1 class="section-heading">Awards & Certificates</h1>
    </div>
    <div class="certificate-card-container">
      <div class="certificate-card">
        <img
          src="./assets/Certificates2.jpeg"
          alt="" />
      </div>
      <div class="certificate-card">
        <img
          src="./assets/Certificates1.jpeg"
          alt="" />
      </div>
      <div class="certificate-card">
        <img
          src="./assets/Certificates3.jpeg"
          alt="" />

      </div>
      <div class="certificate-card">
        <img
          src="./assets/Certificates4.jpeg"
          alt="" />

      </div>

      <div class="certificate-card">
        <img
          src="./assets/Certificates6.jpg"
          alt="" />

      </div>
      <div class="certificate-card">
        <img
          src="./assets/Certificates7.jpg"
          alt="" />

      </div>



    </div>


  </section>



  <section id="contact" class="contact">
    <div class="headings">
      <p class="headings-para">Get in Touch</p>
      <h1 class="section-heading">Contact Me</h1>
    </div>

    <div class="form-content-container">
      <div class="form-content">
        <h1>Let's Connect</h1>
        <p>
          As a Full Stack developer I have handled projects from scratch, developed their frontend and backend. I successfully
          integrated third-party APIs, managed ,databases effectively, and deployed applications on cloud platforms. Applied agile
          methodologies to efficiently manage projects, ensuring timely deliver.
        </p>
        <div class="social-media-icons">
          <!-- LinkedIn Icon -->
          <a href="https://www.linkedin.com/in/aditi-singh-a533031ab/" target="_blank">
            <i class="fa-brands fa-linkedin-in linkedin-icon" style="color: #0077b5"></i>
          </a>

          <!-- GitHub Icon -->
          <a href="https://github.com/kumariaditi52" target="_blank">
            <i class="fa-brands fa-github github-icon" style="color: #0077b5"></i>
          </a>
        </div>

      </div>
    <?php
// Include the database connection file
include 'connection.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject'])) {
        // Get form data
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $subject = $conn->real_escape_string($_POST['subject']);
        $message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';

        // Insert data into the database (id and submitted_at are handled automatically)
        $sql = "INSERT INTO contact_form (name, email, subject, message) 
                VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Message submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill out all required fields.";
    }
}

// Close the connection at the end of the script
$conn->close();
?>



<form action="index.php" method="POST">
    <input type="hidden" name="access_key" value="195781f0-c000-48a4-9585-8994d39d2ff7" />
    <input type="text" name="name" placeholder="Enter Your Name" required class="input-style" />
    <input type="email" name="email" placeholder="Enter Your Mail Id" required class="input-style" />
    <input type="text" name="subject" placeholder="Enter Subject Of The Mail" required class="input-style" />
    <textarea name="message" cols="30" rows="6" placeholder="Enter Your Message Here"></textarea>
    <button type="submit" name="submit" class="submit-button">
        SUBMIT <i class="fa-solid fa-paper-plane icon-plane"></i>
    </button>
</form>

<script>
// Hide the success message after 10 minutes (600,000 milliseconds)
setTimeout(function() {
    var successMessage = document.getElementById('successMessage');
    if (successMessage) {
        successMessage.style.display = 'none';
    }
}, 600000); // 10 minutes
</script>

    </div>

    <a href="#home"><i class="fa-solid fa-angles-up arrow-icon"></i></a>
  </section>

  <footer class="footer">
    <div class="footer-container">
      <h2>
        <a
          href="#"
          target="_blank"
          class="get-yours">Get Your Custom Portfolio Website</a>
      </h2>
    </div>
    <div class="contact-link">
      <h2>
        Developed by

      </h2>
    </div>
  </footer>

  <script src="https://unpkg.com/scrollreveal"></script>

  <script src="index.js"></script>
</body>

</html>