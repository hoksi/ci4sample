<html>
<head>
    <title>My Form</title>
</head>
<body>

    <?= (isset($validation) ? $validation->listErrors() : '') ?>

    <?= form_open_multipart('/library/validation/exam3/signup') ?>

    <h5>Username</h5>
    <input type="text" name="username" value="<?= set_value('username') ?>" size="50" />

    <h5>Avarar</h5>
    <input type="file" name="avatar" />

    <h5><input type="submit" value="Submit" /></h5>

    </form>

</body>
</html>