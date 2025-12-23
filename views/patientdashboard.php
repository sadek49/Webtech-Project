<?php
include 'logout_auto.php';

session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit();
}

// Restore session from cookie if needed
if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="../assets/style_patientdashboard.css">
</head>
<body>

    <div class="top-bar">
        <form action="../controllers/logoutCheck.php" method="post" style="display:inline;">
            <input type="submit" class="logout-btn" value="Logout">
        </form>
    </div>

    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

    <!-- Appointments Section -->
    <h2>Upcoming Appointments</h2>
    <table>
        <thead>
            <tr>
                <th>Doctor Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dr. John Smith</td>
                <td>2025-12-25</td>
                <td>10:00 AM</td>
                <td>Confirmed</td>
                <td><a href="#">View Details</a></td>
            </tr>
            <tr>
                <td>Dr. Jane Doe</td>
                <td>2025-12-28</td>
                <td>2:00 PM</td>
                <td>Pending</td>
                <td><a href="#">View Details</a></td>
            </tr>
        </tbody>
    </table>
    <a href="#">View All Appointments</a>

    <!-- Doctors Section -->
    <h2>Doctors List</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Specialization</th>
                <th>Experience</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dr. John Smith</td>
                <td>Cardiology</td>
                <td>15 years</td>
                <td><a href="#">View Profile</a></td>
            </tr>
            <tr>
                <td>Dr. Jane Doe</td>
                <td>Neurology</td>
                <td>10 years</td>
                <td><a href="#">View Profile</a></td>
            </tr>
        </tbody>
    </table>

    <!-- Bed Availability -->
    <div class="bed-status">
        <span>ICU Beds Available: 5</span>
        <span>General Beds Available: 20</span>
    </div>

    <!-- Ambulance Request -->
    <div class="ambulance-request">
        <h2>Request Ambulance</h2>
        <input type="text" name="pickup_location" placeholder="Pickup Location">
        <input type="text" name="emergency_type" placeholder="Type of Emergency">
        <button type="button">Request Ambulance</button>
    </div>

    <!-- Medical History -->
    <h2>Medical History</h2>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Doctor</th>
                <th>Diagnosis</th>
                <th>Prescription</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2025-10-10</td>
                <td>Dr. John Smith</td>
                <td>Flu</td>
                <td>Medication A</td>
                <td><a href="#">View Details</a></td>
            </tr>
            <tr>
                <td>2025-11-15</td>
                <td>Dr. Jane Doe</td>
                <td>Back Pain</td>
                <td>Medication B</td>
                <td><a href="#">View Details</a></td>
            </tr>
        </tbody>
    </table>

    <!-- AI Chatbox -->
    <div class="ai-chatbox">
        <h2>AI Assistant</h2>
        <textarea placeholder="Type your message here..."></textarea>
        <button type="button">Send</button>
    </div>

</body>
</html>
