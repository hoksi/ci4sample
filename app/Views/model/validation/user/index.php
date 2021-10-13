<form method="post" action="/model/validation/user/save">
    <input type="hidden" name="idx" value="<?= $idx ?>" />
    <ul>
        <li>이름 : <input type="text" name="name" value="<?= $name ?>"/></li>
        <li>이메일 : <input type="text" name="email" value="<?= $email ?>" /></li>
        <li>비밀번호 : <input type="password" name='password' value="<?= $password ?>"/></li>
        <li>비밀번호 확인 : <input type="password" name="pass_confirm" value="<?= $password ?>"/></li>
    </ul>
    <button>저장</button>
</form>

<?php if(!empty($userList)): ?>
<ol>
    <?php foreach($userList as $user): ?>
    <li>
        <?= $user['email'] ?>
        <?= $user['name'] ?>
        <a href="/model/validation/user/index/<?= $user['idx'] ?>">수정</a>
        <a href="/model/validation/user/delete/<?= $user['idx'] ?>">삭제</a>
    </li>
    <?php endforeach; ?>
</ol>
<?php endif; ?>