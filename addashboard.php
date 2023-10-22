<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>DashBoard</title>
    <link rel="stylesheet" href="addashboard.css">
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
                  <p>Grade 10 - Einstein</p>
                  <p>Class Adviser</p>
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
                    <h3 class="cons">Dos Dela Cruz</h3>
                    <h3 class="cons">Tres Dela Cruz</h3>
                    <h3 class="cons">Cuatro Dela Cruz</h3>
                    <h3 class="cons">Cinco Dela Cruz</h3>
                    <h3 class="cons">Seis Dela Cruz</h3>
                    <h3 class="cons">Seite Dela Cruz</h3>
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

            <div class="plus-container">
                <div class="circle">
                    <i class='bx bx-plus'></i>
                </div>
            </div>
        </section>

<div class="popup-container" id="popup">
    <div class="popup">
        <span class="close" id="close-popup">×</span>
        <form id="student-form">
            <div class="row">
                <div class="columns">
                    <div class="form-group">
                        <div class="photo-container">
                            <input type="file" accept="image/*" id="student-photo" name="student-photo" style="display: none;">
                            <label for="student-photo" class="circle">
                                <p>Add Photo</p>
                            </label>
                        </div>
                                            
                    </div>
                </div>
                <div class="columns">
                    <div class="form-group">
                        <label for="student-name">Student Name</label>
                        <input type="text" id="student-name" name="student-name" required>
                    </div>
                    <div class="form-group">
                        <label for="student-id">ID Number</label>
                        <input type="text" id="student-id" name="student-id" required>
                    </div>
                    <div class="form-group">
                        <label for="student-grade-section">Grade and Section</label>
                        <input type="text" id="student-grade-section" name="student-grade-section" required>
                    </div>
                </div>
                <div class="columns">
                    <div class="form-group">
                        <label for="date-added">Date Added</label>
                        <input type="date" id="date-added" name="date-added" required>
                    </div>
                    <div class="form-group">
                        <label for="period-identification">Period Identification</label>
                        <select id="period-identification" name="period-identification" required>
                            <option value="1st Period">1st Period</option>
                            <option value="2nd Period">2nd Period</option>
                            <option value="3rd Period">3rd Period</option>
                            <option value="4th Period">4th Period</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="star-identification">STAR Identification</label>
                        <select id="star-identification" name="star-identification" required>
                            <option value="Psychological">Psychological</option>
                            <option value="Academic">Academic</option>
                            <option value="Behavioral">Behavioral</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="columns">
                    <div class="form-group">
                        <label for="identification-indicators">Identification Indicators</label>
                        <textarea id="identification-indicators" name="identification-indicators"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="columns">
                    <div class="form-group">
                        <label for="notes">Notes upon Identification</label>
                        <textarea id="notes" name="notes"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" id="add-student-btn">Add Student</button>
        </form>
    </div>
</div>
</div>
<div class="addpopup" id="myPopup">
    <div class="popup-content">
        <div class="popup-header">
            <img src="img/logo.png" alt="Logo">
            <h2>Student Successfully Added</h2>
        </div>
        <div class="popup-footer">
            <button onclick="closepopup()">OK</button>
        </div>
    </div>
</div>


<script src="addashboard.js"></script>
</body>
</html>

