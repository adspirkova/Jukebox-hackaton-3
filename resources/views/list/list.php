<!-- used Bootstrap -->
<table class="table">

    <thead class="thead-light">
        <tr>
        <th>No.</th>
        <th>Song</th>
        <th>Author</th>
        <th>Video</th>
        <th>Video Code</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($songs as $song) : ?>
        <tr>
        <th scope="row"><?= $song->id ?></th>
        <td><?= $song->songName ?></td>
        <td><?= $song->authorName ?></td>
        <td><?= $song->HTMLcode ?></td>
        <td><?= $song->videoCode ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>