<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }
        .sidebar {
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar .nav-link {
            color: #fff;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar-brand {
            font-size: 1.5rem;
        }
        .card {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Hotel Booking Admin</a>
</nav>

<!-- Sidebar -->
<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#roomType">Room Types</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#room">Rooms</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#customers">Customers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#departments">Departments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#staff">Staff</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#bookings">Bookings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#customerFeedbacks">Customer Feedbacks</a>
        </li>
    </ul>
</div>

<!-- Content -->
<div class="content">
    <div id="roomType" class="card">
        <div class="card-header">
            <h2>Room Types</h2>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" onclick="createRoomType()">Add Room Type</button>
            <!-- Table for Room Types -->
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Type Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="roomTypeTable">
                <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="room" class="card">
        <div class="card-header">
            <h2>Rooms</h2>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" onclick="createRoom()">Add Room</button>
            <!-- Table for Rooms -->
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="roomTable">
                <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="customers" class="card">
        <div class="card-header">
            <h2>Customers</h2>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" onclick="createCustomer()">Add Customer</button>
            <!-- Table for Customers -->
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="customerTable">
                <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="departments" class="card">
        <div class="card-header">
            <h2>Departments</h2>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" onclick="createDepartment()">Add Department</button>
            <!-- Table for Departments -->
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="departmentTable">
                <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="staff" class="card">
        <div class="card-header">
            <h2>Staff</h2>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" onclick="createStaff()">Add Staff</button>
            <!-- Table for Staff -->
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="staffTable">
                <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="bookings" class="card">
        <div class="card-header">
            <h2>Bookings</h2>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" onclick="createBooking()">Add Booking</button>
            <!-- Table for Bookings -->
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Room</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="bookingTable">
                <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="services" class="card">
        <div class="card-header">
            <h2>Services</h2>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" onclick="createService()">Add Service</button>
            <!-- Table for Services -->
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="serviceTable">
                <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="customerFeedbacks" class="card">
        <div class="card-header">
            <h2>Customer Feedbacks</h2>
        </div>
        <div class="card-body">
            <!-- Table for Customer Feedbacks -->
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Feedback</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="feedbackTable">
                <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function createRoomType() {
        // Logic to create a new Room Type
    }

    function createRoom() {
        // Logic to create a new Room
    }

    function createCustomer() {
        // Logic to create a new Customer
    }

    function createDepartment() {
        // Logic to create a new Department
    }

    function createStaff() {
        // Logic to create a new Staff member
    }

    function createBooking() {
        // Logic to create a new Booking
    }

    function createService() {
        // Logic to create a new Service
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
