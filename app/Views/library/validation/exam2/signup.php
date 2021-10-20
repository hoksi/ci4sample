<html>
<head>
    <title>My Form</title>
</head>
<body>

    <?= (isset($validation) ? $validation->listErrors() : '') ?>

    <?= form_open('/library/validation/exam2/signup') ?>

    <h5>Username</h5>
    <input type="text" name="contacts[name]" value="<?= set_value('contacts[name]') ?>" size="50" />

    <h5>Friends</h5>
    <input type="text" name="contacts[friends][name][0]" value="<?= set_value('contacts[friends][name][0]') ?>" size="50" /><br/>
    <input type="text" name="contacts[friends][name][1]" value="<?= set_value('contacts[friends][name][1]') ?>" size="50" />

    <h5>User ids</h5>
    <input type="text" name="user_ids[0]" value="<?= set_value('user_ids[0]') ?>" size="50" /><br/>
    <input type="text" name="user_ids[1]" value="<?= set_value('user_ids[1]') ?>" size="50" /><br/>
    <input type="text" name="user_ids[2]" value="<?= set_value('user_ids[2]') ?>" size="50" /><br/>
    <input type="text" name="user_ids[3]" value="<?= set_value('user_ids[3]') ?>" size="50" /><br/>

    <h5><input type="submit" value="Submit" h5div>

    </form>

</body>
</html>