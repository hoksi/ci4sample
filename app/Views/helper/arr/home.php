<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                복잡한 배열 사용을 단순화하기 위해 여러 기능을 제공합니다.<br/>
                사용법이 PHP가 제공하는 함수보다 단순하지 않다면 기존 함수를 복제 하지 않습니다.<br/>
                이 헬퍼는 다음 코드를 사용하여 로드합니다.
            </p>
            <pre class="prettyprint">helper('array');</pre>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>dot_array_search(string $search, array $values)</h2>
            
            <p>
                점 표기법을 사용하여 특정 키의 배열을 검색합니다.
                ‘*’ 와일드 카드를 사용할 수 있습니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/helper/arr/exam1',
                'href' => '/helper/arr/exam1',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Helper/Arr/Exam1',
            ],
            [
                'id' => 'Exam1View',
                'title' => 'exam1.php',
                'href' => '/sample/home/view/Views/helper/arr/exam1',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>array_deep_search($key, array $array)</h2>

            <p>
                불확실한 깊이의 배열에 키 값이 있는 요소의 값을 반환합니다.
            </p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam2Show',
                'title' => '/helper/arr/exam2',
                'href' => '/helper/arr/exam2',
            ],
            [
                'id' => 'Exam2',
                'title' => 'Exam2.php',
                'href' => '/sample/home/view/Controllers/Helper/Arr/Exam2',
            ],
            [
                'id' => 'Exam2View',
                'title' => 'exam2.php',
                'href' => '/sample/home/view/Views/helper/arr/exam2',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>array_sort_by_multiple_keys(array &$array, array $sortColumns)</h2>

            <p>
                하나 이상의 키 값을 기준으로 다차원 배열의 요소를 정렬합니다.
            </p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam3Show',
                'title' => '/helper/arr/exam3',
                'href' => '/helper/arr/exam3',
            ],
            [
                'id' => 'Exam3',
                'title' => 'Exam3.php',
                'href' => '/sample/home/view/Controllers/Helper/Arr/Exam3',
            ],
            [
                'id' => 'Exam3View',
                'title' => 'exam3.php',
                'href' => '/sample/home/view/Views/helper/arr/exam3',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>array_flatten_with_dots(iterable $array[, string $id = ''])</h2>

            <p>
                점(.)을 키의 구분 기호로 사용하여 다차원 배열을 단일 키-값으로 이루어진 1차원 배열로 변환합니다.
            </p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam4Show',
                'title' => '/helper/arr/exam4',
                'href' => '/helper/arr/exam4',
            ],
            [
                'id' => 'Exam4',
                'title' => 'Exam4.php',
                'href' => '/sample/home/view/Controllers/Helper/Arr/Exam4',
            ],
            [
                'id' => 'Exam4View',
                'title' => 'exam4.php',
                'href' => '/sample/home/view/Views/helper/arr/exam4',
            ],
        ]) ?>
    </div>
</div>
<?= $this->endSection() ?>