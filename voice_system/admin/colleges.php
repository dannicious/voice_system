<?php $page = 'colleges'; // for active sidebar highlighting ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Colleges</title>
    <link rel="stylesheet" href="../assets/css/admin_css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/admin_css/colleges.css">
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

            <!-- Colleges Page Content -->
            <section class="content">
                <h1>Colleges Management</h1>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn"><i class="fas fa-eye"></i> View Colleges</button>
                    <button class="btn"><i class="fas fa-plus"></i> Add College</button>
                    <button class="btn"><i class="fas fa-edit"></i> Edit College</button>
                    <button class="btn"><i class="fas fa-user-tie"></i> Assign Dean</button>
                </div>

                <!-- Filters -->
                <div class="filters">
                    <div class="filter-item">
                        <label for="college_name">College Name:</label>
                        <input type="text" id="college_name" name="college_name" placeholder="Search by name">
                    </div>
                    <div class="filter-item">
                        <label for="dean">Dean:</label>
                        <select id="dean" name="dean">
                            <!-- <option value="">All Deans</option>
                            <option value="Dr. Santos">Dr. Santos</option>
                            <option value="Dr. Reyes">Dr. Reyes</option> -->
                            <!-- More deans dynamically -->
                        </select>
                    </div>
                    <div class="print-button">
                        <button class="btn" id="printBtn"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>

                <!-- Colleges Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>College Name</th>
                                <th>Dean</th>
                                <th>Number of Students</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- <td>1</td>
                                <td>College of Education</td>
                                <td>Dr. Santos</td>
                                <td>350</td>
                                <td>Active</td>
                                <td> -->
                                    <button class="btn small">Edit</button>
                                    <button class="btn small">Assign Dean</button>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td>2</td>
                                <td>College of Engineering</td>
                                <td>Dr. Reyes</td>
                                <td>420</td>
                                <td>Active</td>
                                <td> -->
                                    <button class="btn small">Edit</button>
                                    <button class="btn small">Assign Dean</button>
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

