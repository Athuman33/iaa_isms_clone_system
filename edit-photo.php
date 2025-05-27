<?php
$page_title = "Edit Photo - ISMS";
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
    
    <h1>Edit Photo</h1>
    
    <section class="edit-photo-section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Profile Photo</h5>
                <div class="photo-upload-container">
                    <div class="current-photo">
                        <img src="assets/images/default-avatar.jpg" alt="Current Profile Photo" class="profile-img-large" id="currentPhoto">
                        <p class="photo-info">Current Photo</p>
                    </div>
                    
                    <div class="upload-section">
                        <form class="upload-form" enctype="multipart/form-data">
                            <div class="upload-area" id="uploadArea">
                                <div class="upload-icon">📷</div>
                                <p>Drag and drop your photo here or click to browse</p>
                                <input type="file" id="photoInput" name="photo" accept="image/*" hidden>
                                <button type="button" class="btn btn-primary" onclick="document.getElementById('photoInput').click()">
                                    Choose Photo
                                </button>
                            </div>
                            
                            <div class="upload-requirements">
                                <h6>Photo Requirements:</h6>
                                <ul>
                                    <li>Maximum file size: 2MB</li>
                                    <li>Supported formats: JPG, PNG, GIF</li>
                                    <li>Recommended size: 300x300 pixels</li>
                                    <li>Photo should be clear and professional</li>
                                </ul>
                            </div>
                            
                            <div class="photo-preview" id="photoPreview" style="display: none;">
                                <h6>Preview:</h6>
                                <img id="previewImage" alt="Photo Preview" class="preview-img">
                                <div class="preview-actions">
                                    <button type="submit" class="btn btn-success">Upload Photo</button>
                                    <button type="button" class="btn btn-secondary" onclick="cancelPreview()">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="photo-actions">
                    <button class="btn btn-danger" onclick="removePhoto()">Remove Current Photo</button>
                    <a href="profile.php" class="btn btn-outline">Back to Profile</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.getElementById('photoInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        // Validate file size (2MB)
        if (file.size > 2 * 1024 * 1024) {
            alert('File size must be less than 2MB');
            return;
        }
        
        // Validate file type
        if (!file.type.startsWith('image/')) {
            alert('Please select a valid image file');
            return;
        }
        
        // Show preview
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImage').src = e.target.result;
            document.getElementById('photoPreview').style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});

function cancelPreview() {
    document.getElementById('photoPreview').style.display = 'none';
    document.getElementById('photoInput').value = '';
}

function removePhoto() {
    if (confirm('Are you sure you want to remove your current photo?')) {
        document.getElementById('currentPhoto').src = 'assets/images/default-avatar.jpg';
        alert('Photo removed successfully');
    }
}

// Drag and drop functionality
const uploadArea = document.getElementById('uploadArea');

uploadArea.addEventListener('dragover', function(e) {
    e.preventDefault();
    uploadArea.classList.add('drag-over');
});

uploadArea.addEventListener('dragleave', function(e) {
    e.preventDefault();
    uploadArea.classList.remove('drag-over');
});

uploadArea.addEventListener('drop', function(e) {
    e.preventDefault();
    uploadArea.classList.remove('drag-over');
    
    const files = e.dataTransfer.files;
    if (files.length > 0) {
        document.getElementById('photoInput').files = files;
        document.getElementById('photoInput').dispatchEvent(new Event('change'));
    }
});
</script>

<?php include 'includes/footer.php'; ?>