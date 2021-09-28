<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title('컨트롤러 필터') ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>컨트롤러 필터를 사용하면 컨트롤러 실행 전후에 작업을 수행할 수 있습니다. 이벤트와 달리 필터를 적용할 특정 URI를 선택할 수 있습니다.</p>
            <p>수신(Incoming) 필터는 요청을 수정하는 반면 사후(after)필터는 응답에 대해 작동하고 데이터를 수정할 수 있기 때문에 많은 유연성과 성능을 제공합니다.</p>
            <p>필터로 수행할 수있는 일반적인 예는 다음과 같습니다.</p>

            <ul>
                <li>수신 요청(request)에 대한 CSRF 보호</li>
                <li>역할(role)에 따른 사이트 영역 제한</li>
                <li>특정 엔드 포인트의 속도 제한</li>
                <li>“유지 보수 또는 서버 점검” 페이지 표시</li>
                <li>자동 컨텐츠 협상(content negotiation)</li>
                <li>and more..</li>
            </ul>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>필터 만들기</h2>

            <p>필터는 `CodeIgniter\Filters\FilterInterface`를 구현(implement)하는 간단한 클래스입니다. 두 개의 메소드 `before()` 와 `after()`를 가지고 있으며, 컨트롤러 전후에 각각 실행됩니다.</p>
            <p>클래스에는 두 메소드가 모두 포함되어야하지만 필요하지 않은 경우 메소드를 비워둘 수 있습니다. 스켈레톤 필터 클래스는 다음과 같습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'MyFilter',
                'title' => 'MyFilter.php',
                'href' => '/sample/home/view/Filters/MyFilter',
            ],
        ]) ?>


        <?= tabler_card_start() ?>
            <h2>사전(Before) 필터</h2>

            <p>모든 필터는 $request 오브젝트를 반환할 수 있으며, 컨트롤러가 실행될 때 변경 사항을 적용할 수 있도록 현재 요청(Request)을 대체합니다.</p>
            <p>컨트롤러가 실행되기 전에 필터가 실행되기 때문에 먼저 컨트롤러의 작업을 중지하거나, 특정 필터 이후의 필터 실행을 중지할 필요가 있습니다. 비어 있지 않은 결과를 반환하면 쉽게 이 작업을 수행할 수 있습니다.</p>
            <p>이전 필터가 빈 결과를 반환하면 컨트롤러 작업 또는 사후 필터가 계속 실행됩니다. Request 인스턴스의 경우는 비어 있지 않은 결과 규칙의 예외입니다. before 필터에서 반환하면 실행이 중지되지 않고 현재 $request 개체만 교체됩니다.</p>
            <p>아래 예는 `rend()` 함수 값에 따라 `login()'과 `welcome()`으로 리디렉션을 수행합니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'MyRedirectFilter',
                'title' => 'MyRedirectFilter.php',
                'href' => '/sample/home/view/Filters/MyRedirectFilter',
            ],
            [
                'id' => 'ConfigMyRedirectFilter',
                'title' => 'Filters.php',
                'href' => '/sample/home/view/Config/Filters',
            ],
            [
                'id' => 'MyRedirectFilterRouter',
                'title' => 'Router.php',
                'href' => '/sample/home/view/Config/development/MyRedirectFilter',
            ],
            [
                'id' => 'FiltersLogin',
                'title' => 'Login.php',
                'href' => '/sample/home/view/Controllers/Filters/Login',
            ],
            [
                'id' => 'FiltersLoginWelocme',
                'title' => '/myredirect',
                'href' => '/myredirect',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>사후(After) 필터</h2>

            <p>사후(After) 필터는 $response 객체만 반환할 수 있으며, 컨트롤러 실행을 중지할 수 없다는 점을 제외하면 사전(After) 필터와 거의 동일합니다.</p>
            <p>이를 통해 최종 출력을 수정하거나, 최종 출력으로 무언가를 수행할 수 있습니다. 이를 이용하여 특정 보안 헤더가 올바른 방식으로 설정되도록 하거나, 최종 출력을 캐시하거나, 나쁜(bad) 단어 필터로 최종 출력을 필터링하는 데 사용할 수 있습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'MyAfterFilter',
                'title' => 'MyAfterFilter.php',
                'href' => '/sample/home/view/Filters/MyAfterFilter',
            ],
            [
                'id' => 'ConfigMyAfterFilter',
                'title' => 'Filters.php',
                'href' => '/sample/home/view/Config/Filters',
            ],
            [
                'id' => 'MyAfterFilterRouter',
                'title' => 'Router.php',
                'href' => '/sample/home/view/Config/development/MyAfterFilter',
            ],
            [
                'id' => 'FiltersLoginHello',
                'title' => 'Login.php',
                'href' => '/sample/home/view/Controllers/Filters/Login',
            ],
            [
                'id' => 'FiltersHomeWelocme',
                'title' => '/myafter',
                'href' => '/myafter',
            ],
        ]) ?>
    </div>
</div>
<?= $this->endSection() ?>