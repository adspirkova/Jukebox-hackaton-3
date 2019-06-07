

          <select>
            <?php foreach ($record as $key => $value)  : ?>
                <option value="$value -> songName">
                <?= $record == $value ? 'selected' : '' ?>
                <?= $record -> songName ?></option> 
            <?php endforeach ;?>
           </select> 
           

          