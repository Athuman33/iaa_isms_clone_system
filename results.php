<?php
$page_title = "Results - ISMS";
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<!-- Main content -->
<main class="main-content">
    <header class="header">
        <button aria-label="Notifications" class="header-btn">
            <span class="icon icon-bell"></span>
            <span class="notification-badge">•</span>
        </button>
        <button aria-label="Logout" class="header-btn">
            <span class="icon icon-logout"></span>
        </button>
    </header>
    
    <h1>Examination Results</h1>
    
    <section class="results-section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Academic Performance Summary</h5>
                <div class="performance-summary">
                    <div class="summary-card">
                        <h3>Overall GPA</h3>
                        <div class="gpa-score">3.75</div>
                        <p class="gpa-grade">First Class</p>
                    </div>
                    <div class="summary-card">
                        <h3>Credits Completed</h3>
                        <div class="credits">45/60</div>
                        <p class="credits-note">Credits</p>
                    </div>
                    <div class="summary-card">
                        <h3>Current Level</h3>
                        <div class="level">7</div>
                        <p class="level-note">Final Year</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Semester Results</h5>
                <div class="semester-tabs">
                    <button class="tab-btn active" onclick="showSemester('current')">Current Semester</button>
                    <button class="tab-btn" onclick="showSemester('previous')">Previous Semesters</button>
                </div>
                
                <div id="current-semester" class="semester-content">
                    <h6>Semester 1 - 2024/2025</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Credits</th>
                                    <th>Marks</th>
                                    <th>Grade</th>
                                    <th>Points</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ITU07427</td>
                                    <td>Programming and Applications</td>
                                    <td>3</td>
                                    <td>85</td>
                                    <td>A</td>
                                    <td>5.0</td>
                                    <td><span class="badge badge-success">Pass</span></td>
                                </tr>
                                <tr>
                                    <td>ITU07428</td>
                                    <td>Database Systems</td>
                                    <td>3</td>
                                    <td>78</td>
                                    <td>B+</td>
                                    <td>4.0</td>
                                    <td><span class="badge badge-success">Pass</span></td>
                                </tr>
                                <tr>
                                    <td>ITU07429</td>
                                    <td>Web Development</td>
                                    <td>3</td>
                                    <td>92</td>
                                    <td>A</td>
                                    <td>5.0</td>
                                    <td><span class="badge badge-success">Pass</span></td>
                                </tr>
                                <tr>
                                    <td>ITU07430</td>
                                    <td>Software Engineering</td>
                                    <td>3</td>
                                    <td>-</td>