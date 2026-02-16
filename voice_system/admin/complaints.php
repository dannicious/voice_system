<?php $page = 'complaints'; // for active sidebar highlighting ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Complaints</title>
    <link rel="stylesheet" href="../assets/css/admin_css/dashboard.css"> <!-- shared layout -->
    <link rel="stylesheet" href="../assets/css/admin_css/complaints.css"> <!-- page-specific -->
      <link rel="stylesheet" href="../assets/css/admin_css/sidebar.css">
      <link rel="stylesheet" href="../assets/css/admin_css/topbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Bar -->
            <?php include 'topbar.php'; ?>

            <!-- Complaints Content -->
            <section class="content">
                <h1>Complaints</h1>

                <!-- Filters -->
                <div class="filters">
                    <div class="filter-item">
                        <label for="college">College:</label>
                        <select id="college" name="college">
                            <option value="">All Colleges</option>
                            <option value="Education">Education</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Science">Science</option>
                            <!-- Dynamically load more colleges -->
                        </select>
                    </div>

                    <div class="filter-item">
                        <label for="date_from">From:</label>
                        <input type="date" id="date_from" name="date_from">
                    </div>

                    <div class="filter-item">
                        <label for="date_to">To:</label>
                        <input type="date" id="date_to" name="date_to">
                    </div>

                    <!-- Filter button right next to "To" -->
                    <div class="filter-item">
                        <button class="btn" id="filterBtn"><i class="fas fa-filter"></i> Filter</button>
                    </div>

                    <!-- Print button far right -->
                    <div class="print-button">
                        <button class="btn" id="printBtn"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>

                <!-- Complaints Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Student ID</th>
                                <th>College</th>
                                <th>Category</th>
                                <th>Complaint</th>
                                <th>Date Submitted</th>
                                <th>Status</th>
                                <th>Assigned To</th>
                                <th>Priority</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                       

                    </table>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Print button
        document.getElementById('printBtn').addEventListener('click', function() {
            window.print();
        });
    </script>
</body>
</html>
