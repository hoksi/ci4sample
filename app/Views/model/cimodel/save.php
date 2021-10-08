<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<h2>insert()</h2>

<p>
    전달된 데이터의 연관 배열을 이용하여, 데이터베이스에 새로운 데이터 행을 작성합니다.<br/>
    배열의 키는 $table의 열(column) 이름과 일치해야 하며 배열의 값은 해당 키에 저장할 값입니다.
</p>
<pre class="prettyprint">
$userModel->insert([
    'username' => 'darth',
    'title' => 'my title',
    'email'    => 'd.vader@theempire.com',
]);

<?= print_r($userModel->insert([
    'username' => 'darth',
    'title' => 'my title',
    'email'    => 'd.vader@theempire.com',
]), true) ?>

<?= get_last_query() ?>
</pre>

<h2>update()</h2>

<p>
    데이터베이스의 기존 레코드를 업데이트합니다. 첫 번째 매개 변수는 업데이트할 레코드의 `$primaryKey`입니다.<br/>
    두 번째 매개 변수는 이 메소드에 전달될 데이터의 연관 배열입니다.<br/>
    배열의 키는 $table의 열(column) 이름과 일치해야 하며 배열의 값은 해당 키에 저장할 값입니다.
</p>
<pre class="prettyprint">
$userModel->update(1, [
    'name' => 'darth',
    'email'    => 'd.vader@theempire.com',
]);

<?= print_r($userModel->update(1, [
    'name' => 'darth',
    'email'    => 'd.vader@theempire.com',
]), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    기본(primary) 키 배열을 첫 번째 매개 변수로 전달하여 한 번의 호출로 여러 레코드를 업데이트할 수 있습니다.
</p>
<pre class="prettyprint">
$userModel->update([1, 2], [
    'name' => 'darth',
    'email'    => 'd.vader@theempire.com',
]);

<?= print_r($userModel->update([1, 2], [
    'name' => 'darth',
    'email'    => 'd.vader@theempire.com',
]), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    쿼리 빌더의 다양한 메소드를 추가하여 업데이트 명령을 수행하려면, 매개 변수를 비운채 사용하십시오.
</p>
<pre class="prettyprint">
$userModel->set([
    'name' => 'darth',
    'email'    => 'd.vader@theempire.com',
])->whereIn('idx', [1, 2])->update();

<?= print_r($userModel->set([
    'name' => 'darth',
    'email'    => 'd.vader@theempire.com',
])->whereIn('idx', [1, 2])->update(), true) ?>

<?= get_last_query() ?>
</pre>

<h2>save()</h2>

<p>
    `$primaryKey` 값과 일치하는 배열 키가 존재하는지의 여부에 따라 INSERT 또는 UPDATE를 자동으로 처리합니다.
</p>
<pre class="prettyprint">
$userModel->save([
    'username' => 'darth',
    'email'    => 'd.vader@theempire.com',
]);

<?= print_r($userModel->save([
    'username' => 'darth',
    'email'    => 'd.vader@theempire.com',
]), true) ?>

<?= get_last_query() ?>


$userModel->save([
    'idx' => 1,
    'username' => 'darth',
    'email'    => 'd.vader@theempire.com',
]);

<?= print_r($userModel->save([
    'idx' => 1,
    'username' => 'darth',
    'email'    => 'd.vader@theempire.com',
]), true) ?>

<?= get_last_query() ?>
</pre>
