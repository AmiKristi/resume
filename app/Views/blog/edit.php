<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Edit</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(to right, #3498db, #1abc9c);
        }

        main {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #3498db;
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
            color: #555;
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
            background-color: #27ae60;
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
        <h1>Blog Edit</h1>
        <a href="<?= base_url('blog') ?>">Index</a>
        <a href="<?= base_url('blog/create') ?>">Create</a>

        <form method="post" action="<?= base_url('blog/update/') . $qwerty["blog_id"]?>">
            <label for="blog_title">Blog Title:</label>
            <input type="text" id="blog_title" name="blog_title" value="<?= $qwerty["blog_title"] ?>">

            <label for="blog_description">Blog Description:</label>
            <textarea name="blog_description" id="blog_description"><?= $qwerty["blog_description"] ?></textarea>

            <button type="submit">Update</button>
        </form>
    </main>
</body>
</html>
