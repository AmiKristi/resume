<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #111;
        }

        main {
            background: #222;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            color: #fff;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #6785ff;
            display: inline-block;
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        label {
            font-size: 14px;
            color: #fff;
            text-align: left;
            width: 100%;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background: #6785ff;;
            color: #fff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <main>
        <h1>Favorite Korean Dramas</h1>
        <a href="<?= base_url('kdrama') ?>"><button>Index</button></a>
        <a href="<?= base_url('kdrama/create') ?>"><button>Create</button></a>

        <form method="post" action="<?= base_url('kdrama/update/') . $qwerty["id"]?>">
            <label for="drama-title">Title:</label>
            <input type="text" id="drama-title" name="drama-title" value="<?= $qwerty["drama_title"] ?>">

            <label for="drama_genre">Genre/s:</label>
            <input type="text" id="drama-genre" name="drama-genre" value="<?= $qwerty["drama_genre"] ?>">

            <label for="drama-description">Description:</label>
            <textarea name="drama-description" id="drama-description"><?= $qwerty["drama_description"] ?></textarea>

            <button type="submit">Update</button>
        </form>
    </main>
</body>
</html>
