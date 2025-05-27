<?php
$page_title = "Change Password - ISMS";
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
    
    <h1>Change Password</h1>
    
    <section class="change-password-section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Your Password</h5>
                <p class="card-subtitle">For your security, please choose a strong password</p>
                
                <form class="password-form" id="passwordForm">
                    <div class="form-group">
                        <label for="currentPassword">Current Password</label>
                        <div class="password-input-group">
                            <input type="password" id="currentPassword" name="current_password" class="form-control" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('currentPassword')">
                                <span class="icon icon-eye" id="currentPasswordIcon">👁️</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <div class="password-input-group">
                            <input type="password" id="newPassword" name="new_password" class="form-control" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('newPassword')">
                                <span class="icon icon-eye" id="newPasswordIcon">👁️</span>
                            </button>
                        </div>
                        <div class="password-strength" id="passwordStrength">
                            <div class="strength-bar">
                                <div class="strength-fill" id="strengthFill"></div>
                            </div>
                            <span class="strength-text" id="strengthText">Password strength</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirmPassword">Confirm New Password</label>
                        <div class="password-input-group">
                            <input type="password" id="confirmPassword" name="confirm_password" class="form-control" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">
                                <span class="icon icon-eye" id="confirmPasswordIcon">👁️</span>
                            </button>
                        </div>
                        <div class="password-match" id="passwordMatch"></div>
                    </div>
                    
                    <div class="password-requirements">
                        <h6>Password Requirements:</h6>
                        <ul id="requirementsList">
                            <li id="length" class="requirement">At least 8 characters long</li>
                            <li id="uppercase" class="requirement">Contains uppercase letter (A-Z)</li>
                            <li id="lowercase" class="requirement">Contains lowercase letter (a-z)</li>
                            <li id="number" class="requirement">Contains at least one number (0-9)</li>
                            <li id="special" class="requirement">Contains special character (!@#$%^&*)</li>
                        </ul>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Update Password</button>
                        <button type="button" class="btn btn-secondary" onclick="resetForm()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Security Tips</h5>
                <div class="security-tips">
                    <div class="tip">
                        <span class="tip-icon">🔒</span>
                        <div class="tip-content">
                            <h6>Use a Strong Password</h6>
                            <p>Create a password that's at least 8 characters long and includes a mix of letters, numbers, and symbols.</p>
                        </div>
                    </div>
                    <div class="tip">
                        <span class="tip-icon">🔄</span>
                        <div class="tip-content">
                            <h6>Change Regularly</h6>
                            <p>Update your password every 3-6 months to maintain account security.</p>
                        </div>
                    </div>
                    <div class="tip">
                        <span class="tip-icon">🚫</span>
                        <div class="tip-content">
                            <h6>Don't Share</h6>
                            <p>Never share your password with anyone or write it down in an unsecure location.</p>
                        </div>
                    </div>
                    <div class="tip">
                        <span class="tip-icon">📱</span>
                        <div class="tip-content">
                            <h6>Use Different Passwords</h6>
                            <p>Don't use the same password for multiple accounts or services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Recent Password Changes</h5>
                <div class="password-history">
                    <div class="history-item">
                        <span class="history-date">2024-02-15 10:30 AM</span>
                        <span class="history-action">Password changed successfully</span>
                        <span class="history-ip">IP: 192.168.1.100</span>
                    </div>
                    <div class="history-item">
                        <span class="history-date">2024-01-10 02:15 PM</span>
                        <span class="history-action">Password reset via email</span>
                        <span class="history-ip">IP: 192.168.1.105</span>
                    </div>
                    <div class="history-item">
                        <span class="history-date">2023-12-05 09:45 AM</span>
                        <span class="history-action">Password changed successfully</span>
                        <span class="history-ip">IP: 192.168.1.100</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Password visibility toggle
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = document.getElementById(fieldId + 'Icon');
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.textContent = '🙈';
    } else {
        field.type = 'password';
        icon.textContent = '👁️';
    }
}

// Password strength checker
document.getElementById('newPassword').addEventListener('input', function() {
    const password = this.value;
    checkPasswordStrength(password);
    checkPasswordRequirements(password);
    validateForm();
});

// Confirm password checker
document.getElementById('confirmPassword').addEventListener('input', function() {
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = this.value;
    const matchDiv = document.getElementById('passwordMatch');
    
    if (confirmPassword === '') {
        matchDiv.textContent = '';
        matchDiv.className = 'password-match';
    } else if (newPassword === confirmPassword) {
        matchDiv.textContent = '✓ Passwords match';
        matchDiv.className = 'password-match match';
    } else {
        matchDiv.textContent = '✗ Passwords do not match';
        matchDiv.className = 'password-match no-match';
    }
    validateForm();
});

function checkPasswordStrength(password) {
    const strengthFill = document.getElementById('strengthFill');
    const strengthText = document.getElementById('strengthText');
    
    let strength = 0;
    let strengthLabel = '';
    
    if (password.length >= 8) strength++;
    if (/[a-z]/.test(password)) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;
    
    switch (strength) {
        case 0:
        case 1:
            strengthFill.style.width = '20%';
            strengthFill.style.backgroundColor = '#dc3545';
            strengthLabel = 'Very Weak';
            break;
        case 2:
            strengthFill.style.width = '40%';
            strengthFill.style.backgroundColor = '#fd7e14';
            strengthLabel = 'Weak';
            break;
        case 3:
            strengthFill.style.width = '60%';
            strengthFill.style.backgroundColor = '#ffc107';
            strengthLabel = 'Fair';
            break;
        case 4:
            strengthFill.style.width = '80%';
            strengthFill.style.backgroundColor = '#20c997';
            strengthLabel = 'Good';
            break;
        case 5:
            strengthFill.style.width = '100%';
            strengthFill.style.backgroundColor = '#28a745';
            strengthLabel = 'Strong';
            break;
    }
    
    strengthText.textContent = strengthLabel;
}

function checkPasswordRequirements(password) {
    const requirements = {
        length: password.length >= 8,
        uppercase: /[A-Z]/.test(password),
        lowercase: /[a-z]/.test(password),
        number: /[0-9]/.test(password),
        special: /[^A-Za-z0-9]/.test(password)
    };
    
    Object.keys(requirements).forEach(req => {
        const element = document.getElementById(req);
        if (requirements[req]) {
            element.classList.add('met');
            element.classList.remove('requirement');
        } else {
            element.classList.remove('met');
            element.classList.add('requirement');
        }
    });
}

function validateForm() {
    const currentPassword = document.getElementById('currentPassword').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const submitBtn = document.getElementById('submitBtn');
    
    const isValid = currentPassword !== '' && 
                   newPassword !== '' && 
                   confirmPassword !== '' &&
                   newPassword === confirmPassword &&
                   newPassword.length >= 8 &&
                   /[A-Z]/.test(newPassword) &&
                   /[a-z]/.test(newPassword) &&
                   /[0-9]/.test(newPassword) &&
                   /[^A-Za-z0-9]/.test(newPassword);
    
    submitBtn.disabled = !isValid;
}

// Form submission
document.getElementById('passwordForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const currentPassword = document.getElementById('currentPassword').value;
    const newPassword = document.getElementById('newPassword').value;
    
    if (currentPassword === newPassword) {
        alert('New password must be different from current password');
        return;
    }
    
    // Simulate password change
    if (confirm('Are you sure you want to change your password?')) {
        // Here you would normally send the data to server
        alert('Password changed successfully!');
        resetForm();
    }
});

function resetForm() {
    document.getElementById('passwordForm').reset();
    document.getElementById('passwordMatch').textContent = '';
    document.getElementById('strengthFill').style.width = '0%';
    document.getElementById('strengthText').textContent = 'Password strength';
    document.getElementById('submitBtn').disabled = true;
    
    // Reset requirement indicators
    const requirements = ['length', 'uppercase', 'lowercase', 'number', 'special'];
    requirements.forEach(req => {
        const element = document.getElementById(req);
        element.classList.remove('met');
        element.classList.add('requirement');
    });
}

// Add input validation on current password
document.getElementById('currentPassword').addEventListener('input', validateForm);
</script>

<?php include 'includes/footer.php'; ?>
