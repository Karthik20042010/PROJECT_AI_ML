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
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color: #1E90FF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            margin: 20px;
        }

        h2 {
            color: #1E90FF;
        }

        .vitamin-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .vitamin {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .vitamin img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .deficiency-problems,
        .precautions {
            margin-top: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #1E90FF;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title>Vitamin Information</title>
</head>
<body>
    <header>
        <h1>Vitamin Information</h1>
    </header>

    <section class="vitamin-container">
        <div class="vitamin">
            <h2>Vitamin A</h2>
            <img src="path/to/vitamin_a.jpg" alt="Vitamin A Foods">
            <p>Important for vision, immune system, and skin health. Sources include carrots, sweet potatoes, and spinach.</p>
        </div>

        <div class="vitamin">
            <h2>Vitamin B</h2>
            <img src="path/to/vitamin_b.jpg" alt="Vitamin B Foods">
            <p>Includes various B-vitamins essential for energy production. Sources include whole grains, meat, and dairy.</p>
        </div>

        <div class="vitamin">
            <h2>Vitamin C</h2>
            <img src="path/to/vitamin_c.jpg" alt="Vitamin C Foods">
            <p>Crucial for collagen production, immune function, and antioxidant. Sources include citrus fruits, strawberries, and bell peppers.</p>
        </div>

        <div class="vitamin">
            <h2>Vitamin D</h2>
            <img src="path/to/vitamin_d.jpg" alt="Vitamin D Foods">
            <p>Supports bone health, immune system, and regulates calcium absorption. Sources include sunlight, fatty fish, and fortified foods.</p>
        </div>

        <!-- Add more vitamins with relevant images and details -->

    </section>

    <section class="deficiency-problems">
        <h2>Common Deficiency Problems</h2>
        <ul>
            <li>Vitamin A Deficiency: Night blindness, dry skin.</li>
            <li>Vitamin B Deficiency: Fatigue, anemia.</li>
            <li>Vitamin C Deficiency: Scurvy, weakened immune system.</li>
            <li>Vitamin D Deficiency: Bone pain, muscle weakness.</li>
            <!-- Add more deficiency problems as needed -->
        </ul>
    </section>

    <section class="precautions">
        <h2>Precautionary Measures</h2>
        <ul>
            <li>Eat a well-balanced diet with a variety of foods.</li>
            <li>Consider supplements if needed, under medical supervision.</li>
            <li>Get regular sunlight exposure for Vitamin D.</li>
            <li>Consult a healthcare professional for personalized advice.</li>
            <!-- Add more precautions as needed -->
        </ul>
    </section>

    <footer>
        <p>&copy; 2023 Vitamin Information</p>
    </footer>
</body>
</html>
