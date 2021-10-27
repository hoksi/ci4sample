<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <h2>레코드 캡슐화하기</h2>

            <p>
                데이터 레코드와 같은 가변 데이타를 저장할 때 객체를 사용합니다.<br/>
                객체를 사용하면 저장된 값에 대해 무엇을 어떻게 저장했는지 숨길수 있으며(캐슐화), 필드의 이름이 바뀌어도 동일한 메서드를 통해 제공 받을수 있습니다.
            </p>

            <ol>
                <li>레코드를 담은 변수를 캡슐화한다.</li>
                <li>레코드를 감싼 단순한 클래스로 해당 변수의 내용을 교체한다.</li>
                <li>이 클레스에 원본 레코드를 반환하는 접근자도 정의하고, 변수를 캡슐화하는 함수들이 이 접근자를 사용하도록 수정한다.</li>
                <li>테스트한다.</li>
                <li>원본 레코드 대신 새로 정의한 클래스 타입의 객체를 반환하는 함수들을 새로 만든다.</li>
                <li>레코드를 반환하는 예전 함수를 사용하는 코드를 5에서 만든 새 함수를 사용하도록 바꾼다.</li>
                <li>필드에 접근할 때는 객체의 접근자를 사용한다.</li>
                <li>적절한 접근자가 없다면 추가한다.</li>
                <li>한 부분을 바꿀 때마다 테스트한다.</li>
                <li>클래스에서 원본 데이터를 반환하는 접근자와 3에서 검색하기 쉬운 이름을 붙여둔 원본 레코드를 반환하는 함수들을 제거한다.</li>
                <li>테스트한다.</li>
                <li>레코드의 필드도 데이터 구조인 중첩 구조라면 레코드 캡슐화하기와 컬렉션 캡슐화하기를 재귀적으로 적용한다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam1Show',
                    'title' => '/refactoring/capsulation/exam1',
                    'href' => '/refactoring/capsulation/exam1',
                ],
                [
                    'id' => 'Exam1',
                    'title' => 'Exam1.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Capsulation/Exam1',
                ],
                [
                    'id' => 'ReftExam1Show',
                    'title' => '/refactoring/capsulation/refactoring/exam1',
                    'href' => '/refactoring/capsulation/refactoring/exam1',
                ],
                [
                    'id' => 'ReftExam1',
                    'title' => 'Exam1.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Capsulation/Refactoring/Exam1',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>