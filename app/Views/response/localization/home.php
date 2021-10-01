<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>지역화</h2>

            <p>CodeIgniter는 어플리케이션을 다른 언어로 지역화하는데 도움이 되는 몇 가지 도구를 제공합니다. 어플리케이션의 전체 지역화는 복잡한 주제이지만 어플리케이션에서 지원되는 언어로 문자열을 바꾸는 것은 간단합니다.</p>
            <p>언어 문자열은 지원되는 각 언어의 하위 디렉토리와 함께 app/Language 디렉토리에 저장됩니다.</p>

            <pre>/app
    /Language
        /en
            app.php
        /fr
            app.php</pre>

            <h2>지역화 설정</h2>
            
            <p>모든 사이트에는 기본 language/locale이 있으며, Config/App.php에서 설정할 수 있습니다.</p>
            <pre>public $defaultLocale = 'en';</pre>
            <p>값은 어플리케이션이 텍스트 문자열 및 기타 형식을 관리하는데 사용하는 모든 문자열입니다. BCP 47 언어 코드를 사용하는 것이 좋습니다.</p>
            <p>이를 따르면 “미국 영어”의 경우는 `en-US`, “한국어”의 경우는 `ko-KR`과 같은 언어 코드가 생성됩니다.</p>
            <p>이에 대한 더 읽기 쉬운 소개는 <a href="https://www.w3.org/International/articles/language-tags/" target="_blank">W3C 사이트</a>에서 찾을 수 있습니다.</p>
            <p>Codeigniter는 정확하게 일치하는 것을 찾을 수 없는 경우 더 일반적인 언어 코드로 대체할 만큼 똑똑합니다.</p>
            <p>로케일 코드가 `en-US`로 설정되어 있고 `en` 디렉토리만 있다면,  `en-US`에 대한 다른 구체적인 설정이 없으므로 이 파일이 사용됩니다.</p>
            <p>그러나 app/Language/en-US 언어 디렉토리가 존재하면 이를 먼저 사용합니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'ConfigApp',
                'title' => 'Config/App.php',
                'href' => '/sample/home/view/Config/App',
            ],
            [
                'id' => 'LanguageEn',
                'title' => 'Language/en/Validation.php',
                'href' => '/sample/home/view/Language/en/Validation',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>로케일 감지</h2>

            <p>요청중에 올바른 로케일을 감지하기 위해 지원되는 두 가지 방법이 있습니다.</p>
            <p>첫 번째는 <a href="http://ci4doc.cikorea.net/incoming/content_negotiation.html" target="_blank">컨텐츠 협상</a>을 자동으로 수행하여 올바른 로케일을 결정하는 “set and forget” 방법입니다.</p>
            <p>두 번째 방법은 경로(route)에서 `{locale}`로 설정된 세그먼트를 통하여 로케일을 지정할 수 있습니다.</p>

            <h2>컨텐츠 협상</h2>
            <p>`Config/App.php`에서 `$negotiateLocale`와 `$supportedLocales`에 추가 설정을 하여 컨텐츠 협상이 자동으로 수행되도록 설정할 수 있습니다.</p>
            <p>`$negotiateLocale`의 값은 Request 클래스에 로케일을 협상하고 싶다고 알려주는 것으로 간단히 true로 설정합니다.</p>
            <pre>public $negotiateLocale = true;</pre>
            
            <p>이 기능이 활성화되면 시스템은 `$supportLocales`에 정의한 로케일 배열을 기반으로 올바른 언어를 자동으로 협상합니다.</p>
            <p>지원하는 언어와 요청한 언어가 일치하지 않으면 `$supportedLocales`의 첫 번째 항목이 사용됩니다.</p>
            <pre>public $supportedLocales = ['en', 'kr', 'fr'];</pre>

            <h2>경로(route)에 배치</h2>
            
            <p>두 번째 방법은 자리 표시자  `{locale}`를 사용하여 원하는 로케일을 감지하고 요청(Request)에 설정합니다.</p>
            <p>`{locale}`은 경로에 세그먼트로 배치할 수 있으며, 존재하는 경우 일치하는 세그먼트의 값이 로케일이 됩니다.</p>
            <p>다음 예의 경우 사용자가 `http://example.com/kr/books`로 방문하면 로케일이 `kr`로 설정됩니다.</p>
            <pre>$routes->get('{locale}/books', 'App\Books::index');</pre>

            <h2>현재 로케일 검색</h2>

            <p>현재 로케일은 getLocale() 메소드를 통해 IncomingRequest 오브젝트에서 검색할 수 있습니다. 컨트롤러에서 $this->request를 통해 사용할 수 있습니다</p>
            <p>또는 서비스 클래스를 사용하여 현재 요청을 검색할 수 있습니다.</p>
            
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'LocaleConfigApp',
                'title' => 'Config/App.php',
                'href' => '/sample/home/view/Config/App',
            ],
            [
                'id' => 'LocaleRoute',
                'title' => 'Route.php',
                'href' => '/sample/home/view/Config/development/Locale',
            ],
            [
                'id' => 'Locale',
                'title' => 'Locale.php',
                'href' => '/sample/home/view/Controllers/Response/Localization/Locale',
            ],
            [
                'id' => 'LocaleShow',
                'title' => '/response/localization/locale',
                'href' => '/response/localization/locale',
            ],
            [
                'id' => 'krLocaleShow',
                'title' => '/kr/response/localization/locale',
                'href' => '/kr/response/localization/locale',
            ],
            [
                'id' => 'frLocaleShow',
                'title' => '/fr/response/localization/locale',
                'href' => '/fr/response/localization/locale',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>언어 파일 만들기</h2>

            <p>언어 파일에 필요한 특정 명명 규칙은 없습니다.`Sample.php` 라는 이름의 파일로 오류 메시지 작성 예를 들어 보겠습니다.</p>
            <p>`Sample.php` 파일은 국가별 언어 키와 반환할 문자열의 배열을 반환하며, 배열의 각 요소는 중첩하여 정의(define)할 수 있습니다.</p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'LangEnSample',
                'title' => 'Language/en/Sample.php',
                'href' => '/sample/home/view/Language/en/Sample',
            ],
            [
                'id' => 'LangKrSample',
                'title' => 'Language/kr/Sample.php',
                'href' => '/sample/home/view/Language/kr/Sample',
            ],
            [
                'id' => 'LangFrSample',
                'title' => 'Language/fr/Sample.php',
                'href' => '/sample/home/view/Language/fr/Sample',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>기본 사용법</h2>

            <p>`lang()` 헬퍼 함수를 사용하면 파일 이름과 언어 키를 마침표(.)로 구분된 첫 번째 매개 변수로 전달하여 모든 언어 파일에서 텍스트를 검색할 수 있습니다.</p>
            <p>`Sample` 언어 파일에서 errorEmailMissing 문자열을 로드하려면 다음과 같이합니다.</p>
            <p>요청된 언어 키가 현재 로케일의 파일에 없으면 문자열이 변경되지 않고 키가 다시 전달됩니다.</p>
            <p>다음 예에서 `Sample.noMessage`는 정의되지 않아 키가 출력됩니다.</p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'LangRoute',
                'title' => 'Route.php',
                'href' => '/sample/home/view/Config/development/Lang',
            ],
            [
                'id' => 'Lang',
                'title' => 'Lang.php',
                'href' => '/sample/home/view/Controllers/Response/Localization/Lang',
            ],
            [
                'id' => 'LangShow',
                'title' => '/response/localization/lang',
                'href' => '/response/localization/lang',
            ],
            [
                'id' => 'LangKrShow',
                'title' => '/kr/response/localization/lang',
                'href' => '/kr/response/localization/lang',
            ],
            [
                'id' => 'LangFrShow',
                'title' => '/fr/response/localization/lang',
                'href' => '/fr/response/localization/lang',
            ],
        ]); ?>

        <?= tabler_card_start() ?>
            <h2>매개 변수 교체</h2>

            <p>lang() 함수의 두 번째 매개 변수로 언어 문자열의 자리 표시자를 바꾸는 값 배열을 전달할 수 있습니다. 이것은 매우 간단한 숫자 변환과 서식을 허용합니다.</p>
        <?= tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>