<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Front Office</title>
    <style>
        /* General Reset */
        body, h1, h2, h3, ul, li, a, p {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333333;
        }

        header {
            background-color: #ffffff;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #dddddd;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            font-size: 1rem;
            color: #333333;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #007bff;
            color: #ffffff;
        }

        /* Dropdown Styles */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            min-width: 150px;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 15px;
            color: #333333;
            border-bottom: 1px solid #dddddd;
        }

        .dropdown-menu a:last-child {
            border-bottom: none;
        }

        .dropdown-menu a:hover {
            background-color: #007bff;
            color: #ffffff;
        }

        .hero {
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
            padding: 50px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.25rem;
            color: #666666;
        }

        main {
            padding: 50px;
        }

        footer {
            background-color: #ffffff;
            padding: 20px 50px;
            text-align: center;
            color: #666666;
            font-size: 0.875rem;
            border-top: 1px solid #dddddd;
        }

        footer a {
            color: #007bff;
            font-weight: bold;
        }

        .menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .menu button {
            background-color: #ffffff;
            color: #333333;
            font-size: 1rem;
            padding: 10px 20px;
            border: 2px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .menu button:hover {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">CryptoHub</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Market</a>

            <!-- Dropdown Menu for Portefeuille -->
            <div class="dropdown">
                <a href="#">Portefeuille</a>
                <div class="dropdown-menu">
                    <a href="portefeuille/form">Créer</a> <!-- Option pour créer un portefeuille -->
                    <a href="portefeuille/list">Mes Portefeuilles</a>
                    <a href="#">Historique</a>
                </div>
            </div>

            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2025 CryptoHub. Made with 💚 by <a href="#">Your Team</a>.
    </footer>
</body>
</html>
