<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Korean Dramas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #111;
        }

        main {
            background: #222;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #fff;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
            color: #6785ff;
        }

        form {
            margin-top: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #fff;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background: #6785ff;;
            color: #fff;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
        <h1>Favorite Korean Dramas</h1>
        <a href="<?= base_url('kdrama') ?>"><button>Index</button></a>

        <form method="post" action="<?= base_url('kdrama/store') ?>">
            <label for="drama-title">Title:</label>
            <input type="text" id="drama-title" name="drama-title" required>

            <label for="drama-genre">Genre/s:</label>
            <input type="text" id="drama-genre" name="drama-genre" required>

            <label for="drama-description">Description:</label>
            <textarea name="drama-description" id="drama-description" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>
