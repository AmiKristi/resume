<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="favorites">
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
    </section>

    <?= $this->endSection() ?>