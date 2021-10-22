<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <h2>폼 검증 튜토리얼</h2>
            
            <p>
                폼 검증을 구현하려면 다음 세 가지가 필요합니다.
            </p>

            <ol>
                <li>폼이 포함된 뷰 파일</li>
                <li>제출(submit) 성공시 표시될 “성공” 메시지가 포함된 뷰 파일</li>
                <li>제출된 데이터를 수신하고 처리하는 컨트롤러 메소드</li>
            </ol>

            <p>
                다음은 폼 검증을 구현한 간단한 튜토리얼입니다.
            </p>

        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/library/validation/exam1',
                'href' => '/library/validation/exam1',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Library/Validation/Exam1',
            ],
            [
                'id' => 'Exam1SignupView',
                'title' => 'signup.php',
                'href' => '/sample/home/view/Views/library/validation/exam1/signup',
            ],
            [
                'id' => 'Exam1SuccessView',
                'title' => 'success.php',
                'href' => '/sample/home/view/Views/library/validation/exam1/success',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <p>
                뷰 파일 `signup.php`은 몇 가지 예외가 있는 표준 웹폼입니다.
            </p>
            <ol>
                <li>
                    폼 헬퍼를 사용하여 `&lt;form&gt;` 태그를 만듭니다.<br/>
                    표준 HTML을 사용하여 `&lt;form&gt;`을 작성할 수 있지만, 헬퍼를 사용하면 구성 파일의 URL을 기반으로 `action` URL이 생성되는 장점이 있습니다.<br/>
                    이렇게 하면 URL이 변경되는 경우에도 어플리케이션의 잘 동작하며, 이식성이 향상됩니다.
                </li>
                <li>
                    폼 상단에 다음 함수 호출이 있습니다.<br/>
                    <pre class="prettyprint">$validation->listErrors()</pre>
                    이 함수는 검증에서 보낸 모든 오류 메시지를 반환합니다. 오류 메시지가 없으면 빈 문자열을 반환합니다.
                </li>
            </ol>
            <p>
                컨트롤러의 `signup()` 메소드는 컨트롤러가 제공하는 유효성 검증 메소드 `validate()`를 사용하여 폼 데이터를 검증합니다.<br/>
                폼 검증 성공 여부에 따라 폼(signup.php) 페이지 또는 성공(success.php) 페이지를 표시합니다.
            </p>
            <p>
                폼 검증에 사용가능한 규칙은 사용자 가이드 <a href="http://ci4doc.cikorea.net/libraries/validation.html#id28" target="_blank">검증(Validation)</a>을 확인 하십시오.
            </p>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>배열 키 검증</h2>

            <p>
                폼 데이터의 배열 항목은 점(.) 표기법을 사용하여 쉽게 검증할 수 있습니다.<br/>
                와일드 카드 `*` 기호를 사용하여 한 수준(one level)의 배열과 일치시킬 수 있습니다.
            </p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam2Show',
                'title' => '/library/validation/exam2',
                'href' => '/library/validation/exam2',
            ],
            [
                'id' => 'Exam2',
                'title' => 'Exam2.php',
                'href' => '/sample/home/view/Controllers/Library/Validation/Exam2',
            ],
            [
                'id' => 'Exam2SignupView',
                'title' => 'signup.php',
                'href' => '/sample/home/view/Views/library/validation/exam2/signup',
            ],
            [
                'id' => 'Exam2SuccessView',
                'title' => 'success.php',
                'href' => '/sample/home/view/Views/library/validation/exam2/success',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>파일 업로드 검증</h2>

            <p>
                업로드된 파일이 비즈니스 요구 사항을 충족하는지 확인하는데 필요한 기본 검사를 수행할 수 있습니다.<br/>
            </p>

            <table class="table table-bordered table-light">
                <colgroup>
                    <col width="14%">
                    <col width="7%">
                    <col width="56%">
                    <col width="24%">
                </colgroup>
                <thead valign="bottom">
                    <tr class="row-odd"><th class="head">Rule</th>
                        <th class="head">Parameter</th>
                        <th class="head">Description</th>
                        <th class="head">Example</th>
                    </tr>
                </thead>
                <tbody valign="top">
                    <tr class="row-even"><td>uploaded</td>
                        <td>Yes</td>
                        <td>매개 변수 이름이 업로드된 파일 이름과 일치하지 않으면 실패합니다.</td>
                        <td>uploaded[field_name]</td>
                    </tr>
                    <tr class="row-odd"><td>max_size</td>
                        <td>Yes</td>
                        <td>업로드된 파일이 max_size[field_name, 2048] 두 번째 매개 변수에 지정된 킬로바이트(KB) 보다
                            크거나 php.ini 구성 파일에 <code><span class="pre">upload_max_filesize</span></code>로 선언된 최대 허용 크기보다 큰 경우
                            실패합니다.</td>
                        <td>max_size[field_name,2048]</td>
                    </tr>
                    <tr class="row-even"><td>max_dims</td>
                        <td>Yes</td>
                        <td>업로드된 이미지의 최대 너비와 높이가 값을 초과하면 실패합니다.  첫 번째 매개 변수는
                            필드 이름입니다. 두 번째는 너비이고 세 번째는 높이입니다.
                            파일을 이미지로 결정할 수없는 경우에도 실패합니다.</td>
                        <td>max_dims[field_name,300,150]</td>
                    </tr>
                    <tr class="row-odd"><td>mime_in</td>
                        <td>Yes</td>
                        <td>파일의 MIME 유형이 매개 변수에 나열된 유형이 아닌 경우 실패합니다.</td>
                        <td>mime_in[field_name,image/png,image/jpg]</td>
                    </tr>
                    <tr class="row-even"><td>ext_in</td>
                        <td>Yes</td>
                        <td>파일 확장자가 매개 변수에 나열된 확장자가 아니면 실패합니다.</td>
                        <td>ext_in[field_name,png,jpg,gif]</td>
                    </tr>
                    <tr class="row-odd"><td>is_image</td>
                        <td>Yes</td>
                        <td>파일이 MIME 유형에 따라 이미지라고 판단할 수 없으면 실패합니다.</td>
                        <td>is_image[field_name]</td>
                    </tr>
                </tbody>
            </table>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam3Show',
                'title' => '/library/validation/exam3',
                'href' => '/library/validation/exam3',
            ],
            [
                'id' => 'Exam3',
                'title' => 'Exam3.php',
                'href' => '/sample/home/view/Controllers/Library/Validation/Exam3',
            ],
            [
                'id' => 'Exam3SignupView',
                'title' => 'signup.php',
                'href' => '/sample/home/view/Views/library/validation/exam3/signup',
            ],
            [
                'id' => 'Exam3SuccessView',
                'title' => 'success.php',
                'href' => '/sample/home/view/Views/library/validation/exam3/success',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>사용자 정의 오류 메시지 설정</h2>

            <p>
                폼 검증시 각 필드의 오류 메시지를 사용자 정의할 수 있습니다.<br/>
                사용자 정의되지 않은 오류 메시지는 기본값이 사용됩니다.<br/>
                검증된 필드의 값을 메시지에 포함하고 싶다면 <span class="text-red">`{field}, {param}, {value}`</span> 태그를 추가합니다.
            </p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam4Show',
                'title' => '/library/validation/exam4',
                'href' => '/library/validation/exam4',
            ],
            [
                'id' => 'Exam4',
                'title' => 'Exam4.php',
                'href' => '/sample/home/view/Controllers/Library/Validation/Exam4',
            ],
            [
                'id' => 'Exam4SignupView',
                'title' => 'signup.php',
                'href' => '/sample/home/view/Views/library/validation/exam4/signup',
            ],
            [
                'id' => 'Exam4SuccessView',
                'title' => 'success.php',
                'href' => '/sample/home/view/Views/library/validation/exam1/success',
            ],
        ]) ?>
    </div>
</div>
<?= $this->endSection() ?>