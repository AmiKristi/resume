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
            background: #111;
            width: 100%;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
            padding: 15px 0;
            font-family: 'Ubuntu', sans-serif;
            transition: all 0.3s ease;
            background: #111;
        }

        .navbar .max-width {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar .logo a {
            color: #fff;
            font-size: 35px;
            font-weight: 600;
        }

        .navbar .logo a span {
            color: #6785ff;
            transition: all 0.3s ease;
        }

        .navbar.sticky .logo a span {
            color: #fff;
        }

        .navbar .menu li {
            list-style: none;
            display: inline-block;
        }

        .navbar .menu li a {
            display: block;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            margin-left: 25px;
            transition: color 0.3s ease;
        }

        .navbar .menu li a:hover {
            color: #6785ff;
        }

        .navbar.sticky .menu li a:hover {
            color: #fff;
        }

        main {
            background: #222;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 1000px;
            height: 350px;
            width: 100%;
            text-align: center;
            overflow-y: auto; 
            max-height: calc(100vh - 70px); 
        }

        main::-webkit-scrollbar {
            width: 0.5em;
        }

        main::-webkit-scrollbar-thumb {
            background-color: #6785ff;
            outline: 1px solid #6785ff;
        }

        main::-webkit-scrollbar-track {
            background-color: #222;
        }
        
        h1 {
            color: #fff;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
            color: #6785ff;
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
            color:#fff;
        }

        th {
            background: #6785ff;
            color: #fff;
        }

        button {
            background: #6785ff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin-bottom: 5px;
            width: 65px;
        }

        .delete-button {
            background-color: #e74c3c;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <ul class="menu">
                <li><a href="<?= base_url("home") ?> " alt="" class="menu-btn">Home</a></li>
                <li><a href="<?= base_url("about") ?> " alt="" class="menu-btn">About</a></li>
                <li><a href="<?= base_url("education") ?> " alt="" class="menu-btn">Education</a></li>
                <li><a href="<?= base_url("skills") ?> " alt="" class="menu-btn">Skills</a></li>
                <li><a href="<?= base_url("interests") ?> " alt="" class="menu-btn">Personal Interests</a></li>
                <li><a href="<?= base_url("kdrama") ?> " alt="" class="menu-btn">Favorites</a></li>
                <li><a href="<?= base_url("contact") ?> " alt="" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <main>
        <h1>Favorite Korean Dramas</h1>
        <a href="<?= base_url('kdrama/create') ?>"><button>Create</button></a>

        <table>
            <tr>
                <th>Title</th>
                <th>Genre/s</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <?php foreach ($dramas as $drama): ?>
                <tr>
                    <td><?= $drama['drama_title'] ?></td>
                    <td><?= $drama['drama_genre'] ?></td>
                    <td><?= $drama['drama_description'] ?></td>
                    <td>
                        <a href="<?= base_url('kdrama/edit/') . $drama['id'] ?>">
                            <button>Edit</button>
                        </a>
                        <form style="display:inline" action="<?= base_url('kdrama/delete/') . $drama['id'] ?>" method="post">
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
