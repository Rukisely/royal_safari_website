<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities and Sightseeing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #008080;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .gallery-item {
            flex: 0 0 calc(33.33% - 20px);
            margin: 10px;
        }

        .gallery-item img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .footer {
            background-color: #008080;
            color: white;
            text-align: center;
            padding: 10px;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Activities and Sightseeing</h1>
        <div class="breadcrumbs">
            <a href="services.html">Back to Our Service Page</a>
        </div>
    </header>

    <div class="gallery-container">
        <div class="gallery-item">
            <img src="images/10.jpg" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="images/11.webp" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/12.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="images/13.jpg" alt="Image 4">
        </div>
        <div class="gallery-item">
            <img src="images/14.jpg" alt="Image 5">
        </div>
        <div class="gallery-item">
            <img src="images/15.webp" alt="Image 6">
        </div>
        <div class="gallery-item">
            <img src="images/16.jpg" alt="Image 7">
        </div>
        <div class="gallery-item">
            <img src="images/18.jpg" alt="Image 8">
        </div>
        <div class="gallery-item">
            <img src="images/20.jpg" alt="Image 9">
        </div>
        <div class="gallery-item">
            <img src="images/21.jpg" alt="Image 10">
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 @Activities and Sightseeing. All rights reserved.</p>
    </div>
</body>
</html>
