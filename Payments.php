<?php
$page_title = "Payments - ISMS";
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
    
    <h1>Payments</h1>
    
    <section class="payments-section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Payment Summary</h5>
                <div class="payment-summary">
                    <div class="summary-item">
                        <span class="label">Total Fees:</span>
                        <span class="amount">$2,500.00</span>
                    </div>
                    <div class="summary-item">
                        <span class="label">Paid Amount:</span>
                        <span class="amount paid">$1,500.00</span>
                    </div>
                    <div class="summary-item">
                        <span class="label">Outstanding:</span>
                        <span class="amount outstanding">$1,000.00</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Payment History</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2024-01-15</td>
                                <td>Tuition Fee - Semester 1</td>
                                <td>$1,000.00</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline">Download</a></td>
                            </tr>
                            <tr>
                                <td>2024-02-15</td>
                                <td>Lab Fee</td>
                                <td>$500.00</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline">Download</a></td>
                            </tr>
                            <tr>
                                <td>2024-03-15</td>
                                <td>Tuition Fee - Semester 2</td>
                                <td>$1,000.00</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="payment-actions">
                    <button class="btn btn-primary">Make Payment</button>
                    <button class="btn btn-secondary">Request Invoice</button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
