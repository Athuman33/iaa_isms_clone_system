<?php
$page_title = "Examination Number - ISMS";
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
    
  <h1>Examination Number</h1>
    
  <section class="examination-section">
      <div class="card">
          <div class="card-body">
              <h5 class="card-title">Your Examination Details</h5>
              <div class="exam-info">
                  <div class="exam-number-display">
                      <h2>Examination Number</h2>
                      <div class="exam-number">EX2024-CS-001</div>
                      <p class="exam-note">Please keep this number safe for all examination purposes</p>
                  </div>
                    
                  <div class="student-details">
                      <div class="detail-row">
                          <span class="label">Student Name:</span>
                          <span class="value">Joshua Lucas</span>
                      </div>
                      <div class="detail-row">
                          <span class="label">Student ID:</span>
                          <span class="value">BCS-01-0126-2023</span>
                      </div>
                      <div class="detail-row">
                          <span class="label">Program:</span>
                          <span class="value">Computer Science</span>
                      </div>
                      <div class="detail-row">
                          <span class="label">Level:</span>
                          <span class="value">7</span>
                      </div>
                      <div class="detail-row">
                          <span class="label">Academic Year:</span>
                          <span class="value">2024/2025</span>
                      </div>
                  </div>
              </div>
                
              <div class="exam-actions">
                  <button class="btn btn-primary" onclick="printExamNumber()">Print Examination Number</button>
                  <button class="btn btn-secondary" onclick="downloadExamCard()">Download Exam Card</button>
              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-body">
              <h5 class="card-title">Upcoming Examinations</h5>
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Course Code</th>
                              <th>Course Name</th>
                              <th>Exam Date</th>
                              <th>Time</th>
                              <th>Duration</th>
                              <th>Venue</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>ITU07427</td>
                              <td>Programming and Applications</td>
                              <td>2024-05-15</td>
                              <td>09:00 AM</td>
                              <td>3 Hours</td>
                              <td>Hall A</td>
                              <td><span class="badge badge-info">Scheduled</span></td>
                          </tr>
                          <tr>
                              <td>ITU07428</td>
                              <td>Database Systems</td>
                              <td>2024-05-18</td>
                              <td>02:00 PM</td>
                              <td>3 Hours</td>
                              <td>Hall B</td>
                              <td><span class="badge badge-info">Scheduled</span></td>
                          </tr>
                          <tr>
                              <td>ITU07429</td>
                              <td>Web Development</td>
                              <td>2024-05-22</td>
                              <td>09:00 AM</td>
                              <td>3 Hours</td>
                              <td>Lab 1</td>
                              <td><span class="badge badge-info">Scheduled</span></td>
                          </tr>
                          <tr>
                              <td>ITU07430</td>
                              <td>Software Engineering</td>
                              <td>2024-05-25</td>
                              <td>02:00 PM</td>
                              <td>3 Hours</td>
                              <td>Hall C</td>
                              <td><span class="badge badge-warning">Pending</span></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-body">
              <h5 class="card-title">Examination Instructions</h5>
              <div class="instructions">
                  <ol>
                      <li>Arrive at the examination venue at least 30 minutes before the scheduled time</li>
                      <li>Bring your examination number and student ID card</li>
                      <li>Mobile phones and electronic devices are not allowed in the examination room</li>
                      <li>Only blue or black ink pens are permitted</li>
                      <li>Read all instructions carefully before starting the examination</li>
                      <li>Raise your hand if you need assistance during the exam</li>
                      <li>Submit your answer sheet before leaving the examination room</li>
                  </ol>
              </div>
          </div>
      </div>
  </section>
</main>

<script>
function printExamNumber() {
  window.print();
}

function downloadExamCard() {
  alert('Exam card download will be available soon');
}
</script>

<?php include 'includes/footer.php'; ?>
