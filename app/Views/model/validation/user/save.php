<?php if ($result === true): ?>

    <h2>저장되었습니다.</h2>
    <a href="/model/validation/user">돌아가기</a>

<?php else: ?>

    <h2>오류를 확인해 주십시오.</h2>
    <?php if (! empty($errors)) : ?>

    <div class="alert alert-danger">
        <?php foreach ($errors as $field => $error) : ?>
        <p><?= $error ?></p>
        <?php endforeach ?>
    </div>
    <a href="javascript:history.back();">돌아가기</a>
    
    <?php endif ?>

<?php endif; ?>

