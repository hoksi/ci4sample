<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <h2>함수 추출하기</h2>

            <p>
                코드 조각을 찾아 무슨일을 하는지 파악한 다음, 독립된 함수로 추출하고 목적에 맞는 이름을 붙인다.<br/>
                코드가 무슨 일을 하는지 파악하는 데 한참이 걸리다면 그 부분을 함수로 추출한 뒤 `무슨 일`에 걸맞는 이름을 짓는다.
            </p>

            <ol>
                <li>함수를 새로 만들고 목적을 잘 드러내는 이름을 붙인다.(어떻게가 아닌 무엇을 기준으로)</li>
                <li>추출할 코드를 원본 함수에서 복사하여 새 함수에 붙여넣는다.</li>
                <li>추출한 코드 중 원본 함수의 지역 변수를 참조하거나 추출한 함수의 유효범위를 벗어나는 변수는 없는지 검사한다.<br/> 있다면 매개변수로 전달한다.</li>
                <li>원본 함수에서 추출한 코드 부분을 새로 만든 함수를 호출하는 문장으로 바꾼다.</li>
                <li>테스트한다.</li>
                <li>다른 코드에 방금 추출한 것과 같거나 비슷한 코드가 없는지 살핀다.<br/> 있다면 방금 추출한 새 함수를 호출하도록 바꿀지 검토한다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam1Show',
                    'title' => '/refactoring/basic/exam1',
                    'href' => '/refactoring/basic/exam1',
                ],
                [
                    'id' => 'Exam1',
                    'title' => 'Exam1.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Exam1',
                ],
                [
                    'id' => 'ReftExam1Show',
                    'title' => '/refactoring/basic/refactoring/exam1',
                    'href' => '/refactoring/basic/refactoring/exam1',
                ],
                [
                    'id' => 'ReftExam1',
                    'title' => 'Exam1.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Refactoring/Exam1',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>함수 인라인하기</h2>

            <p>
                `함수 추출하기`에서는 코드가 명료해지고 이해하기 쉽도록 코드의 일부를 목적이 분명히 들어나는 이름의 함수로 사용하기를 권장한다.<br/>
                하지만 때로는 함수 본문이 이름만큼 명확하거나 이름만큼 깔끔하게 리펙터링될 때도 있다. 이럴때는 함수를 과감히 제거하고 인라인한다.<br/>
            </p>

            <ol>
                <li>다형 메서드인지 확인한다.</li>
                <li>인라인할 함수를 호출하는 곳을 모두 찾는다.</li>
                <li>각 호출문을 함수 본문으로 교체한다.</li>
                <li>하나씩 교체할 때마다 테스트한다.</li>
                <li>함수를 삭제한다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam2Show',
                    'title' => '/refactoring/basic/exam2',
                    'href' => '/refactoring/basic/exam2',
                ],
                [
                    'id' => 'Exam2',
                    'title' => 'Exam2.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Exam2',
                ],
                [
                    'id' => 'ReftExam2Show',
                    'title' => '/refactoring/basic/refactoring/exam2',
                    'href' => '/refactoring/basic/refactoring/exam2',
                ],
                [
                    'id' => 'ReftExam2',
                    'title' => 'Exam2.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Refactoring/Exam2',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>변수 추출하기</h2>

            <p>
                표현식이 너무 복잡하여 이해하기 어려울 때 지역 변수를 활용하여 표현식을 쪼개 관리하기 쉽게 만듭니다.<br/>
                추가한 변수는 복잡한 로직을 쉽게 만들기도 하지만 디버깅에도 도움이 됩니다.
            </p>

            <ol>
                <li>추출하려는 표현식에 부작용(Side effect)이 없는지 확인하다.</li>
                <li>지역 변수를 하나 선언하고 이름을 붙일 표현식의 복제본을 대입한다.</li>
                <li>원본 표현식을 새로 만든 변수로 교체한다.</li>
                <li>테스트한다.</li>
                <li>표현식을 여러 곳에서 사용한다면 각각을 새로 만든 변수로 교체한다.<br/>하나 교체할 때마다 테스트한다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam3Show',
                    'title' => '/refactoring/basic/exam3',
                    'href' => '/refactoring/basic/exam3',
                ],
                [
                    'id' => 'Exam3',
                    'title' => 'Exam3.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Exam3',
                ],
                [
                    'id' => 'ReftExam3Show',
                    'title' => '/refactoring/basic/refactoring/exam3',
                    'href' => '/refactoring/basic/refactoring/exam3',
                ],
                [
                    'id' => 'ReftExam3',
                    'title' => 'Exam3.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Refactoring/Exam3',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>변수 인라인하기</h2>

            <p>
                변수 이름이 표현식과 다를 바 없다면 그 변수는 인라인하는 것이 좋습니다.
            </p>

            <ol>
                <li>대입문의 우변(표현식)에서 부작용(Side effect)이 없는지 확인하다.</li>
                <li>이 변수를 가장 처음 사용하는 코드를 찾아서 대입문 우변의 코드로 바꾼다.</li>
                <li>테스트한다.</li>
                <li>변수를 사용하는 부분을 모두 교체할 때까지 이 과정을 반복한다.</li>
                <li>변수와 대입문을 삭제한다.</li>
                <li>테스트한다.</li>
            </ol>

            <table>
                <tr>
                    <td style="width:50%;"><pre class="prettyprint">function moreThan100($anOrder)
{
    $basePrice = $anOrder['basePrice'];
    return ($basePrice > 100);
}</pre>
                    </td>
                    <td> => </td>
                    <td style="width:50%;"><pre class="prettyprint">
function moreThan100($anOrder)
{
    return ($anOrder['basePrice'] > 100);

}</pre>
                    </td>
                </tr>
            </table>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>함수 이름 바꾸기</h2>

            <p>
                함수 이름이 좋으면 함수 호출문만 보고도 무슨 일을 하는지 파악할 수 있습니다.<br/>
                잘못된 함수 이름을 발견하고 그보다 더 이해하기 쉬운 이름이 떠오르면 즉시 바꿉니다.
            </p>

            <table>
                <tr>
                    <td style="width:50%;"><pre class="prettyprint">
function circum($radius)
{
    return 2 * pi() * $radius;
}</pre>
                    </td>
                    <td> => </td>
                    <td style="width:50%;"><pre class="prettyprint">
function circumference($radius)
{
    return 2 * pi() * $radius;
}</pre>
                    </td>
                </tr>
            </table>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>변수 캡슐화하기</h2>

            <p>
                유효 범위가 넓은 전역 변수는 함수로 캡슐화 하십시오.<br/>
                전역 변수 접근을 함수로 캡슐화하여 독점하면 데이터의 변경 및 사용하는 코드를 감시할 수 있으며, 데이터 변경 전 검증이나 변경 후 추가 로직을 쉽게 넣을 수 있습니다.
            </p>

            <ol>
                <li>변수로의 접근과 갱신을 전담하는 캡슐화 함수들을 만든다.</li>
                <li>변수를 직접 참조하던 부분을 모두 적절한 캡슐화 함수 호출로 바군다. 하나씩 바꿀 때마다 테스트한다.</li>
                <li>변수의 접근 범위를 제한한다.</li>
                <li>테스트한다.</li>
                <li>변수 값이 레코드라면 `레코드 캡슐화하기`를 적용할 지 고려해본다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam4Show',
                    'title' => '/refactoring/basic/exam4',
                    'href' => '/refactoring/basic/exam4',
                ],
                [
                    'id' => 'Exam4',
                    'title' => 'Exam4.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Exam4',
                ],
                [
                    'id' => 'ReftExam4Show',
                    'title' => '/refactoring/basic/refactoring/exam4',
                    'href' => '/refactoring/basic/refactoring/exam4',
                ],
                [
                    'id' => 'ReftExam4',
                    'title' => 'Exam4.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Refactoring/Exam4',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>변수 이름 바꾸기</h2>

            <p>
                함수 이름과 마찬가지로 변수 이름도 많은 것을 설명해줍니다.<br/>
                개발을 진행하다 잘못 지어진 변수 이름을 발견한다면 그 목적에 맞는 이름으로 변수명을 바꿔줍니다.
            </p>

            <ol>
                <li>폭넓게 쓰이는 변수라면 변수 캡슐화하기를 고려한다.</li>
                <li>이름을 바꿀 변수를 참조하는 곳을 모두 찾아서, 하나씩 변경한다.</li>
                <li>테스트한다.</li>
            </ol>
        <?= tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>