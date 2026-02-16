<?php $page = 'students'; // for active sidebar highlighting ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Students</title>
    <link rel="stylesheet" href="../assets/css/admin_css/dashboard.css"> <!-- shared layout -->
    <link rel="stylesheet" href="../assets/css/admin_css/students.css"> <!-- page-specific -->
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

            <!-- Students Content -->
            <section class="content">
                <h1>Students Management</h1>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn"><i class="fas fa-eye"></i> View Students</button>
                    <button class="btn"><i class="fas fa-search"></i> Search Student</button>
                    <button class="btn"><i class="fas fa-plus"></i> Add Student</button>
                    <button class="btn"><i class="fas fa-file-upload"></i> Batch Upload</button>
                    <button class="btn"><i class="fas fa-user-slash"></i> Deactivate</button>
                    <button class="btn"><i class="fas fa-user-check"></i> Reactivate</button>
                </div>

                <!-- Filters -->
                <div class="filters">
                    <div class="filter-item">
                        <label for="student_name">Student Name:</label>
                        <input type="text" id="student_name" name="student_name" placeholder="Search by name">
                    </div>
                    <div class="filter-item">
                        <label for="college">College:</label>
                        <select id="college" name="college">
                            <option value="">All Colleges</option>
                            <option value="Education">Education</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Science">Science</option>
                        </select>
                    </div>
                    <div class="print-button">
                        <button class="btn" id="printBtn"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>

                <!-- Students Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Student Name</th>
                                <th>Student ID</th>
                                <th>College</th>
                                <th>Email</th>
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
                                <td>jdelacruz@bisu.edu.ph</td>
                                <td>Active</td>
                                <td>
                                    <button class="btn small">Edit</button>
                                    <button class="btn small">Deactivate</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Maria Santos</td>
                                <td>20260145</td>
                                <td>Engineering</td>
                                <td>msantos@bisu.edu.ph</td>
                                <td>Inactive</td>
                                <td>
                                    <button class="btn small">Edit</button>
                                    <button class="btn small">Reactivate</button>
                                </td>
                            </tr>
                            <!-- More rows dynamically -->
                        </tbody>
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
