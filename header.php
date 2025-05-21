<?php
   // Start session if not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">


    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo a {
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        /* .menu {
            display: flex;
            gap: 1.5rem;
        }

        .menu a {
            text-decoration: none;
            color: #333;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .menu a:hover {
            color: #0057b8;
        }
            */

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Responsive menu for smaller screens */
        @media (max-width: 768px) {
            .menu {
                position: absolute;
                top: 70px;
                right: 0;
                background-color: #fff;
                flex-direction: column;
                width: 200px;
                padding: 1rem;
                gap: 1rem;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                transform: translateX(100%);
                transition: transform 0.3s ease-in-out;
                z-index: 999;
            }

            .menu.active {
                transform: translateX(0);
            }

            .menu-toggle {
                display: block;
            }
        }

    </style>


    <header>
        <nav class="navbar">
        <div class="logo"><a href="login.php"><span style="color:rgb(184, 0, 0);">Record Keeping</span><span style="color:#0057b8;">System</span></a></div>

            <button class="menu-toggle" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></button>

            <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <!-- Check if we're on the forgot password page -->
            <?php if(basename($_SERVER['PHP_SELF']) !== 'forgot_password.php'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="forgot_password.php">Forgot Password</a>
                </li>
            <?php endif; ?>

        </ul>
    </div>
    </nav>
    </header>

    <script>

        function toggleMenu() {
            document.querySelector('.menu').classList.toggle('active');
        }
    </script>
