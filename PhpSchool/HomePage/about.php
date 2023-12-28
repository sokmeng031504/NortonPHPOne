<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        main {
            padding: 20px;
            text-align: center;
            width: 500px;
            margin: 0 auto;
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
        }

        .ceo-section {
            margin-top: 40px;
        }

        .ceo-image {
            max-width: 300px;
            border-radius: 50%;
            margin-top: 20px;
        }

        .history-section {
            margin-top: 40px;
        }
    </style>
    <title>About Us</title>
</head>

<body>
    <?php
        include('./header.php')
    ?>
    <header>
        <h1>About Our Company</h1>
    </header>

    <main>
        <section id="main-idea">
            <h2>Main Idea</h2>
            <p>
                Welcome to our company, where we strive to [insert main idea or mission statement]. We are dedicated to
                [describe the main purpose or goals of the company].
            </p>
        </section>

        <section class="ceo-section">
            <h2>CEO</h2>
            <img src="./images/ceo.jpg" alt="CEO Name" class="ceo-image">
            <p>
                Meet our CEO, [CEO Name]. [He/She] leads our team with [his/her] vision and expertise. With a
                background in [mention background], [CEO Name] has been instrumental in [mention CEO's contributions or
                achievements].
            </p>
        </section>

        <section class="history-section">
            <h2>Our History</h2>
            <p>
                Established in [year], our company has a rich history of [briefly describe the company's history,
                achievements, and milestones]. Over the years, we have [highlight key moments or achievements].
            </p>
        </section>
    </main>
</body>
<footer style=" padding:10px;margin:10px">
    <?php include('./footer/footer.php') ?>
</footer>
</html>
