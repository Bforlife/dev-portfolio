<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        :root {
            --primary-bg: #fef3e9;
            --highlight-color: #ff6600;
            --text-color: #252525;
            --muted-text: #6c757d;
        }
        body {
            background-color: var(--primary-bg);
            font-family: 'Poppins', sans-serif;
        }
        h2 {
            color: var(--highlight-color);
            text-align: center;
            padding: 13px 0;
        }
        .container-fluid {
            margin-bottom: 20px;
        }
        .img-wrapper img {
            width: 100%;
            max-width: 600px;
            height: auto;
            margin: 0 auto;
        }
        .button-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        button {
            border: none;
            width: 100%;
            max-width: 200px;
            height: 50px;
            font-size: 18px;
            border-radius: 10px;
            background-color: var(--highlight-color);
            color: var(--primary-bg);
        }
    </style>
</head>
<body>
    <h2>My Curriculum Vitae</h2>

    <div class="container-fluid d-flex flex-wrap justify-content-center gap-4">
        <div class="img-wrapper">
            <img src="Pics/girl30.jpg" alt="Personal Image">
        </div>
        <div class="img-wrapper">
            <img src="Pics/cv.png" alt="Curriculum Vitae">
        </div>
    </div>

    <div class="button-container">
        <button onclick="window.print()">Print CV</button>
    </div>

    <?php require("footer.php"); ?>
</body>
</html>
