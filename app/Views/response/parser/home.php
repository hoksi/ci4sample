<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>뷰 파서는 뷰 파일에 포함된 유사 변수에 대한 간단한 텍스트 대체를 수행합니다. 간단한 변수 또는 변수 태그 쌍을 구문 분석할 수 있습니다.</p>
            <p>유사 변수 또는 제어 구문은 중괄호({})로 묶습니다</p>
            <p>이러한 유사변수는 실제 PHP 변수가 아니며 템플릿(뷰 파일)에서 PHP 코드를 제거할 수 있는 일반 텍스트 표현입니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'blog_templateView',
                'title' => 'blog_template.php',
                'href' => '/sample/home/view/Views/response/parser/blog_template',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>뷰 파서 클래스 사용하기</h2>

            <p>파서 클래스를 로드하는 가장 간단한 방법은 서비스를 통하는 것입니다.</p>
            <pre>$parser = \Config\Services::parser();</pre>

            <p>`new`를 사용하여 Parser 클래스를 직접 인스턴스화 할 수 있습니다</p>
            <pre>$parser = new \CodeIgniter\View\Parser();</pre>

            <p>`Parser`를 사용한 뷰 템플릿은 일반적인 뷰 PHP 스크립트와 달리 파서에서만 처리됩니다. 뷰 템플릿에 포함된 PHP 코드는 파서에 의해 무시되며 대체 코드만 수행됩니다.</p>

            <h2>파서가 하는 일</h2>

            <p>`Parser` 클래스는 어플리케이션의 뷰 경로에 저장된 “PHP/HTML 스크립트”를 처리합니다. 이 스크립트는 PHP 코드를 포함할 수 없습니다.</p>
            <p>각 뷰의 매개 변수(의사 변수라고 함)는 사용자가 제공한 값의 유형에 따라 대체를 유발합니다. 유사 변수는 PHP 변수로 추출되지 않습니다. 그 대신 값은 유사 변수 구문을 통해 액세스되며 이름은 중괄호 안에서 참조됩니다.</p>
            <p>`Parser` 클래스는 내부적으로 연관 배열을 사용하여 `render()`를 호출할 때까지 의사 변수 설정을 누적합니다. 이는 의사 변수 이름이 고유해야 하거나, 나중에 설정된 매개 변수가 같은 이름의 이전 매개 변수보다 우선함을 의미합니다.</p>
            <p>또한 스크립트 내부의 다른 컨텍스트에 대한 이스케이프 매개 변수 값에 영향을 줍니다. 이스케이프된 각 값에 고유한 매개 변수 이름을 지정해야 합니다.</p>

            <h2>파서 템플릿</h2>

            <p>`render()` 메소드를 사용하여 다음과 같이 간단한 템플릿을 구문 분석(또는 렌더링)할 수 있습니다.</p>
            <p>뷰 파라미터는 템플릿에서 교체할 데이터의 연관 배열로 setData()에 전달됩니다. 다음 예제에서 템플릿은 두 개의 변수 `{blog_title}`과 `{blog_heading}`를 포함합니다.</p>
            <p> `render()`의 첫 번째 매개 변수는 뷰 파일의 이름입니다. 여기서 `blog_template`가 뷰 파일의 이름입니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Render',
                'title' => 'Render.php',
                'href' => '/sample/home/view/Controllers/Response/Parser/Render',
            ],
            [
                'id' => 'RenderView',
                'title' => 'blog_template.php',
                'href' => '/sample/home/view/Views/response/parser/blog_template',
            ],
            [
                'id' => 'RenderShow',
                'title' => '/response/parser/render',
                'href' => '/response/parser/render',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>대체 변형</h2>

            <p>대체 유형은 `simple, looping, nested` 세 가지가 지원됩니다. 유사 변수가 추가된 것과 동일한 순서로 대체가 수행됩니다.</p>
            <p>파서가 수행하는 단순 치환은 아래 예에서와 같이 해당 데이터 매개 변수에 스칼라 또는 문자열 값이 있는 의사 변수의 일대일 대체입니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Simple',
                'title' => 'Simple.php',
                'href' => '/sample/home/view/Controllers/Response/Parser/Simple',
            ],
            [
                'id' => 'SimpleShow',
                'title' => '/response/parser/simple',
                'href' => '/response/parser/simple',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>루프 대체</h2>

            <p>의사 변수의 값이 배열인 경우 루프 대체가 발생합니다.</p>
            <p>다음 코드에서 한 쌍의 변수 `{blog_entries} data… {/blog_entries}`를 볼 수 있습니다.</p>
            <p>이와 같은 경우 이들 쌍들 사이의 전체 데이터 청크는 파라미터 배열의 “blog_entries” 요소의 행 수에 대응하여 여러 번 반복 됩니다.</p>
            <p>변수 쌍 구문 분석은 단일 변수를 구문 분석하기 위해 위에 표시된 동일한 코드를 사용하지만 데이터에 다차원 배열을 추가합니다.</p>
            <p>반복하려는 배열이 배열 대신 객체라면 파서는 먼저 객체에서 `asArray` 메소드를 찾습니다.</p>
            <p>`asArray` 메소드가 존재한다면 해당 메소드를 호출하여 얻은 결과 배열을 위에서 설명한대로 반복합니다.</p>
            <p>`asArray` 메소드가 없으면 객체가 배열로 캐스트(cast)되고 해당 퍼블릭 속성이 파서에 제공됩니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'LoopView',
                'title' => 'blog_template.php',
                'href' => '/sample/home/view/Views/response/parser/blog_template',
            ],
            [
                'id' => 'Loop',
                'title' => 'Loop.php',
                'href' => '/sample/home/view/Controllers/Response/Parser/Loop',
            ],
            [
                'id' => 'LoopShow',
                'title' => '/response/parser/loop',
                'href' => '/response/parser/loop',
            ],
        ]) ?>
    </div>
</div>
<?= $this->endSection() ?>