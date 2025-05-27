<?php
// Get current page name
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <img alt="Student Profile logo" class="logo" src="assets/images/logo.jpg"/>
        <button aria-label="Collapse sidebar" class="collapse-btn" id="collapseBtn">
            <span class="icon icon-arrow-left"></span>
        </button>
    </div>
    
    <div class="user-section">
        <p class="welcome-text">Welcome,</p>
        <button aria-expanded="false" aria-haspopup="true" class="user-dropdown">
            Joshua Lucas
            <span class="icon icon-caret-down"></span>
        </button>
    </div>
    
    <hr class="divider"/>
    
    <nav class="nav">
        <a class="nav-link <?php echo ($current_page == 'index') ? 'active' : ''; ?>" href="index.php">
            <span class="icon icon-dashboard"></span>
            <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link <?php echo ($current_page == 'profile') ? 'active' : ''; ?>" href="profile.php">
            <span class="icon icon-user"></span>
            <span class="nav-text">My Profile</span>
        </a>
        <a class="nav-link <?php echo ($current_page == 'edit-photo') ? 'active' : ''; ?>" href="edit-photo.php">
            <span class="icon icon-edit"></span>
            <span class="nav-text">Edit Photo</span>
        </a>
        <a class="nav-link <?php echo ($current_page == 'payments') ? 'active' : ''; ?>" href="payments.php">
            <span class="icon icon-payment"></span>
            <span class="nav-text">Payments</span>
        </a>
        <a class="nav-link <?php echo ($current_page == 'examination') ? 'active' : ''; ?>" href="examination.php">
            <span class="icon icon-exam"></span>
            <span class="nav-text">Examination Number</span>
        </a>
        <a class="nav-link <?php echo ($current_page == 'results') ? 'active' : ''; ?>" href="results.php">
            <span class="icon icon-results"></span>
            <span class="nav-text">Results</span>
        </a>
        <a class="nav-link <?php echo ($current_page == 'change-password') ? 'active' : ''; ?>" href="change-password.php">
            <span class="icon icon-password"></span>
            <span class="nav-text">Change Password</span>
        </a>
        <a class="nav-link" href="logout.php">
            <span class="icon icon-logout"></span>
            <span class="nav-text">Logout</span>
        </a>
    </nav>
</aside>