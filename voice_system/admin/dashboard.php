<?php $page = 'dashboard'; // used for active link highlighting ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | VOICE System</title>
    <link rel="stylesheet" href="../assets/css/admin_css/dashboard.css">
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

            <!-- Dashboard content -->
            <section class="content">
                <h1>Welcome, Admin!</h1>
                <p>This is your dashboard. You can manage complaints, suggestions, students, and reports here.</p>
                <!-- Add cards, tables, charts, etc. later -->
            </section>
        </main>
    </div>
</body>
</html>
