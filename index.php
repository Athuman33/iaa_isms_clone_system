<?php
$page_title = "Dashboard - ISMS";
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
    
    <h1>Home Panel</h1>
    
    <section class="course-section">
        <p class="course-info">
            Level: <span class="bold">7</span> |
            <span class="icon icon-calendar"></span>
            Academic Year: <span class="bold">2024/2025</span>
        </p>
        <h1 class="course-title">COURSE EVALUATION</h1>
        <div class="course-details">
            <span>Programming and Applications</span>
            <span>ITU07427</span>
        </div>
    </section>

    <!-- Home Panel Section -->
    <section class="home-panel">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Quick Access</h5>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Exams</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Schedule exams</h6>
                                <p class="card-text">View and schedule exams.</p>
                                <a href="examination.php" class="card-link">View Exams</a>
                                <a href="results.php" class="card-link">Check Results</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Profile</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Manage profile</h6>
                                <p class="card-text">Update your profile information.</p>
                                <a href="profile.php" class="card-link">View Profile</a>
                                <a href="edit-photo.php" class="card-link">Edit Photo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Payments</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Fee management</h6>
                                <p class="card-text">View payment history and make payments.</p>
                                <a href="payments.php" class="card-link">View Payments</a>
                                <a href="change-password.php" class="card-link">Security</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>