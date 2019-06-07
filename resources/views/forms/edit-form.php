<!-- used Bootstrap -->

<h2>Add Songs</h2>
<hr>
<form action="" method="post">
<?= csrf_field() ?>
    <div class="form-group">
        <label for="">Name</label><br>
        <input 
            type="text" 
            name="songName" 
            value="<?= htmlspecialchars($record -> songName)?>" 
            style="width:400px; height:40px;">
    </div>
    <div class="form-group">
        <label for="">Author</label><br>
        <input 
            type="text" 
            name="authorName" 
            value="<?= htmlspecialchars($record -> authorName)?>" 
            class="form-control"
            style="width:400px; height:40px;">
    </div>
    <div class="form-group">
        <label for="">Code of the video</label><br>
        <input 
            type="text" 
            name="videoCode" 
            value="<?= htmlspecialchars($record -> videoCode)?>" 
            class="form-control"
            style="width:400px; height:40px;">
    </div>
    <div class="form-group">
        <label for="">HTML Code</label><br>
        <textarea name="HTMLcode" id="" cols="40" rows="10"><?= htmlspecialchars($record -> HTMLcode)?></textarea>
    </div>
    <!-- <input type="submit" value="Add"> -->
    <button type="submit" class="btn btn-outline-dark" value="Add">Add</button>

  
</form>

