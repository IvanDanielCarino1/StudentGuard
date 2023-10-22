<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>DashBoard</title>
    <link rel="stylesheet" href="gcdashboard.css">
</head>

<body>

    <header>
        <img src="img/logo.png" class="logs">
      <div class="container">
          <h4>StudentGuard | Student At Risks</h4>
      </div>
        <span class="menu-icon" id="menu-icon"><i class='bx bx-menu'></i></span>
        <div class="menu-popup" id="menu-popup">
            <ul>
                <li><a href="">Dashboard</li></a>
                <li><a href="">Tracking Students</li></a>
                <li><a href="">Settings</li></a>
            </ul>
        </div>
    </header>

    <div class="container">
        <section class="profile">
            <div class="left-container">
                <div class="profile-picture">
                  <img src="img/userp.png" alt="Profile Picture">
                </div>
            
                <div class="profile-details">
                  <h3>Cynthia C. Gonzales</h2>
                  <p>ID Number: 02345678</p>
                  <p>School Guidance Counselor</p>
                  <p>Dagupan City National High School</p>
                </div>
            </div>

            <div class="right-container">
                <div class="three-column-text">
                <div class="column">
                    <h3>A. Academic</h3>
                    <h3>B. Behavioral</h3>
                    <h3>C. Psychological</h3>
                  </div>
                </div>
                

                <div class="image">
                  <img src="img/data.png" alt="Example Image">
                </div>
            </div>
        </section>

        <section class="ident">
            <div class="column">
                <div class="container">
                    <h3 class="label">First Name, Last Name</h3>
                    <i class='bx bx-filter-alt' id="name-filter-icon"></i>
                </div>
                <div class="container">
                    <h3 class="label">STAR Identification</h3>
                    <i class='bx bx-filter-alt' id="star-filter-icon"></i>
                </div>
                <div class="container">
                    <h3 class="label">Grade Level</h3>
                    <i class='bx bx-filter-alt' id="grade-filter-icon"></i>
                </div>
                <div class="container" id="last-filter-container">
                    <h3 class="label">Section</h3>
                    <i class='bx bx-filter-alt' id="section-filter-icon"></i>
                </div>
            </div>
        </section>

        <div class="filter-popup" id="filter-popup">
            <ul id="filter-choices">
                
            </ul>
        </div>
    </div>
        </section>

        <section class="list">
            <div class="column">
                <div class="contents">
                    <h3 class="cons" data-name="Dos Dela Cruz">Dos Dela Cruz</h3>
                    <h3 class="cons" data-name="Tres Dela Cruz">Tres Dela Cruz</h3>
                    <h3 class="cons" data-name="Cuatro Dela Cruz">Cuatro Dela Cruz</h3>
                    <h3 class="cons" data-name="Cinco Dela Cruz">Cinco Dela Cruz</h3>
                    <h3 class="cons" data-name="Seis Dela Cruz">Seis Dela Cruz</h3>
                    <h3 class="cons" data-name="Seite Dela Cruz">Seite Dela Cruz</h3>
                </div>
            </div>

            <div class="column">
                <div class="contents">
                    <h3 class="cons">Behavioral</h3>
                    <h3 class="cons">Academic</h3>
                    <h3 class="cons">Behavioral</h3>
                    <h3 class="cons">Pyschological</h3>
                    <h3 class="cons">Academic</h3>
                    <h3 class="cons">Behavioral</h3>
                </div>
            </div>

            <div class="column">
                 <div class="contents">
                    <h3 class="cons">Grade 9</h3>
                    <h3 class="cons">Grade 9</h3>
                    <h3 class="cons">Grade 9</h3>
                    <h3 class="cons">Grade 9</h3>
                    <h3 class="cons">Grade 9</h3>
                    <h3 class="cons">Grade 9</h3>
                </div>
            </div>

            <div class="column">
                <div class="contents">
                    <h3 class="cons">Rizal</h3>
                    <h3 class="cons">Rizal</h3>
                    <h3 class="cons">Rizal</h3>
                    <h3 class="cons">Rizal</h3>
                    <h3 class="cons">Rizal</h3>
                    <h3 class="cons">Rizal</h3>
                </div>
            </div>
        </section>
    </div>

    <script src="gcdashboard.js"></script>
</body>
</html>

  
  