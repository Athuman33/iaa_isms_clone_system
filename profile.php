<?php
$page_title = "My Profile - ISMS";
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
    
    <h1>My Profile</h1>
    
    <section class="profile-section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Student Information</h5>
                <div class="profile-info">
                    <div class="profile-photo">
                        <img src="assets/images/default-avatar.jpg" alt="Profile Photo" class="profile-img">
                        <a href="edit-photo.php" class="btn btn-sm btn-primary">Change Photo</a>
                    </div>
                    <div class="profile-details">
                        <div class="info-group">
                            <label>Full Name:</label>
                            <span>Joshua Lucas</span>
                        </div>
                        <div class="info-group">
                            <label>Student ID:</label>
                            <span>BCS-01-0126-2023</span>
                        </div>
                        <div class="info-group">
                            <label>Email:</label>
                            <span>joshua.lucas@student.iaa.edu</span>
                        </div>
                        <div class="info-group">
                            <label>Phone:</label>
                            <span>+255 123 456 789</span>
                        </div>
                        <div class="info-group">
                            <label>Level:</label>
                            <span>7</span>
                        </div>
                        <div class="info-group">
                            <label>Academic Year:</label>
                            <span>2024/2025</span>
                        </div>
                        <div class="info-group">
                            <label>Program:</label>
                            <span>Computer Science</span>
                        </div>
                    </div>
                </div>
                <div class="profile-actions">
                    <button class="btn btn-primary">Edit Profile</button>
                    <a href="change-password.php" class="btn btn-secondary">Change Password</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
