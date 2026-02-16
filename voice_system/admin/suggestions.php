<?php $page = 'suggestions'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Suggestions</title>
    <link rel="stylesheet" href="../assets/css/admin_css/dashboard.css"> <!-- shared layout -->
    <link rel="stylesheet" href="../assets/css/admin_css/suggestions.css"> <!-- page-specific -->
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

            <!-- Topbar -->
            <?php include 'topbar.php'; ?>

            <!-- Suggestions Content -->
            <section class="content">
                <h1>Suggestions</h1>

                <!-- Filters -->
<div class="filters">
    <!-- Left side: Inputs + Filter button -->
    <div class="filter-left">
        <div class="filter-item">
            <label for="college">College:</label>
            <select id="college" name="college">
                <option value="">All Colleges</option>
                <option value="Education">Education</option>
                <option value="Engineering">Engineering</option>
                <option value="Science">Science</option>
            </select>
        </div>

        <div class="filter-item">
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="">All Status</option>
                <option value="Pending">Pending</option>
                <option value="Reviewed">Reviewed</option>
                <option value="Implemented">Implemented</option>
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

        <!-- Filter button immediately after inputs -->
        <div class="filter-item">
            <button class="btn" id="filterBtn"><i class="fas fa-filter"></i> Filter</button>
        </div>
    </div>

    <!-- Right side: Print button -->
    <div class="print-button">
        <button class="btn" id="printBtn"><i class="fas fa-print"></i> Print</button>
    </div>
</div>


                <!-- Suggestions Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Student Name</th>
                                <th>Student ID</th>
                                <th>College</th>
                                <th>Category</th>
                                <th>Suggestion</th>
                                <th>Date Submitted</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Juan Dela Cruz</td>
                                <td>20260123</td>
                                <td>Education</td>
                                <td>Facilities</td>
                                <td>Install more chairs in classrooms</td>
                                <td>2026-02-14</td>
                                <td>Pending</td>
                                <td>
                                    <button class="btn small">View</button>
                                    <button class="btn small">Mark Reviewed</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <script>
        document.getElementById('printBtn').addEventListener('click', function() {
            window.print();
        });
    </script>
</body>
</html>
