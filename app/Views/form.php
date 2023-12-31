<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Validation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Form Validation</h1>
            <?php if (isset($validation)) : ?>
                <div class="text-danger">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input value="<?= set_value('email') ?>" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Category</label>
                    <select name="category" class="form-control">
                        <option value=""></option>
                        <?php foreach ($categories as $category) : ?>
                        <option <?= set_select('category', $category) ?> value="<?=$category?>"><?=$category?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input name="date" value="<?= set_value('date') ?>" type="date" class="form-control" id="date">
                </div>
                <?php
                    print_r($_POST);
                ?>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
