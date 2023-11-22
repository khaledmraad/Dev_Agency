<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Image Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://i0.wp.com/trufflereads.com/wp-content/uploads/2018/10/Nick-Young.jpg?w=575&ssl=1');
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -1;
        }

        .content {
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add shadow effect for better visibility */
        }

        h1 {
            font-size: 3rem;
        }

        p {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="background-image"></div>
   
</body>
</html>
