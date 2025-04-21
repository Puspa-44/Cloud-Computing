<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Puspa Raj Chaudhary | Portfolio</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0f2027;  /* fallback for old browsers */
            background: linear-gradient(to right, #2c5364, #203a43, #0f2027);
            color: #fff;
        }
        header {
            text-align: center;
            padding: 60px 20px 20px;
        }
        header h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }
        header p {
            font-size: 1.2em;
            color: #bbb;
        }
        section {
            max-width: 800px;
            margin: 40px auto;
            background-color: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 10px;
        }
        h2 {
            color: #00ffff;
            margin-bottom: 10px;
        }
        ul {
            padding-left: 20px;
        }
        footer {
            text-align: center;
            padding: 20px;
            color: #ccc;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1><?php echo "Puspa Raj Chaudhary"; ?></h1>
        <p>Web Developer | Tech Enthusiast | Lifelong Learner</p>
    </header>

    <section>
        <h2>About Me</h2>
        <p>Hello! I'm Puspa Raj Chaudhary, a passionate web developer who enjoys creating beautiful and functional websites. I specialize in front-end development, but I'm also skilled in backend technologies.</p>
    </section>

    <section>
        <h2>Skills</h2>
        <ul>
            <li>HTML, CSS, JavaScript</li>
            <li>PHP, MySQL</li>
            <li>React Native, Node.js</li>
            <li>Responsive Design</li>
            <li>Git & GitHub</li>
        </ul>
    </section>

    <section>
        <h2>Projects</h2>
        <ul>
            <li><strong>Fitness App</strong> - A personalized health and workout app (React Native + Express)</li>
            <li><strong>Football News Site</strong> - Real-time updates and scores from top football leagues</li>
            <li><strong>Portfolio Website</strong> - This portfolio you’re viewing now!</li>
        </ul>
    </section>

    <section>
        <h2>Contact</h2>
        <p>Email: pusparaj@example.com</p>
        <p>LinkedIn: linkedin.com/in/pusparaj</p>
        <p>GitHub: github.com/pusparaj</p>
    </section>

    <footer>
        &copy; <?php echo date("Y"); ?> Puspa Raj Chaudhary. All rights reserved.
    </footer>

</body>
</html>
