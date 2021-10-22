<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                모델을 통한 데이터 유효성 검사는 코드를 복제하지 않고 데이터를 일관되게 유지하는 좋은 방법입니다.<br/>
                데이터 유효성 검사를 설정하면 모델 클래스는 insert(), update(), save() 메소드를 사용하여 데이터를 데이터베이스에 저장하기 전에 자동으로 검증합니다.
            </p>
            <p>
                이를 위한 첫 번째 단계는 유효성 검사를 적용할 필드와 규칙으로 `$validationRules` 클래스 속성을 채우는 것입니다.<br/>
                Codeigniter가 제공하는 기본 오류 메시지가 아닌 사용자 지정 오류 메시지가 사용하고 싶다면 `$validationMessages` 속성을 사용하십시오.
            </p>
            <p>
                `$validationRules` 속성을 지정하면 `insert()`, `update()`, `save()` 메소드를 호출할 때마다 데이터의 유효성을 검사합니다.<br/>
                데이터 유효성 검사를 실패하면 모델은 `false`를 반환합니다.<br/>
                유효성 검사 오류를 확인하고 싶다면 `errors()` 메소드를 사용하십시오.
            </p>
            <p>
                자리표시자를 사용하면 모델에 전달된 데이터를 기반으로 검증 규칙의 일부를 쉽게 바꿀수 있습니다.<br/>
                자리표시자는 중괄호로 묶인 필드의 이름(Ex: {idx})이며, 데이터 검증시 이름과 일치하는 필드의 값으로 대체됩니다.<br/>
                다음 예에서 이메일은 `is_unique` 검증 규칙을 사용하고 있습니다.<br/>
                user 정보 수정시 자리표시자를 사용하지 않을 경우 `is_unique` 검증 규칙에 의해 이메일 중복 오류가 발생합니다.<br/>
                `is_unique` 검증 규칙에 자리표시자 `{idx}`를 사용하면 이와 일치 하는 idx를 가진 행을 제외하고 데이터베이스에서 고유한 이메일인지 확인합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'UserModel',
                'title' => 'UserModel.php',
                'href' => '/sample/home/view/Models/Model/Validation/UserModel',
            ],
            [
                'id' => 'UserShow',
                'title' => '/model/validation/user',
                'href' => '/model/validation/user',
            ],
            [
                'id' => 'User',
                'title' => 'User.php',
                'href' => '/sample/home/view/Controllers/Model/Validation/User',
            ],
            [
                'id' => 'UserIndexView',
                'title' => 'index.php',
                'href' => '/sample/home/view/Views/model/validation/user/index',
            ],
            [
                'id' => 'UserSaveView',
                'title' => 'save.php',
                'href' => '/sample/home/view/Views/model/validation/user/save',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <p>
                모델에는 속성을 통하지 않고 유효성 검사 규칙과 사용자 지정 메시지를 설정할 수 있도록 다음 메소드를 지원합니다.
            </p>

            <h2>setValidationRule($field, $fieldRules)</h2>

            <p>
                필드별 유효성 검사 규칙을 설정합니다.
            </p>
            <pre class="prettyprint">
$fieldName = 'username';
$fieldRules = 'required|alpha_numeric_space|min_length[3]';

$model->setValidationRule($fieldName, $fieldRules);</pre>

            <h2>setValidationRules($validationRules)</h2>

            <p>
                유효성 검사 규칙을 설정합니다.
            </p>
            <pre class="prettyprint">
$validationRules = [
    'username' => 'required|alpha_numeric_space|min_length[3]',
    'email' => [
        'rules'  => 'required|valid_email|is_unique[users.email]',
        'errors' => [
            'required' => 'We really need your email.',
        ],
    ],
];
$model->setValidationRules($validationRules);</pre>

            <h2>setValidationMessage($field, $fieldMessages)</h2>

            <p>
                필드별 사용자 지정 오류 메시지를 설정합니다.
            </p>
            <pre class="prettyprint">
$fieldName = 'name';
$fieldValidationMessage = [
    'required'   => 'Your name is required here',
];
$model->setValidationMessage($fieldName, $fieldValidationMessage);</pre>
            
            <h2>setValidationMessage($field, $fieldMessages)</h2>

            <p>
                사용자 지정 오류 메시지를 설정합니다.
            </p>
            <pre class="prettyprint">
$fieldValidationMessage = [
    'name' => [
        'required'   => 'Your baby name is missing.',
        'min_length' => 'Too short, man!',
    ],
];
$model->setValidationMessages($fieldValidationMessage);</pre>

            <h2>
                유효성 검사 규칙 검색
            </h2>

            <p>
                `validationRules` 속성을 통하여 모델에 설정된 유효성 검사 규칙을 검색할 수 있습니다.
            </p>
            <pre class="prettyprint">$rules = $model->validationRules;</pre>

            <p>
                `getValidationRules` 메서드를 사용하여 해당 규칙의 하위 집합만 검색할 수 있습니다.<br />
                `$options` 매개 변수를 필요로 하며, 값은 “except” 또는 “only” 키를 가진 배열입니다.
            </p>
            <pre class="prettyprint">
// "username" 규칙을 제외한 모든 규칙 검색
$rules = $model->getValidationRules(['except' => ['username']]);
// "city", "state" 규칙 검색
$rules = $model->getValidationRules(['only' => ['city', 'state']]);</pre>
        <?= tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>