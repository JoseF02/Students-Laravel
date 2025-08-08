<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre Nosotros</title>
        <style>
            body {
                margin: 0;
                font-family: 'Segoe UI', sans-serif;
                background-color: #f4f4f4;
            }

            header {
                background-color: #0056a3;
                color: white;
                padding: 15px 0;
                text-align: center;
            }

            nav {
                display: flex;
                justify-content: center;
                gap: 30px;
                background-color: #0056a3;
            }

            nav a {
                color: white;
                text-decoration: none;
                font-weight: bold;
            }

            nav a:hover {
                text-decoration: underline;
            }

            .container {
                display: flex;
                margin: 20px;
            }

            aside {
                width: 20%;
                background-color: #f0f0f0;
                padding: 20px;
                border-radius: 5px;
            }

            aside h2 {
                margin-top: 0;
            }

            main {
                width: 80%;
                padding: 20px;
                background-color: white;
                border-radius: 5px;
                margin-left: 20px;
                box-shadow: 0 0 5px rgba(0,0,0,0.1);
            }

            footer {
                background-color: #003d73;
                color: white;
                text-align: center;
                padding: 10px;
                margin-top: 40px;
            }

            ul {
                padding-left: 20px;
            }

            ul li a {
                color: #0033cc;
            }
        </style>
        <?php echo $__env->yieldContent('styles'); ?>
    </head>
<body>

<header>
    <h1>My Website</h1>
</header>

<nav>
    <a href="/">Home</a>
    <a href="/about-us">About</a>
    <a href="/services">Services</a>
    <a href="/contact">Contact</a>
</nav>

<div class="container">
    <aside>
        <h2>Sidebar</h2>
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
        </ul>
    </aside>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>

    <footer>
        © 2025 My Website. All rights reserved.
    </footer>

</body>
    <?php echo $__env->yieldContent('scripts'); ?>
</html>
<?php /**PATH C:\xampp\htdocs\studentManagement\resources\views/Layouts/app.blade.php ENDPATH**/ ?>