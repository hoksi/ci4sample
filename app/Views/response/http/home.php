<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>Response 클래스</h2>

            <p>`Response` 클래스는 인스턴스화되어 컨트롤러로 전달되며, $this->response를 통해 액세스할 수 있습니다.</p>
            <p>CodeIgniter가 헤더와 본문 전송을 담당하므로 클래스를 직접 만지게되는 경우는 드물지만, 매우 특정한 상태 코드를 재 전송하거나, HTTP 캐싱을 활용해야 할 때 매우 유용합니다.</p>

            <h2>출력 설정</h2>
            <p>출력을 직접 설정해야 하고 자동으로 가져 오기 위해 CodeIgniter에 의존하지 않는 경우, `setBody` 메소드를 사용하여 수동으로 수행할 수 있습니다.</p>
            <p>`setBody` 메소드는 일반적으로 응답의 상태 코드 설정과 함께 사용됩니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'SetOutput',
                'title' => 'SetOutput.php',
                'href' => '/sample/home/view/Controllers/Response/Http/SetOutput',
            ],
            [
                'id' => 'SetOutputShow',
                'title' => '/response/http/setoutput',
                'href' => '/response/http/setoutput',
            ],
            [
                'id' => 'SetOutputCustomShow',
                'title' => '/response/http/setoutput/custom',
                'href' => '/response/http/setoutput/custom',
            ],
            [
                'id' => 'SetOutputJsomShow',
                'title' => '/response/http/setoutput/json',
                'href' => '/response/http/setoutput/json',
            ],
            [
                'id' => 'SetOutputXmlShow',
                'title' => '/response/http/setoutput/xml',
                'href' => '/response/http/setoutput/xml',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>