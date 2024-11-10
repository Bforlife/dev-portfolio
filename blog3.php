
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<title>How to Write Clean and Maintainable Code</title>
<link rel="stylesheet" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
:root{
--primary-bg: #fef3e9;
--highlight-color: #ff6600;
--text-color: #252525;
--muted-text: #6c757d;
}

body {
font-family: Arial, sans-serif;
color: #333;
}

.container {
max-width: 1000px;
margin: auto;
background-color: #fff;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.post-image img {
width: 100%;
border-radius: 8px;
}

.post-meta {
font-size: 0.9rem;
color: #888;
}

.post-meta .author,
.post-meta .date {
display: inline-flex;
align-items: center;
gap: 5px;
}

.post-title {
font-size: 2rem;
font-weight: bold;
margin-top: 1rem;
}

.post-subtitle {
font-size: 1.2rem;
color: #555;
margin-bottom: 1.5rem;
}

.conclusion {
display: block;
font-style: italic;
color: #555;
margin-top: 1.5rem;
}

.btn-back {
color: #fff;
background-color: var(--highlight-color); 
padding: 0.5rem 1.5rem;
border-radius: 4px;
text-decoration: none;
display: inline-block;

}

.btn-back:hover {
background-color: var(--primary-bg); 
}

/* Responsive Styling */
@media (max-width: 768px) {
.post-title {
font-size: 1.5rem;
}

.post-subtitle {
font-size: 1rem;
}

.post-meta {
font-size: 0.8rem;
}
}
</style>
</head>
<body>

<body style="background-color: var(--primary-bg);">
<h1 class="post-title text-center"  style="color:var(--highlight-color)">How to Write Clean and Maintainable Code</h1>
<div class="container blog-post my-5 pt-2">
<div class="post-image">
<img src="Pics/P31.jpg" alt="Blog Post Image" class="img-fluid">
</div>


<div class="post-content p-4">
<div class="post-meta text-muted d-flex justify-content-start align-items-center mb-3">
<span class="author me-3"><i class="bi bi-person" style="color:var(--highlight-color)"></i> Mma's Code</span>
<span class="date"><i class="bi bi-calendar" style="color:var(--highlight-color)"></i> 
<?php echo date("d.m.Y"); ?>
</span>
</div>
</div>


 <div class="container-fluid">
    <h3 class="text-center pt-2"> 
    Writing clean and maintainable code is essential for ensuring that your projects are easy to understand, debug, and enhance over time. Here are key practices to follow:</h3>
    <p class="fs-4">1. <strong>Follow Coding Standards</strong><br>
    Description: Adhere to industry coding standards or your team's coding conventions. Consistent naming conventions, indentation, and formatting make your code more readable.</p>
    <p class="fs-4">2. <strong> Avoid Code Duplication</strong>
    Description: Reuse code by creating functions or classes instead of duplicating code. This reduces the chances of bugs and simplifies maintenance.</p>
    <p class="fs-4">3. <strong>Write Comments Wisely</strong><br>
    Description: Use comments to explain why something is done, not how. Focus on the rationale behind complex logic instead of stating the obvious.</p>
    <p class="fs-4">4. <strong>Keep Functions Small</strong> <br>
    Description: Break down complex functions into smaller, single-purpose functions. This makes your code easier to test, debug, and maintain.</p>
    <p class="fs-4">5. <strong>Document Your Code</strong><br>
    Description: Maintain clear documentation for your codebase, including setup instructions, API documentation, and usage examples. Good documentation helps others understand and use your code effectively.</p>
    <p class="fs-4">6. <strong> Implement Error Handling</strong><br>

    Description: Gracefully handle errors and exceptions. Proper error handling prevents crashes and provides useful feedback to users and developers.</p>
    <p class="fs-4">7. <strong> Use Meaningful Names</strong><br>

    Description: Choose descriptive and meaningful names for variables, functions, and classes. Clear names help others (and your future self) understand the purpose of your code at a glance.</p>

    <br>
<i class="conclusion"><strong>Conclusion</strong><br>
    By incorporating these keyboard shortcuts into your daily coding routine, you can enhance your productivity, streamline your workflow, and focus more on solving problems</i>


    <?php
require("form.php");

?>
    <div class="back-to-blog mt-5 text-center mb-4 ">
<a href="index.php" class="btn btn-back mb-4">Back to Blog</a>
</div>
</div>


</div>

</body>
</html>