<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <h2>모델</h2>

            <p>데이터베이스 테이블과 상호 작용(레코드 찾기, 업데이트, 삭제등)하는 많은 표준 메소드가 기본 제공됩니다.</p>

            <h2>모델에 액세스하기</h2>

            <p>
                모델은 일반적으로 `app/Models` 디렉토리에 저장되며, `namespace App\Models`와 같이 디렉토리의 위치와 일치하는 네임스페이스를 가집니다.<br/>
                새 인스턴스를 만들거나 `model()` 헬퍼 함수를 사용하여 클래스 내 모델에 액세스할 수 있습니다.
            </p>
            <pre class="prettyprint">
// 새 클래스를 수동으로 생성
$userModel = new \App\Models\UserModel();

// 모델 헬퍼 함수로 새 클래스 생성
$userModel = model('App\Models\UserModel', false);

// 모델의 공유 인스턴스 생성
$userModel = model('App\Models\UserModel');

// custom DB 연결
// 네임스페이스가 제공되지 않으면 시스템이 알고 있는
// 모든 네임스페이스를 검색하여 UserModel 클래스를 찾습니다.
$db = db_connect('custom');
$userModel = model('UserModel', true, $db);</pre>
        <?= tabler_card_end() ?>
    </div>
</div>
<?= $this->endSection() ?>