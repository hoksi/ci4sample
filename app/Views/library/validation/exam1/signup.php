<html>
<head>
    <title>My Form</title>
</head>
<body>

    <?= $validation->listErrors() ?>

    <?= form_open('/library/validation/exam1') ?>

    <h5>Username</h5>
    <input type="text" name="username" value="<?= set_value('username') ?>" size="50" />

    <h5>Password</h5>
    <input type="password" name="password" value="" size="50" />

    <h5>Password Confirm</h5>
    <input type="password" name="passconf" value="" size="50" />

    <h5>Email Address</h5>
    <input type="text" name="email" value="<?= set_value('email') ?>" size="50" />

    <div><input type="submit" value="Submit" /></div>

    </form>

</body>
</html>