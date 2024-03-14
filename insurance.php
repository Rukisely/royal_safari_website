<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance</title>
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header-image {
            max-width: 100%; /* Adjust the size as per your preference */
            height: auto;
            display: flex;
            margin: 0 auto;
        }

        .services {
            margin-top: 20px;
            text-align: center;
        }

        .services p {
            font-size: 18px;
            line-height: 1.6;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .image-container .image-item {
            flex: 0 0 calc(33.33% - 20px);
            margin: 10px;
            text-align: center;
        }

        .image-container .image-item img {
            max-width: 100%;
            height: auto;
        }

        .image-container .caption {
            margin-top: 10px;
        }

        .footer {
            background-color: #080808;
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
        <h1>Hotels</h1>
        <div class="breadcrumbs">
            <a href="services.html">Back to Our Service Page</a>
        </div>
    </header>

    <div class="container">
        <img class="header-image" src="images/h3.jpg" alt="Insurance Image">

        <div class="services">
            <p> Royal safari assures the customers by providing them with the best hotels in the country.</p>
        </div>

        <div class="image-container">
            <div class="image-item">
                <img src="images/h5.jpg" alt="Image 1">
                <p class="caption">Kilimanjaro Hotel-Tanzania</p>
            </div>
            <div class="image-item">
                <img src="images/h9.jpg" alt="Image 2">
                <p class="caption">Essque Zalu Zanzibar</p>
            </div>
            <div class="image-item">
                <img src="images/n1.jpg" alt="Image 3">
                <p class="caption">Obudu Mountains Resort-Nigeria</p>
            </div>
            <div class="image-item">
                <img src="images/h7.jpg" alt="Image 4">
                <p class="caption">Amber Resort-Tanzania</p>
            </div>
            <div class="image-item">
                <img src="images/r6.jpg" alt="Image 5">
                <p class="caption">Hotel in Zanzibar</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 @Royal Safari. All rights reserved.</p>
    </div>
</body>
</html>
