<!-- sidebar.php -->
<aside class="sidebar">
    <h2 class="logo">VOICE Admin</h2>
    <nav class="nav-menu">
        <ul>
           <li><a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="complaints.php" class="<?= ($page == 'complaints') ? 'active' : '' ?>"><i class="fas fa-comment-dots"></i> Complaints</a></li>
            <li><a href="suggestions.php" class="<?= ($page == 'suggestions') ? 'active' : '' ?>"><i class="fas fa-lightbulb"></i> Suggestions</a></li>
            <li><a href="colleges.php" class="<?= ($page == 'colleges') ? 'active' : '' ?>"><i class="fas fa-university"></i> Colleges</a></li>
            <li><a href="dean.php" class="<?= ($page == 'dean') ? 'active' : '' ?>"><i class="fas fa-user-tie"></i> Deans</a></li>
            <li><a href="students.php" class="<?= ($page == 'students') ? 'active' : '' ?>"><i class="fas fa-user-graduate"></i> Students</a></li>
            <li><a href="reports.php" class="<?= ($page == 'reports') ? 'active' : '' ?>"><i class="fas fa-chart-line"></i> Reports</a></li>
            <li><a href="escalations.php" class="<?= ($page == 'escalations') ? 'active' : '' ?>"><i class="fas fa-exclamation-circle"></i> Escalations</a></li>
        </ul>
    </nav>
</aside>
