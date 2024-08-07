<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        nav {
            margin: 0;
            padding: 0;
            background: #444;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            display: block;
        }
        nav ul li a:hover {
            background: #555;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 2em 0;
        }
        .post {
            background: #fff;
            padding: 2em;
            margin-bottom: 1em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .post h2 {
            margin-top: 0;
        }
        .post p {
            line-height: 1.6;
        }
        .post a {
            color: #007bff;
            text-decoration: none;
        }
        .post a:hover {
            text-decoration: underline;
        }
        footer {
            background: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Blog</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <article class="post">
            <h2>Blog Post Title 1</h2>
            <p><strong>Author:</strong> John Doe | <strong>Date:</strong> August 6, 2024</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat, lorem at fringilla volutpat, arcu mi tincidunt eros, at varius orci nisl non nisi. <a href="#">Read more...</a></p>
        </article>
	<h3>File access</h3>
	<a href="lister.php">File List</a>
        <article class="post">
            <h2>Blog Post Title 2</h2>
            <p><strong>Author:</strong> Jane Smith | <strong>Date:</strong> August 5, 2024</p>
            <p>Phasellus euismod magna sed libero consequat, ac tristique sapien aliquet. Duis vestibulum, nulla vel laoreet fermentum, justo dui elementum lectus, et laoreet odio ex a mauris. <a href="#">Read more...</a></p>
        </article>
        <!-- Add more posts here -->
    </div>
    <footer>
        <p>&copy; 2024 My Blog. All rights reserved.</p>
    </footer>
</body>
</html>
