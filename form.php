<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

    <style>
        /* form styles */
        .container-form {
    max-width: 1600px;
    margin: auto;
    padding: 2rem;
    text-align: center;
    margin-top: 20px;
    background: var(--primary-bg);
    /* background-color: red;  */
}
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin: auto;
    max-width: 800px;
    margin-top: 30px;
    margin-bottom: 40px;
    border-radius: 20px;
    font-size: 30px;
    color: var(--text-color);
    padding: 15px;
}

form input, form textarea {
    padding: 15px;
    font-size: 1.1rem;
    justify-content: center;
    padding-top: 14px;
}
form input, form textarea:focus{
    border: none;
    outline: 1px solid var(--muted-text);
    border-radius: 5px;
}

form button {
    color: #fff;
    font-size: 1.2rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.message{
    background-color:  #fff;
    padding: 15px; 
    display: flex;
    margin: auto;
   color: var(--highlight-color);
}
.message:hover{
    color: #fff;
    background-color: var(--highlight-color);
}
    </style>

<body>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container-form">
        <form action="insert.php" method="POST">
            <h2>Contact Me</h2>
            <p style="font-size: 20px; color:var(--text-color);">
              If you'd like to discuss a project or just want to say hi, feel free to drop a message.</p>
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" class="message">Send Message</button>
        </form>
    </div>
</section>
    
</body>
</html>