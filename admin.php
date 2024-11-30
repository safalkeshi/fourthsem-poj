<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#users">Users</a></li>
            <li><a href="#costs">Costs</a></li>
            <li><a href="#statistics">Statistics</a></li>
            <li><a href="adminlogout.html">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome to the Admin Page</h1>

        <!-- Dashboard Section -->
        <section id="dashboard">
            <h2>Dashboard</h2>
            <div class="dashboard">
                <div class="card">
                    <h3>Total Users</h3>
                    <p>1,245</p>
                </div>
                <div class="card">
                    <h3>Monthly Revenue</h3>
                    <p>$12,345</p>
                </div>
                <div class="card">
                    <h3>New Signups</h3>
                    <p>345</p>
                </div>
                <div class="card">
                    <h3>Pending Orders</h3>
                    <p>27</p>
                </div>
            </div>
        </section>

        <!-- Users Section -->
        <section id="users">
            <h2>Users</h2>
            <p>Manage users, add new users, and view user details here.</p>
        </section>

        <!-- Costs Section -->
        <section id="costs">
            <h2>Costs</h2>
            <p>Track and manage operational costs and expenses here.</p>
        </section>

        <!-- Statistics Section -->
        <section id="statistics">
            <h2>Statistics</h2>
            <p>View key statistics and metrics related to the system here.</p>
        </section>
    </div>

</body>

</html>