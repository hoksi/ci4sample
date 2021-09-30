<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>테이블 클래스는 배열 또는 데이터베이스 결과 세트에서 HTML 테이블을 자동 생성할 수있는 메소드를 제공합니다.</p>

            <h2>클래스 초기화</h2>

            <p>Table 클래스는 서비스로 제공되지 않으며 “일반적으로” 인스턴스화해야 합니다.</p>
            <pre>$table = new \CodeIgniter\View\Table();</pre>

            <p>다음은 다차원 배열에서 테이블을 만드는 방법을 보여주는 예입니다. 배열의 첫 번째 열은 테이블 제목이 됩니다.</p>
            <p>`setHeading()` 메소드를 사용하면 제목을 설정할 수 있습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Example',
                'title' => 'Example.php',
                'href' => '/sample/home/view/Controllers/Response/Table/Example',
            ],
            [
                'id' => 'ExampleShow',
                'title' => '/response/table/example',
                'href' => '/response/table/example',
            ],
            [
                'id' => 'ExampleUseParamShow',
                'title' => '/response/table/example/useParam',
                'href' => '/response/table/example/useParam',
            ],
            [
                'id' => 'ExampleUseArrayShow',
                'title' => '/response/table/example/useArray',
                'href' => '/response/table/example/useArray',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>테이블 모양 변경</h2>

            <p>`setTemplate()`를 사용하면 테이블 템플릿을 설정할 수 있습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Custom',
                'title' => 'Custom.php',
                'href' => '/sample/home/view/Controllers/Response/Table/Custom',
            ],
            [
                'id' => 'CustomShow',
                'title' => '/response/table/custom',
                'href' => '/response/table/custom',
            ],
            [
                'id' => 'CustomUsePartialShow',
                'title' => '/response/table/custom/usePartial',
                'href' => '/response/table/custom/usePartial',
            ],
            [
                'id' => 'CustomUseInitShow',
                'title' => '/response/table/custom/useInit',
                'href' => '/response/table/custom/useInit',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>