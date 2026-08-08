<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 50px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .info {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .info:last-child {
            border-bottom: none;
        }

        strong {
            color: #555;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Student Information</h1>

        <div class="info">
            <strong>Student Name:</strong> Carl John M. Rubiales
        </div>

        <div class="info">
            <strong>Student Number:</strong> 0124-0636
        </div>

        <div class="info">
            <strong>Course:</strong> BSIT
        </div>

        <div class="info">
            <strong>Section:</strong> BSIT 3C
        </div>

        <div class="info">
            <strong>Subject:</strong> Integrative Programming
        </div>

        <div class="info">
            <strong>Current Date:</strong> {{ date('F d, Y') }}
        </div>

        <div class="footer">
            Laravel Student Information Page
        </div>

    </div>

</body>
</html>