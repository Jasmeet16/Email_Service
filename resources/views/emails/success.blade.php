<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Success</title>
        <style>    
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
        * {
        box-sizing: border-box;
        }
        body {
        background-color: #222831;
        font-family: 'Open Sans', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 50vh;
        margin: 0;
        }
        .container {
        background-color: #eeeded;
        border-radius: 5px;
        box-shadow: 0 2px 10px #86aba1;
        width: 50%;
        }

        h2 {
        text-align: center;
        margin: 10px 20px;
        }

        form button {
        cursor: pointer;
        background-color: #2d3238;
        border: 2px solid #86aba1;
        border-radius: 4px;
        color: #fff;
        display: block;
        font-size: 25px;
        padding: 10px;
        margin-top: 20px;
        width: 100%;
        }
        form button:hover {
        cursor: pointer;
        border: 2px solid #2d3238;
        background-color: #86aba1;
        color:#222831;
    }
</style>
</head>
    <body>
        <div class="container">
            <h2> Message sent successfully to {{ $email }} </h2>
            <form action="/entercredentials" method="GET">
                <button type="submit" > Send a another email </button>
            </form>
        </div>       
    </body>
</html>