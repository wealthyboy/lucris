<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lucrisdofoundation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Full-page background */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: url('annie-spratt-cVEOh_JJmEE-unsplash.jpg') no-repeat center center;
            background-size: cover;
        }

        /* Dark gradient overlay */
        .background::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) );
        }

        /* Centered text */
        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            font-weight: bold;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="d-flex vh-100 align-items-center justify-content-center">
        <div class="content">
            <h1 class="display-4">We 'll Be Right Back</h1>
        </div>
    </div>
</body>
</html>


