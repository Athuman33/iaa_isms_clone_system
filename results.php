<?php
$page_title = "Results - ISMS";
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<!-- Main content -->
<main class="main-content">
    <header class="header">
        <button aria-label="Notifications" class="header-btn">
            <i class="fas fa-bell"></i>
            <span class="notification-badge">•</span>
        </button>
        <button aria-label="Logout" class="header-btn">
            <i class="fas fa-sign-out-alt"></i>
        </button>
    </header>

    <h1>Examination Results</h1>

    <section class="results-section">
        <!-- Academic Performance Summary -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <i class="fas fa-chart-line"></i>
                    Academic Performance Summary
                </h5>
                <div class="performance-summary">
                    <div class="summary-card gpa-card">
                        <div class="summary-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="summary-content">
                            <h3>Overall GPA</h3>
                            <div class="gpa-score">3.75</div>
                            <p class="gpa-grade">First Class</p>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card credits-card">
                        <div class="summary-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="summary-content">
                            <h3>Credits Completed</h3>
                            <div class="credits">45/60</div>
                            <p class="credits-note">Credits</p>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card level-card">
                        <div class="summary-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="summary-content">
                            <h3>Current Level</h3>
                            <div class="level">7</div>
                            <p class="level-note">Final Year</p>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 87.5%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Semester Results -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <i class="fas fa-calendar-alt"></i>
                    Semester Results
                </h5>
                <div class="semester-tabs">
                    <button class="tab-btn active" onclick="showSemester('current')">
                        <i class="fas fa-clock"></i>
                        Current Semester
                    </button>
                    <button class="tab-btn" onclick="showSemester('previous')">
                        <i class="fas fa-history"></i>
                        Previous Semesters
                    </button>
                    <button class="tab-btn" onclick="showSemester('all')">
                        <i class="fas fa-list"></i>
                        All Results
                    </button>
                </div>

                <!-- Current Semester -->
                <div id="current-semester" class="semester-content active">
                    <div class="semester-header">
                        <h6>
                            <i class="fas fa-calendar"></i>
                            Semester 1 - 2024/2025
                        </h6>
                        <div class="semester-stats">
                            <span class="stat">
                                <i class="fas fa-star"></i>
                                GPA: 3.8
                            </span>
                            <span class="stat">
                                <i class="fas fa-book-open"></i>
                                Credits: 15
                            </span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table results-table">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Credits</th>
                                    <th>CA</th>
                                    <th>Final</th>
                                    <th>Total</th>
                                    <th>Grade</th>
                                    <th>Points</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="result-row">
                                    <td class="course-code">ITU07427</td>
                                    <td class="course-name">Programming and Applications</td>
                                    <td class="credits">3</td>
                                    <td class="ca-marks">35/40</td>
                                    <td class="final-marks">50/60</td>
                                    <td class="total-marks">85</td>
                                    <td class="grade grade-a">A</td>
                                    <td class="points">5.0</td>
                                    <td><span class="badge badge-success">Pass</span></td>
                                </tr>
                                <tr class="result-row">
                                    <td class="course-code">ITU07428</td>
                                    <td class="course-name">Database Systems</td>
                                    <td class="credits">3</td>
                                    <td class="ca-marks">32/40</td>
                                    <td class="final-marks">46/60</td>
                                    <td class="total-marks">78</td>
                                    <td class="grade grade-b">B+</td>
                                    <td class="points">4.0</td>
                                    <td><span class="badge badge-success">Pass</span></td>
                                </tr>
                                <tr class="result-row">
                                    <td class="course-code">ITU07429</td>
                                    <td class="course-name">Web Development</td>
                                    <td class="credits">3</td>
                                    <td class="ca-marks">38/40</td>
                                    <td class="final-marks">54/60</td>
                                    <td class="total-marks">92</td>
                                    <td class="grade grade-a">A</td>
                                    <td class="points">5.0</td>
                                    <td><span class="badge badge-success">Pass</span></td>
                                </tr>
                                <tr class="result-row">
                                    <td class="course-code">ITU07430</td>
                                    <td class="course-name">Software Engineering</td>
                                    <td class="credits">3</td>
                                    <td class="ca-marks">30/40</td>
                                    <td class="final-marks">-</td>
                                    <td class="total-marks">-</td>
                                    <td class="grade grade-pending">-</td>
                                    <td class="points">-</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr class="result-row">
                                    <td class="course-code">ITU07431</td>
                                    <td class="course-name">Computer Networks</td>
                                    <td class="credits">3</td>
                                    <td class="ca-marks">28/40</td>
                                    <td class="final-marks">44/60</td>
                                    <td class="total-marks">72</td>
                                    <td class="grade grade-b">B</td>
                                    <td class="points">3.5</td>
                                    <td><span class="badge badge-success">Pass</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Previous Semesters -->
                <div id="previous-semester" class="semester-content">
                    <div class="previous-semesters">
                        <div class="semester-item">
                            <div class="semester-header">
                                <h6>
                                    <i class="fas fa-calendar"></i>
                                    Semester 2 - 2023/2024
                                </h6>
                                <div class="semester-stats">
                                    <span class="stat">
                                        <i class="fas fa-star"></i>
                                        GPA: 3.7
                                    </span>
                                    <span class="stat">
                                        <i class="fas fa-book-open"></i>
                                        Credits: 15
                                    </span>
                                    <span class="stat">
                                        <i class="fas fa-check-circle"></i>
                                        Completed
                                    </span>
                                </div>
                            </div>
                            <button class="btn btn-outline btn-sm" onclick="toggleSemesterDetails('sem2-2023')">
                                <i class="fas fa-eye"></i>
                                View Details
                            </button>
                        </div>

                        <div class="semester-item">
                            <div class="semester-header">
                                <h6>
                                    <i class="fas fa-calendar"></i>
                                    Semester 1 - 2023/2024
                                </h6>
                                <div class="semester-stats">
                                    <span class="stat">
                                        <i class="fas fa-star"></i>
                                        GPA: 3.9
                                    </span>
                                    <span class="stat">
                                        <i class="fas fa-book-open"></i>
                                        Credits: 15
                                    </span>
                                    <span class="stat">
                                        <i class="fas fa-check-circle"></i>
                                        Completed
                                    </span>
                                </div>
                            </div>
                            <button class="btn btn-outline btn-sm" onclick="toggleSemesterDetails('sem1-2023')">
                                <i class="fas fa-eye"></i>
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- All Results -->
                <div id="all-semester" class="semester-content">
                    <div class="results-summary">
                        <h6>Complete Academic Record</h6>
                        <div class="academic-progress">
                            <div class="progress-item">
                                <span class="label">Overall Progress:</span>
                                <div class="progress-bar large">
                                    <div class="progress-fill" style="width: 75%"></div>
                                    <span class="progress-text">75%</span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" onclick="downloadTranscript()">
                            <i class="fas fa-download"></i>
                            Download Official Transcript
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grade Distribution -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <i class="fas fa-chart-pie"></i>
                    Grade Distribution
                </h5>
                <div class="grade-distribution">
                    <div class="grade-item">
                        <div class="grade-circle grade-a-circle">
                            <span class="grade-letter">A</span>
                        </div>
                        <div class="grade-info">
                            <span class="grade-count">8 courses</span>
                            <span class="grade-percentage">40%</span>
                        </div>
                    </div>
                    <div class="grade-item">
                        <div class="grade-circle grade-b-circle">
                            <span class="grade-letter">B</span>
                        </div>
                        <div class="grade-info">
                            <span class="grade-count">7 courses</span>
                            <span class="grade-percentage">35%</span>
                        </div>
                    </div>
                    <div class="grade-item">
                        <div class="grade-circle grade-c-circle">
                            <span class="grade-letter">C</span>
                        </div>
                        <div class="grade-info">
                            <span class="grade-count">4 courses</span>
                            <span class="grade-percentage">20%</span>
                        </div>
                    </div>
                    <div class="grade-item">
                        <div class="grade-circle grade-d-circle">
                            <span class="grade-letter">D</span>
                        </div>
                        <div class="grade-info">
                            <span class="grade-count">1 course</span>
                            <span class="grade-percentage">5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <i class="fas fa-tools"></i>
                    Actions
                </h5>
                <div class="action-buttons">
                    <button class="btn btn-primary" onclick="printResults()">
                        <i class="fas fa-print"></i>
                        Print Results
                    </button>
                    <button class="btn btn-secondary" onclick="downloadResults()">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </button>
                    <button class="btn btn-info" onclick="shareResults()">
                        <i class="fas fa-share"></i>
                        Share Results
                    </button>
                    <button class="btn btn-warning" onclick="requestVerification()">
                        <i class="fas fa-certificate"></i>
                        Request Verification
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Tab switching functionality
    function showSemester(semesterType) {
        // Hide all semester contents
        const contents = document.querySelectorAll('.semester-content');
        contents.forEach(content => content.classList.remove('active'));

        // Remove active class from all tabs
        const tabs = document.querySelectorAll('.tab-btn');
        tabs.forEach(tab => tab.classList.remove('active'));

        // Show selected semester content
        document.getElementById(semesterType + '-semester').classList.add('active');

        // Add active class to clicked tab
        event.target.classList.add('active');
    }

    // Toggle semester details
    function toggleSemesterDetails(semesterId) {
        // This would typically show detailed results for the selected semester
        alert('Detailed results for ' + semesterId + ' would be displayed here');
    }

    // Print results functionality
    function printResults() {
        // Create a new window for printing
        const printWindow = window.open('', '_blank');
        const printContent = `
        <!DOCTYPE html>
        <html>
        <head>
            <title>Academic Results - Joshua Lucas</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 20px; }
                .header { text-align: center; margin-bottom: 30px; }
                .student-info { margin-bottom: 20px; }
                table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
                th { background-color: #f2f2f2; }
                .summary { display: flex; justify-content: space-around; margin-bottom: 20px; }
                .summary-item { text-align: center; }
                @media print { 
                    body { margin: 0; }
                    .no-print { display: none; }
                }
            </style>
        </head>
        <body>
            <div class="header">
                <h1>Institute of Accountancy Arusha</h1>
                <h2>Student Academic Results</h2>
            </div>
            <div class="student-info">
                <p><strong>Student Name:</strong> Joshua Lucas</p>
                <p><strong>Student ID:</strong> STU2024001</p>
                <p><strong>Program:</strong> Computer Science</p>
                <p><strong>Academic Year:</strong> 2024/2025</p>
                <p><strong>Level:</strong> 7</p>
            </div>
            <div class="summary">
                <div class="summary-item">
                    <h3>Overall GPA</h3>
                    <p>3.75 (First Class)</p>
                </div>
                <div class="summary-item">
                    <h3>Credits Completed</h3>
                    <p>45/60</p>
                </div>
                <div class="summary-item">
                    <h3>Current Level</h3>
                    <p>7 (Final Year)</p>
                </div>
            </div>
            ${document.querySelector('.results-table').outerHTML}
        </body>
        </html>
    `;

        printWindow.document.write(printContent);
        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
        printWindow.close();
    }

    // Download results as PDF
    function downloadResults() {
        // Show loading state
        const btn = event.target;
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generating PDF...';
        btn.disabled = true;

        // Simulate PDF generation
        setTimeout(() => {
            // Create a blob with sample PDF content (in real implementation, you'd generate actual PDF)
            const pdfContent = generatePDFContent();
            const blob = new Blob([pdfContent], {
                type: 'application/pdf'
            });
            const url = window.URL.createObjectURL(blob);

            // Create download link
            const a = document.createElement('a');
            a.href = url;
            a.download = 'academic_results_joshua_lucas.pdf';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);

            // Reset button
            btn.innerHTML = originalText;
            btn.disabled = false;

            // Show success message
            showNotification('PDF downloaded successfully!', 'success');
        }, 2000);
    }

    // Generate PDF content (simplified version)
    function generatePDFContent() {
        return `%PDF-1.4
1 0 obj
<<
/Type /Catalog
/Pages 2 0 R
>>
endobj

2 0 obj
<<
/Type /Pages
/Kids [3 0 R]
/Count 1
>>
endobj

3 0 obj
<<
/Type /Page
/Parent 2 0 R
/MediaBox [0 0 612 792]
/Contents 4 0 R
>>
endobj

4 0 obj
<<
/Length 44
>>
stream
BT
/F1 12 Tf
72 720 Td
(Academic Results - Joshua Noah Lucas) Tj
ET
endstream
endobj

xref
0 5
0000000000 65535 f 
0000000009 00000 n 
0000000058 00000 n 
0000000115 00000 n 
0000000206 00000 n 
trailer
<<
/Size 5
/Root 1 0 R
>>
startxref
300
%%EOF`;
    }

    // Share results functionality
    function shareResults() {
        if (navigator.share) {
            // Use native Web Share API if available
            navigator.share({
                title: 'My Academic Results',
                text: 'Check out my academic performance - GPA: 3.75 (First Class)',
                url: window.location.href
            }).then(() => {
                showNotification('Results shared successfully!', 'success');
            }).catch((error) => {
                console.log('Error sharing:', error);
                fallbackShare();
            });
        } else {
            fallbackShare();
        }
    }

    // Fallback share functionality
    function fallbackShare() {
        const shareModal = document.createElement('div');
        shareModal.className = 'share-modal';
        shareModal.innerHTML = `
        <div class="share-modal-content">
            <div class="share-modal-header">
                <h3>Share Results</h3>
                <button class="close-modal" onclick="closeShareModal()">&times;</button>
            </div>
            <div class="share-modal-body">
                <div class="share-options">
                    <button class="share-btn email-share" onclick="shareViaEmail()">
                        <i class="fas fa-envelope"></i>
                        Email
                    </button>
                    <button class="share-btn whatsapp-share" onclick="shareViaWhatsApp()">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp
                    </button>
                    <button class="share-btn copy-link" onclick="copyShareLink()">
                        <i class="fas fa-copy"></i>
                        Copy Link
                    </button>
                    <button class="share-btn print-share" onclick="printResults()">
                        <i class="fas fa-print"></i>
                        Print
                    </button>
                </div>
            </div>
        </div>
    `;

        document.body.appendChild(shareModal);
        shareModal.style.display = 'flex';
    }

    // Close share modal
    function closeShareModal() {
        const modal = document.querySelector('.share-modal');
        if (modal) {
            modal.remove();
        }
    }

    // Share via email
    function shareViaEmail() {
        const subject = encodeURIComponent('My Academic Results');
        const body = encodeURIComponent(`Hi,\n\nI wanted to share my academic results with you.\n\nOverall GPA: 3.75 (First Class)\nCredits Completed: 45/60\nCurrent Level: 7 (Final Year)\n\nBest regards,\nJoshua Noah Lucas`);
        window.open(`mailto:?subject=${subject}&body=${body}`);
        closeShareModal();
    }

    // Share via WhatsApp
    function shareViaWhatsApp() {
        const text = encodeURIComponent('Check out my academic results! GPA: 3.75 (First Class) 🎓');
        window.open(`https://wa.me/?text=${text}`);
        closeShareModal();
    }

    // Copy share link
    function copyShareLink() {
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(() => {
            showNotification('Link copied to clipboard!', 'success');
            closeShareModal();
        }).catch(() => {
            // Fallback for older browsers
            const textArea = document.createElement('textarea');
            textArea.value = url;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            showNotification('Link copied to clipboard!', 'success');
            closeShareModal();
        });
    }

    // Request verification
    function requestVerification() {
        const modal = document.createElement('div');
        modal.className = 'verification-modal';
        modal.innerHTML = `
        <div class="verification-modal-content">
            <div class="verification-modal-header">
                <h3>Request Results Verification</h3>
                <button class="close-modal" onclick="closeVerificationModal()">&times;</button>
            </div>
            <div class="verification-modal-body">
                <form id="verificationForm">
                    <div class="form-group">
                        <label for="verificationPurpose">Purpose of Verification:</label>
                        <select id="verificationPurpose" class="form-control" required>
                            <option value="">Select purpose</option>
                            <option value="employment">Employment</option>
                            <option value="further_studies">Further Studies</option>
                            <option value="scholarship">Scholarship Application</option>
                            <option value="immigration">Immigration</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipientName">Recipient Name:</label>
                        <input type="text" id="recipientName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="recipientEmail">Recipient Email:</label>
                        <input type="email" id="recipientEmail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="additionalNotes">Additional Notes:</label>
                        <textarea id="additionalNotes" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit Request</button>
                        <button type="button" class="btn btn-secondary" onclick="closeVerificationModal()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    `;

        document.body.appendChild(modal);
        modal.style.display = 'flex';

        // Handle form submission
        document.getElementById('verificationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            submitVerificationRequest();
        });
    }

    // Close verification modal
    function closeVerificationModal() {
        const modal = document.querySelector('.verification-modal');
        if (modal) {
            modal.remove();
        }
    }

    // Submit verification request
    function submitVerificationRequest() {
        const form = document.getElementById('verificationForm');
        const formData = new FormData(form);

        // Show loading state
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
        submitBtn.disabled = true;

        // Simulate API call
        setTimeout(() => {
            // Reset form and close modal
            form.reset();
            closeVerificationModal();

            // Show success message
            showNotification('Verification request submitted successfully! You will receive a confirmation email shortly.', 'success');
        }, 2000);
    }

    // Download official transcript
    function downloadTranscript() {
        const btn = event.target;
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generating Transcript...';
        btn.disabled = true;

        // Simulate transcript generation
        setTimeout(() => {
            // Create download
            const transcriptData = generateTranscriptData();
            const blob = new Blob([transcriptData], {
                type: 'application/pdf'
            });
            const url = window.URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = 'official_transcript_joshua_lucas.pdf';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);

            // Reset button
            btn.innerHTML = originalText;
            btn.disabled = false;

            showNotification('Official transcript downloaded successfully!', 'success');
        }, 3000);
    }

    // Generate transcript data
    function generateTranscriptData() {
        return generatePDFContent(); // Reuse PDF generation for now
    }

    // Show notification
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
            <span>${message}</span>
        </div>
        <button class="notification-close" onclick="this.parentElement.remove()">&times;</button>
    `;

        document.body.appendChild(notification);

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (notification.parentElement) {
                notification.remove();
            }
        }, 5000);
    }

    // Initialize page
    document.addEventListener('DOMContentLoaded', function() {
        // Add click handlers for result rows
        const resultRows = document.querySelectorAll('.result-row');
        resultRows.forEach(row => {
            row.addEventListener('click', function() {
                const courseCode = this.querySelector('.course-code').textContent;
                showCourseDetails(courseCode);
            });
        });

        // Add hover effects for grade circles
        const gradeCircles = document.querySelectorAll('.grade-circle');
        gradeCircles.forEach(circle => {
            circle.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1)';
            });

            circle.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    });

    // Show course details
    function showCourseDetails(courseCode) {
        const courseData = {
            'ITU07427': {
                name: 'Programming and Applications',
                instructor: 'Dr. Smith Johnson',
                credits: 3,
                description: 'Advanced programming concepts and application development'
            },
            'ITU07428': {
                name: 'Database Systems',
                instructor: 'Prof. Mary Wilson',
                credits: 3,
                description: 'Database design, implementation, and management'
            }
            // Add more course data as needed
        };

        const course = courseData[courseCode];
        if (course) {
            alert(`Course: ${course.name}\nInstructor: ${course.instructor}\nCredits: ${course.credits}\nDescription: ${course.description}`);
        }
    }
</script>

<?php include 'includes/footer.php'; ?>