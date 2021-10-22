<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                대부분의 경우 데이터베이스 검색 결과는 양이 많으므로 페이지 단위로 나누어 출력합니다.<br/>
                모델 클래스에 내장된 `paginate()` 메소드와 `pager`를 사용하면 이를 간단히 처리할 수 있습니다.
            </p>
        <?= tabler_card_end() ?>

        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/model/pagination/exam1',
                'href' => '/model/pagination/exam1',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Model/Pagination/Exam1',
            ],
            [
                'id' => 'Exam1View',
                'title' => 'exam1.php',
                'href' => '/sample/home/view/Views/model/pagination/exam1',
            ],
        ]) ?>
        <?= tabler_card_start() ?>
            <p>
                현재 페이지는 `$_GET['page']` 변수를 통해 전달됩니다.(ex: exam1?page=1)<br/>
                `$model->paginate(10)`은 데이터베이스의 검색 결과이며, 페이지당 10개의 데이터를 반환합니다.<br/>
                `$model->pager`는 모델이 제공하는 `Pager`인스턴스 입니다.<br/>
                뷰에 페이지 링크를 표시할 때는 `Pager`인스턴스의 `links()` 메소드를 사용합니다.<br/>
                더 간단한 출력을 선호한다면 `simpleLinks()` 메소드를 사용하십시오.
            </p>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>여러 결과 페이지네이션</h2>

            <p>
                서로 다른 두 개의 결과 집합에 대한 페이지 링크가 필요하다면, 그룹 이름을 `paginate()` 메소드에 전달합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam2Show',
                'title' => '/model/pagination/exam2',
                'href' => '/model/pagination/exam2',
            ],
            [
                'id' => 'Exam2',
                'title' => 'Exam2.php',
                'href' => '/sample/home/view/Controllers/Model/Pagination/Exam2',
            ],
            [
                'id' => 'Exam2View',
                'title' => 'exam2.php',
                'href' => '/sample/home/view/Views/model/pagination/exam2',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>페이지 수동 설정</h2>

            <p>
                현재 페이지를 지정해야 하는 경우 세 번째 인수로 페이지를 지정할 수 있습니다.<br/>
                기본으로 제공하는 `$_GET` 변수를 사용하지 않고 표시할 페이지를 제어할 때 유용합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam3Show',
                'title' => '/model/pagination/exam3',
                'href' => '/model/pagination/exam3',
            ],
            [
                'id' => 'Exam3',
                'title' => 'Exam3.php',
                'href' => '/sample/home/view/Controllers/Model/Pagination/Exam3',
            ],
            [
                'id' => 'Exam3View',
                'title' => 'exam1.php',
                'href' => '/sample/home/view/Views/model/pagination/exam1',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>페이지의 URI 세그먼트 지정</h2>

            <p>
                네 번째 인수로 사용할 세그먼트 번호를 지정하여 `$_GET` 변수대신 URI 세그먼트를 사용할 수 있습니다.<br/>
                세그먼트 값은 URI 세그먼트 수에 1을 더한 값보다 클 수 없습니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam4Show',
                'title' => '/model/pagination/exam4/index',
                'href' => '/model/pagination/exam4/index',
            ],
            [
                'id' => 'Exam4',
                'title' => 'Exam4.php',
                'href' => '/sample/home/view/Controllers/Model/Pagination/Exam4',
            ],
            [
                'id' => 'Exam4View',
                'title' => 'exam1.php',
                'href' => '/sample/home/view/Views/model/pagination/exam1',
            ],
        ]) ?>

</div>
<?= $this->endSection() ?>