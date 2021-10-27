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
            <h2>함수 선언 바꾸기</h2>

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

        <?= tabler_card_start() ?>
            <h2>매개변수 객체 만들기</h2>

            <p>
                함수의 데이터 항목이 여러개인 경우 데이터 구조 하나로 모아줍니다.<br/>
                데이터 구조로 묶으면 데이터 사이의 관계가 명확해지고 매개변수 수가 줄어듭니다.
            </p>

            <ol>
                <li>적당한 데이터 구조가 아직 마련되어 있지 않다면 새로 만든다.</li>
                <li>테스트한다.</li>
                <li>함수 선언 바꾸기로 새 데이터 구조를 매개변수로 추가한다.</li>
                <li>테스트한다.</li>
                <li>함수 호출 시 새로운 데이터 구조 인스턴스를 넘기도록 수정한다. 하나씩 수정할 때 마다 테스트한다.</li>
                <li>기존 매개변수를 사용하던 코드를 새 데이터 구조의 원소를 사용하도록 바군다.</li>
                <li>다 바꿨다면 기존 매개변수를 제거하고 테스트한다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam5Show',
                    'title' => '/refactoring/basic/exam5',
                    'href' => '/refactoring/basic/exam5',
                ],
                [
                    'id' => 'Exam5',
                    'title' => 'Exam5.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Exam5',
                ],
                [
                    'id' => 'ReftExam5Show',
                    'title' => '/refactoring/basic/refactoring/exam5',
                    'href' => '/refactoring/basic/refactoring/exam5',
                ],
                [
                    'id' => 'ReftExam5',
                    'title' => 'Exam5.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Refactoring/Exam5',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>여러 함수를 클래스로 묶기</h2>

            <p>
                공통의 데이터를 중심으로 긴밀하게 엮여 작동하는 함수들을 클래스 하나로 묶어줍니다.<br/>
                클래스로 묶으면 이 함수들이 공유하는 공통 환경을 더 명확하게 표현할 수 있고, 각 함수에 전달되는 인수를 줄여서 객체 안세서의
                함수 호출을 간결하게 만들 수 있습니다.
            </p>

            <ol>
                <li>함수들이 공유하는 공통 데이터 레코드를 캡슐화한다.</li>
                <li>공통 레코드를 사용하는 함수 각각을 새 클래스로 옮긴다.</li>
                <li>데이터를 조작하는 로직들은 함수로 추출해서 새 클래스로 옮긴다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam6Show',
                    'title' => '/refactoring/basic/exam6',
                    'href' => '/refactoring/basic/exam6',
                ],
                [
                    'id' => 'Exam6',
                    'title' => 'Exam6.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Exam6',
                ],
                [
                    'id' => 'ReftExam6Show',
                    'title' => '/refactoring/basic/refactoring/exam6',
                    'href' => '/refactoring/basic/refactoring/exam6',
                ],
                [
                    'id' => 'ReftExam6',
                    'title' => 'Exam6.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Refactoring/Exam6',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>여러 함수를 변환 함수로 묶기</h2>

            <p>
                여러 함수에서 도출 로직이 반복되어 사용되다면 변환 함수로 묶어준다.<br/>
                변환 함수는 원본 데이터를 입력받아서 피룡한 정보를 모두 도출한 뒤, 각각을 출력 데이터의 필드에 넣어 반환한다.<br/>
                이렇게 해두면 도출 과정을 검토할 일이 생겼을 대 변환 함수만 살펴보면 된다.
            </p>

            <ol>
                <li>변환할 레코드를 입력받아서 값을 그대로 반환하는 변환 함수를 만든다.</li>
                <li>묶을 함수중 하나를 골라서 본문 코드를 변환 함수로 옮기고, 처리 결과를 레코드에 새 필드로 기록한다.</li>
                <li>클라이언트 코드가 이 필드를 사용하도록 수정한다.</li>
                <li>테스트한다.</li>
                <li>나머지 관련 함수도 위 과정에 따라 처리한다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam7Show',
                    'title' => '/refactoring/basic/exam7',
                    'href' => '/refactoring/basic/exam7',
                ],
                [
                    'id' => 'Exam7',
                    'title' => 'Exam7.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Exam7',
                ],
                [
                    'id' => 'ReftExam7Show',
                    'title' => '/refactoring/basic/refactoring/exam7',
                    'href' => '/refactoring/basic/refactoring/exam7',
                ],
                [
                    'id' => 'ReftExam7',
                    'title' => 'Exam7.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Refactoring/Exam7',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>단계 쪼개기</h2>

            <p>
                서로 다른 두 대상을 한꺼번에 다루는 코드를 발견하면 각각을 별개 모듈로 나누는 방법을 모색한다.<br/>
                모듈이 잘 분리되어 있다면 다른 모듈의 상세 내용은 기억하지 못해도 원하는 대로 수정을 끝마칠 수도 있다.
            </p>

            <ol>
                <li>두 번째 단계에 해당하는 코드를 독립 함수로 추출한다.</li>
                <li>테스트한다.</li>
                <li>중간 데이터 구조를 만들어서 앞에서 추출한 함수의 인수로 추가한다.</li>
                <li>테스트한다.</li>
                <li>추출한 두 번째 단계 함수의 매개변수를 하나씩 검토한다.</li>
                <li>그중 첫 번째 단계에서 사용되는 것은 중간 데이터 구조로 옮긴다.</li>
                <li>하나씩 옮길 때마다 테스트한다.</li>
                <li>첫 번째 단계 코드를 함수로 추출하면서 중간 데이터 구조를 반환하도록 만든다.</li>
            </ol>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam8Show',
                    'title' => '/refactoring/basic/exam8',
                    'href' => '/refactoring/basic/exam8',
                ],
                [
                    'id' => 'Exam8',
                    'title' => 'Exam8.php',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Exam8',
                ],
                [
                    'id' => 'ReftExam8Show',
                    'title' => '/refactoring/basic/refactoring/exam8',
                    'href' => '/refactoring/basic/refactoring/exam8',
                ],
                [
                    'id' => 'ReftExam8',
                    'title' => 'Exam8.php(Refactoring)',
                    'href' => '/sample/home/view/Controllers/Refactoring/Basic/Refactoring/Exam8',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>