<!-- used Bootstrap -->
<table class="table">

    <thead class="thead-light">
        <tr>
        <th>No.</th>
        <th>Song Name</th>
        <th>Author Name</th>
        <th>HTML Code</th>
        <th>Video Code</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($songs as $song) : ?>
        <tr>
        <th scope="row"><?php $song->id ?></th>
        <td><?php $song->songName ?></td>
        <td><?php $song->authorName ?></td>
        <td><?php $song->HTMLCode ?></td>
        <td><?php $song->$videoCode ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>