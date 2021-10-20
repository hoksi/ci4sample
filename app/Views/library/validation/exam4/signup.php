<html>
<head>
    <title>My Form</title>
</head>
<body>

    <?= (isset($validation) ? $validation->listErrors() : '') ?>

    <?= form_open('/library/validation/exam4/signup') ?>

    <h5>Username</h5>
    <input type="text" name="username" value="<?= set_value('username') ?>" size="50" />

    <h5>Password</h5>
    <input type="password" name="password" value="" size="50" />

    <h5>Password Confirm</h5>
    <input type="password" name="passconf" value="" size="50" />

    <h5>Email Address</h5>
    <input type="text" name="email" value="<?= set_value('email') ?>" size="50" />

    <h5><input type="submit" value="Submit" /></h5>

    </form>

</body>
</html>