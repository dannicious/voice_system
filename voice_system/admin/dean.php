<?php $page = 'deans'; // for active sidebar highlighting ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Deans</title>
    <link rel="stylesheet" href="../assets/css/admin_css/dashboard.css"> <!-- shared layout -->
    <link rel="stylesheet" href="../assets/css/admin_css/dean.css"> <!-- page-specific -->
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

            <!-- Deans Page Content -->
            <section class="content">
                <h1>Deans Management</h1>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn"><i class="fas fa-eye"></i> View Deans</button>
                    <button class="btn"><i class="fas fa-plus"></i> Add Dean</button>
                    <button class="btn"><i class="fas fa-edit"></i> Edit Dean</button>
                    <button class="btn"><i class="fas fa-user-slash"></i> Deactivate Dean</button>
                </div>

                <!-- Filters -->
                <div class="filters">
                    <div class="filter-item">
                        <label for="dean_name">Dean Name:</label>
                        <input type="text" id="dean_name" name="dean_name" placeholder="Search by name">
                    </div>
                    <div class="filter-item">
                        <label for="college">College:</label>
                        <select id="college" name="college">
                            <option value="">All Colleges</option>
                            <option value="Education">Education</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Science">Science</option>
                            <!-- More colleges dynamically -->
                        </select>
                    </div>
                    <div class="print-button">
                        <button class="btn" id="printBtn"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>

                <!-- Deans Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Dean Name</th>
                                <th>Email</th>
                                <th>College</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. Maria Santos</td>
                                <td>msantos@bisu.edu.ph</td>
                                <td>Education</td>
                                <td>Active</td>
                                <td>
                                    <button class="btn small">Edit</button>
                                    <button class="btn small">Deactivate</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. Juan Dela Cruz</td>
                                <td>jdelacruz@bisu.edu.ph</td>
                                <td>Engineering</td>
                                <td>Active</td>
                                <td>
                                    <button class="btn small">Edit</button>
                                    <button class="btn small">Deactivate</button>
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
