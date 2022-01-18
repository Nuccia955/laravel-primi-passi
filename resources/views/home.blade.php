<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                width: 100vw;
                height: 100vh;
        }

        header {
            padding: 30px 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        ul {
            list-style: none;
            display: flex;
            justify-content: end;
            width: 100%;
        }
        .links a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
        }

        main {
            padding: 50px 0;
        }

        .title {
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <header>
        <nav class="container links">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/">About Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <h1 class="title">{{ $title }}</h1>
    </main>
</body>
</html>