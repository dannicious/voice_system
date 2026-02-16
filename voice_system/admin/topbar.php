<!-- topbar.php -->
<header class="topbar">
    <div class="topbar-right">
        <!-- Notification Bell -->
        <div class="notification" onclick="toggleNotifications()">
            <i class="fas fa-bell"></i>
            <span class="badge"></span>
        </div>

        <!-- Profile Dropdown -->
        <div class="profile-container">
            <div class="profile" onclick="toggleDropdown()">
                <img src="../assets/images/profile.jpg" alt="Profile Picture">
            </div>

            <div class="dropdown-menu" id="dropdownMenu">
                <a href="profile.php">Profile</a>
                <a href="settings.php">Settings</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</header>

<!-- Inline JS for this topbar -->
<script>
    // Toggle Profile Dropdown
    function toggleDropdown() {
        const dropdown = document.getElementById("dropdownMenu");
        dropdown.classList.toggle("show");
    }

    // Close dropdown when clicking outside
    window.addEventListener("click", function(event) {
        if (!event.target.closest(".profile-container")) {
            const dropdown = document.getElementById("dropdownMenu");
            if(dropdown) dropdown.classList.remove("show");
        }
    });

    // Optional: Notification bell click
    // function toggleNotifications() {
    //     alert("This will show notifications later!");
    // }
</script>

