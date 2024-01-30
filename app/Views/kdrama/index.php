<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            max-width: 600px;
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

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        button {
            background-color: #27ae60;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <main>
        <h1>Favorite Korean Dramas</h1>
        <a href="<?= base_url('kdrama/create') ?>">Create</a>

        <table>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <?php foreach ($dramas as $drama): ?>
                <tr>
                    <td><?= $drama['drama_title'] ?></td>
                    <td><?= $drama['drama_description'] ?></td>
                    <td><?= $drama['drama_description'] ?></td>
                    <td>
                        <a href="<?= base_url('kdrama/edit/') . $drama['drama_id'] ?>">
                            <button>Edit</button>
                        </a>
                        <form style="display:inline" action="<?= base_url('kdrama/delete/') . $drama['drama_id'] ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>
</html>
