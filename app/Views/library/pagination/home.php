<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                페이지네이션 라이브러리는 서비스 클래스를 통해 로드할 수 있습니다.
            </p>

            <pre class="prettyprint">
$pager = \Config\Services::pager(); // 서비스 클래스를 통해 로드
$pager = service('pager'); // service() 헬퍼를 통해 로드</pre>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/library/pagination/exam1',
                'href' => '/library/pagination/exam1',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Library/Pagination/Exam1',
            ],
            [
                'id' => 'Exam1View',
                'title' => 'exam1.php',
                'href' => '/sample/home/view/Views/library/pagination/exam1',
            ],
        ]) ?>
        <?= tabler_card_start() ?>
            <h2>makeLinks()</h2>

            <p>
                현재 페이지, 페이지당 결과 수, 총 항목 수를 전달하여 페이지네이션을 만듭니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam2Show',
                'title' => '/library/pagination/exam2',
                'href' => '/library/pagination/exam2',
            ],
            [
                'id' => 'Exam2',
                'title' => 'Exam2.php',
                'href' => '/sample/home/view/Controllers/Library/Pagination/Exam2',
            ],
            [
                'id' => 'Exam2View',
                'title' => 'exam2.php',
                'href' => '/sample/home/view/Views/library/pagination/exam2',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <p>
                다섯 번째 인수로 사용할 세그먼트 번호를 지정하면 `$_GET` 변수대신 URI 세그먼트를 사용할 수 있습니다.<br/>
                세그먼트 값은 URI 세그먼트 수에 1을 더한 값보다 클 수 없습니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam3Show',
                'title' => '/library/pagination/exam3/index',
                'href' => '/library/pagination/exam3/index',
            ],
            [
                'id' => 'Exam3',
                'title' => 'Exam3.php',
                'href' => '/sample/home/view/Controllers/Library/Pagination/Exam3',
            ],
            [
                'id' => 'Exam3View',
                'title' => 'exam3.php',
                'href' => '/sample/home/view/Views/library/pagination/exam3',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>다중 페이지네이션</h2>

            <p>
                한 개의 페이지에 많은 Pager를 표시해야 하는 경우 그룹을 정의하여 표시할 수 있습니다.<br/>
                그룹명이 `group1`이라면 `group1`의 현재 페이지는 `$_GET[page_group1]` 변수로 전달됩니다.<br/>
                그룹명이 정의되어 있지 않거나 `default`라면 현재 페이지는 `$_GET[page]` 변수로 전달됩니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam4Show',
                'title' => '/library/pagination/exam4',
                'href' => '/library/pagination/exam4',
            ],
            [
                'id' => 'Exam4',
                'title' => 'Exam4.php',
                'href' => '/sample/home/view/Controllers/Library/Pagination/Exam4',
            ],
            [
                'id' => 'Exam4View',
                'title' => 'exam4.php',
                'href' => '/sample/home/view/Views/library/pagination/exam4',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>GET 항목 제한</h2>

            <p>
                페이지네이션 라이브러리는 GET으로 요청된 모든 항목을 페이지네이션 링크에 추가합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam5Show',
                'title' => '/library/pagination/exam5?search=foo&order=asc&hello=i+am+here&page=3',
                'href' => '/library/pagination/exam5?search=foo&order=asc&hello=i+am+here&page=3',
            ],
            [
                'id' => 'Exam5',
                'title' => 'Exam5.php',
                'href' => '/sample/home/view/Controllers/Library/Pagination/Exam5',
            ],
            [
                'id' => 'Exam5View',
                'title' => 'exam5.php',
                'href' => '/sample/home/view/Views/library/pagination/exam5',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>페이지 링크 사용자 정의</h2>

            <p>
                페이지 링크는 별도의 뷰 파일을 사용하여 HTML로 랜더링되며, 뷰 파일은 `app/Config/Pager.php` 파일에 정의되어 있습니다.<br/>
                속성 `$templates`은 사용 가능한 뷰의 별칭과 네임스페이스 뷰 경로를 가지고 있습니다.<br/>
                `default_full`과 `default_simple은 `Pager`의 `links()` 메소드와 `simpleLinks()` 메소드에서 사용됩니다.<br/>
                `Pager`의 기본 설정된 뷰를 변경하고 싶다면 `default_full`과 `default_simple`의 값을 변경합니다.
            </p>
            <p>
                기존 템플릿을 수정하지 않고 새로운 템플릿을 사용하고 싶다면 속성 `$templates`에 새로운 뷰에 대한 별칭과 경로를 추가로 설정하면 됩니다.<br/>
                구성이 완료되면 `links()`, `simpleLinks()`, `makeLinks()` 메소드에 지정하여 사용할 수 있습니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam6Show',
                'title' => '/library/pagination/exam6',
                'href' => '/library/pagination/exam6',
            ],
            [
                'id' => 'PagerConfigView',
                'title' => 'app/Config/Pager.php',
                'href' => '/sample/home/view/Config/Pager',
            ],
            [
                'id' => 'tabler_full',
                'title' => 'tabler_full.php',
                'href' => '/sample/home/view/Views/Pager/Sample/tabler_full',
            ],
            [
                'id' => 'Exam6',
                'title' => 'Exam6.php',
                'href' => '/sample/home/view/Controllers/Library/Pagination/Exam6',
            ],
            [
                'id' => 'Exam6View',
                'title' => 'exam6.php',
                'href' => '/sample/home/view/Views/library/pagination/exam6',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>페이져 템플릿 만들기</h2>

            <p>
                새로운 템플릿 작성시 여러 곳에서 사용의 유용성을 제한할 수 있는 불필요한 코드는 최대한 배제하고 페이지네이션 링크에 필요한 코드만 작성합니다.<br/>
                코드이그나이터가 제공하는 `default_full` 템플릿를 복사하여 새로운 뷰를 작성하는 것이 가장 쉽습니다.<br/>
                `default_full` 템플릿은 `vendor/codeigniter4/framework/system/Pager/Views` 폴더에 있습니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'default_full',
                'title' => 'vendor/.../default_full.php',
                'href' => '/sample/home/view/Views/Pager/Sample/default_full',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>setSurroundCount()</h2>
            <p>
                현재 페이지 링크의 양쪽에 표시할 링크 수를 지정합니다.
            </p>

            <h2>hasPrevious() & hasNext()</h2>
            <p>
                `setSurroundCount()`에 전달된 값을 기준으로 현재 페이지의 양쪽에 표시할 링크가 있으면 `true`를 반환합니다.
            </p>

            <h2>getPrevious() & getNext()</h2>
            <p>
                현재 페이지를 기준으로 이전 또는 다음 페이지 링크 URL을 반환합니다.
            </p>

            <h2>getFirst() & getLast()</h2>
            <p>
                첫 페이지 또는 마지막 페이지의 링크 URL를 반환합니다.
            </p>

            <h2>links()</h2>

            <p>
                페이지가 매겨진 모든 링크에 대한 정보를 배열로 반환합니다.<br/>
                각 링크 항목은 URI, 페이지, 페이지 활성 여부를 포함합니다.
            </p>
            <pre class="prettyprint">
$link = [
    'active' => false,
    'uri'    => 'http://example.com/foo?page=2',
    'title'  => 1,
];</pre>

                
            <h2>getPageCount()</h2>
            <p>
                총 페이지 수를 반환합니다.
            </p>
        <?=tabler_card_end() ?>
    </div>
</div>
<?= $this->endSection() ?>