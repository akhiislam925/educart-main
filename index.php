<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>EduCraft - A question paper generating platform</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navbar Section -->
    <header class="navbar" id="my-nav">
        <div class="navbar-logo">
            <h1 id="nav-name">EduCraft</h1>
        </div>
        <div class="navbar-select">
            <select name="profile_type" onchange="redirectToProgramPage(this.value)">
                <option value="">Select Program</option>
                <option value="BCA" <?php echo (isset($_GET['program']) && $_GET['program'] == 'BCA') ? 'selected' : ''; ?>>BCA</option>
                <option value="MCA" <?php echo (isset($_GET['program']) && $_GET['program'] == 'MCA') ? 'selected' : ''; ?>>MCA</option>
                <option value="M.Tech" <?php echo (isset($_GET['program']) && $_GET['program'] == 'M.Tech') ? 'selected' : ''; ?>>M.Tech</option>
                <option value="B.Tech" <?php echo (isset($_GET['program']) && $_GET['program'] == 'B.Tech') ? 'selected' : ''; ?>>B.Tech</option>
            </select>
        </div>
    </header>

    <!-- Main Layout (Sidebar + Content Area) -->
    <div class="main-layout">
        <!-- Sidebar Section -->
        <aside class="sidebar">
            <nav class="sidebar-nav">
<!-- -->
             <!-- Navigation Button and Menu -->
 <div class="navigation-container">
        <button class="navigation-btn" onclick="toggleNavigation()">☰ Menu</button>
        <div id="navigation" class="navigation">
            <ul>
                <li><a href="index.php?/?page=home">Home</a></li>
                <li><a href="index.php?page=add-courses">Course Management</a></li>
                <li><a href="index.php?page=add-outcomes">Outcome Management</a></li>
                <li><a href="index.php?page=add-questions">Question Management</a></li>
                <li><a href="index.php?page=dashboard">Generate Report</a></li>
                
            </ul>
        </div>
    </div>
            </nav>
        </aside>
        <script>function toggleNavigation() {
    var navigation = document.getElementById('navigation');
    navigation.style.display = (navigation.style.display === 'block') ? 'none' : 'block';
}
</script>

        <!-- Main Content Area -->
        <main class="content">
            <div class="content-area">
                <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                $allowed_pages = ['dashboard', 'add-courses', 'add-outcomes', 'add-questions','home'];
                if (in_array($page, $allowed_pages)) {
                    include("pages/$page.php");
                } else {
                    echo "<h2>Page not found</h2>";
                }
                ?>
            </div>
        </main>
    </div>

    <!-- Footer Section -->
    <footer>
    <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">

<!-- Logo and About Section -->
<div style="flex: 1; min-width: 250px; padding: 10px;">
  <h3 style="margin-bottom: 10px;">EduCraft</h3>
  <p style="font-size: 14px; line-height: 1.6;">Empowering students with an intuitive question paper generation platform. Simplify, learn, and excel!</p>
</div>

<!-- Quick Links Section -->
<div style="flex: 1; min-width: 200px; padding: 10px;">
  <h4 style="margin-bottom: 10px;">Quick Links</h4>
  <ul style="list-style: none; padding: 0; font-size: 14px;">
    <li><a href="index.php" class="footer-link">Home</a></li>
    <li><a href="#" class="footer-link">About Us</a></li>
    <li><a href="#" class="footer-link">Features</a></li>
    <li><a href="#" class="footer-link">Contact</a></li>
  </ul>
</div>

<!-- Contact Section  -->
   <div style="flex: 1; min-width: 250px; padding: 10px;">
  <h4 style="margin-bottom: 10px;">Contact Us</h4>
  <p style="font-size: 14px; line-height: 1.6;">
    Email: <a href="mailto:support@EduCraft.com" class="footer-link">support@EduCraft.com</a><br>
    Phone: +1 234 567 890<br>
    Address: Aliah University, Kolkata
  </p>
    </footer>

    <script>
        // Function to redirect to a page with selected program
        // function redirectToProgramPage(selectedProgram) {
        //     if (!selectedProgram) return;
            
        //     const urlParams = new URLSearchParams(window.location.search);
        //     const currentPage = urlParams.get('page') || 'home';
        //     const allowedPages = ['dashboard', 'add-courses', 'add-outcomes', 'add-questions', 'home'];

        //     if (allowedPages.includes(currentPage)) {
        //         window.location.href = ?page=${currentPage}&program=${selectedProgram};
        //     } else {
        //         console.log("Invalid page");
        //     }
        // }
    </script>
    
</body>
</html>