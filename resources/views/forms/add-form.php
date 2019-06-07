<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <main>
        <h2>Form fields</h2>
        <form action="" method="post">

            <div class="form-group">
                <label for="">Name</label><br>
                <input 
                    type="text" 
                    name="author" 
                    value="<?= htmlspecialchars($author) ?>" 
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="">Age</label><br>
                <input 
                    type="number" 
                    name="age" 
                    value="<?= htmlspecialchars($age) ?>" 
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="">Biography</label><br>
                <textarea name="bio" id="" cols="30" rows="10"><?= htmlspecialchars($bio) ?></textarea>
            </div>

            <div class="form-group">
                <button onclick="document.getElementById('is_robot_input').value = 0; return false;">I am not a robot</button>
                <input type="hidden" name="is_robot" id="is_robot_input" value="<?= htmlspecialchars($is_robot) ?>">
            </div>

            <div class="form-group">
                <select name="gender" id="">

                    <?php foreach ($genders as $value => $name) : ?>
                        <option value="<?= $value ?>" <?= $gender == $value ? 'selected' : '' ?>><?= $name ?></option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div class="form-group">
                <input type="hidden" name="tired" value="0">
                <input type="checkbox" name="tired" value="1" id="tired" <?= $user_is_tired ? 'checked' : '' ?>>
                <label for="tired">Are you tired yet?</label>
            </div>

            <div class="form-group">
                <input type="radio" name="response" value="email" <?= $response == 'email' ? 'checked' : '' ?>>Respond by email<br>
                <input type="radio" name="response" value="phone" <?= $response == 'phone' ? 'checked' : '' ?>>Respond by phone<br>
                <input type="radio" name="response" value="none" <?= $response == 'none' ? 'checked' : '' ?>>Don't respond<br>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="form-control btn btn-primary">
            </div>

        </form>

    </main>
    
        <script src="" async defer></script>
    </body>
</html>