<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mathematics Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 100%;
            max-width: 500px; /* wider box from first screenshot */
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            padding: 25px 20px;
            text-align: center;
        }

        .card-header {
            background-color: #2d0b5d;
            color: white;
            padding: 15px 20px;
            font-weight: bold;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            margin: -25px -20px 20px;
        }

        .circle {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background-color: #27ae60;
            color: white;
            font-size: 26px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
        }

        .congrats {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .wrong-section {
            text-align: left;
            margin-top: 20px;
        }

        .wrong-title {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .back-btn {
            display: inline-block;
            background-color: #ffc107;
            color: #000;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: bold;
            text-decoration: none;
            margin-top: 30px;
        }

    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <span>Mathematics</span>
            <span>🎉</span>
        </div>

        <div class="circle">3/3</div>
        <div class="congrats">Congratulations</div>

        <div class="wrong-section">
            <div class="wrong-title">Wrong Answers</div>
            <!-- No wrong answers to show -->
        </div>

        <a href="/" class="back-btn">Back to Home</a>
    </div>
</body>
</html>
