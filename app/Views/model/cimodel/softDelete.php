<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<h2>$useSoftDeletes</h2>

<p>
   모델의 이 속성이 `true`이면 `delete*` 메소드 호출시 실제로 행을 삭제하는 대신 데이터베이스의 `deleted_at` 필드의 값을 수정합니다.<br/>
   이를 통해 데이터를 복원할 수있는 “휴지통”을 유지하거나 보안 추적의 일부로 보존할 수 있습니다.<br/>
   논리 삭제(soft delete)를 위한 `deleted_at` 필드는 데이터베이스에 타입에 따라 `DATETIME` 또는 `INTEGER`로 지정되어야 합니다.<br/>
   필드 이름은 기본적으로 `deleted_at`로 설정되어 있지만 `$deletedField` 속성에 원하는 이름으로 지정할 수 있습니다.
</p>
<pre class="prettyprint">
$userModel->where('idx >', 2)->delete();

<?= print_r($userModel->where('idx >', 2)->delete(), true) ?>

<?= get_last_query() ?>
</pre>

<h2>withDeleted()</h2>

<p>
    모델의 `$useSoftDeletes` 속성이 `true`이면 find* 메소드는 ‘deleted_at IS NOT null’인 행을 반환하지 않습니다.<br/>
    이를 일시적으로 무시하려면 find* 메소드를 호출하기 전에 `withDeleted()` 메소드를 사용합니다.
</p>
<pre class="prettyprint">
$userModel->findAll();

<?= print_r($userModel->withDeleted(false)->findAll(), true) ?>

<?= get_last_query() ?>


$userModel->withDeleted()->findAll();

<?= print_r($userModel->withDeleted()->findAll(), true) ?>

<?= get_last_query() ?>
</pre>
