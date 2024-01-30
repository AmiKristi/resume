<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Entry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to right, #3498db, #1abc9c);
        }

        main {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
            color: #3498db;
        }

        form {
            margin-top: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #27ae60;
            color: #fff;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
        <h1>Create Blog Entry</h1>
        <a href="<?= base_url('blog') ?>">Index</a>

        <form method="post" action="<?= base_url('blog/store') ?>">
            <label for="blog_title">Blog Title:</label>
            <input type="text" id="blog_title" name="blog_title" required>

            <label for="blog_description">Blog Description:</label>
            <textarea name="blog_description" id="blog_description" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>
