<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script defer src="js/bootstrap.bundle.min.js"></script>
    <style>
        body { 
            font-family: 'Arial', sans-serif; 
            background-color: #eef2f7; 
            margin: 0;
            padding: 0;
        }

        .dashboard-container { 
            display: flex;
            flex-wrap: wrap;
        }

        .content { 
            margin-top: 100px;
            margin-left: 260px;
            padding: 30px;
            width: calc(100% - 260px); 
            transition: margin-left 0.3s ease, width 0.3s ease;
        }

        h3 {
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: 600;
            color: #343a40;
        }

        .add-user-btn {
            display: inline-block;
            margin-bottom: 30px;
            font-size: 1rem;
            padding: 12px 25px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2);
        }

        .add-user-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 123, 255, 0.3);
        }

        .table-container {
            margin-top: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 25px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            font-size: 1rem;
            color: #333;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e2e6ea;
            transition: background 0.3s ease;
        }

        .btn-warning, .btn-danger {
            font-size: 0.9rem;
            font-weight: 600;
            padding: 10px 18px;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .content {
                margin-left: 0;
                width: 100%;
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .table-container {
                padding: 15px;
            }

            .add-user-btn {
                width: 100%; /* Full-width button on mobile */
                text-align: center;
            }

            th, td {
                font-size: 0.9rem;
                padding: 12px;
            }

            .btn-warning, .btn-danger {
                padding: 8px 12px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
<div class="dashboard-container">
    <div class="content">
        <?php include 'admin_nav.php'; ?>

        <h3>Manage Users</h3>
        <a href="admin_add_new_user.php" class="add-user-btn">+ Add New User</a>
        
        <div class="table-container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Sample user data (Replace with actual database query)
                    $users = [
                        ['id' => 1, 'username' => 'JohnDoe', 'email' => 'john@example.com', 'role' => 'Admin'],
                        ['id' => 2, 'username' => 'JaneSmith', 'email' => 'jane@example.com', 'role' => 'User'],
                        ['id' => 3, 'username' => 'MikeRoss', 'email' => 'mike@example.com', 'role' => 'Admin'],
                    ];

                    // Counter for Serial Number
                    $sn = 1;

                    // Loop through users and display them in table rows
                    foreach ($users as $user) {
                        echo "<tr>
                                <td>{$sn}</td>
                                <td>{$user['username']}</td>
                                <td>{$user['email']}</td>
                                <td>{$user['role']}</td>
                                <td>
                                    <a href='edit_users.php?id={$user['id']}' class='btn btn-warning'>Edit</a>
                                    <a href='delete_users.php?id={$user['id']}' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>
                                </td>
                              </tr>";
                        $sn++; // Increment Serial Number
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
