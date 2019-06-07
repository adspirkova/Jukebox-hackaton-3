
<h2>Form fields</h2>
<form action="" method="post">
<?= csrf_field() ?>
    <div class="form-group">
                <label for="">Name</label><br>
                <input 
                    type="text" 
                    name="songName" 
                    value="<?= htmlspecialchars($record -> songName)?>" 
                    >
            </div>
    <div class="form-group">
        <label for="">Author</label><br>
        <input 
            type="text" 
            name="authorName" 
            value="<?= htmlspecialchars($record -> authorName)?>" 
            class="form-control">
    </div>
    <div class="form-group">
        <label for="">Code of the video</label><br>
        <input 
            type="text" 
            name="videoCode" 
            value="<?= htmlspecialchars($record -> videoCode)?>" 
            class="form-control">
    </div>
    <div class="form-group">
        <label for="">HTML Code</label><br>
        <textarea name="HTMLcode" id="" cols="30" rows="10"><?= htmlspecialchars($record -> HTMLcode)?></textarea>
    </div>
    <input type="submit" value="save">

  
</form
