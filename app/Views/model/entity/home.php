<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
        <p>
            CodeIgniter는 데이터베이스 계층에서 Entity 클래스를 지원하며, 선택적으로 사용할 수 있습니다.<br/>
            보통 리포지토리 패턴의 일부로 사용되지만 필요에 따라 모델과 함께 직접 사용할 수 있습니다.
        </p>
        <p>
            Entity 클래스는 데이터베이스 단일 행을 나타내는 클래스입니다.<br/>
            Entity 클래스에는 데이터베이스 열을 나타내는 클래스 속성과  해당 행에 대한 비즈니스 논리를 구현하기 위한 추가 메소드로 구성합니다.<br/>
            Entity 클래스의 핵심은 지속 방법에 대해 알지 못하며, 이에 대한 책임은 모델과 저장소 클래스에 부여한다는 것입니다.<br/>
            이렇게하면 객체 저장 방법에 변화가 생겨도 어플리케이션 전체에서 객체가 사용되는 방식을 변경할 필요가 없습니다.<br/>
            이를 이용하면 빠른 프로토 타이핑 단계에서 JSON이나 XML 파일을 사용하여 객체를 저장한 다음 개념이 작동하는것으로 입증되면 객체를 데이터베이스로 쉽게 전환할 수 있습니다.
        </p>
        <p>
            다음 스키마로 구성된 `user` 테이블을 이용하여 User Entity로 작성하여 보겠습니다.

            <pre class="prettyprint">
idx         - integer
name        - string
country     - string
email       - string
password    - string
created_at  - datetime</pre>

            엔티티 클래스를 저장할 기본 위치는 없고, 프레임워크의 기존 디렉토리 구조와 맞지 않기 때문에 `app/Entities` 디렉토리를 만들고, 그 안에 `UserEntity.php`로 엔티티를 작성합니다.<br/>
            다음 예를 확인하십시오.
        </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/model/entity/exam1',
                'href' => '/model/entity/exam1',
            ],
            [
                'id' => 'UserEntity',
                'title' => 'UserEntity.php',
                'href' => '/sample/home/view/Entities/UserEntity',
            ],
            [
                'id' => 'UserModel',
                'title' => 'UserModel.php',
                'href' => '/sample/home/view/Models/Model/Entity/UserModel',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Model/Entity/Exam1',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <p>
                `UserEntity`와 상호 작용을 위해 모델 `UserModel.php`를 작성하였습니다.<br/>
                모델의 모든 활동은 데이터베이스의 `user` 테이블을 사용합니다.<br/>
                `$allowedFields` 속성은 클래스 외부에서 변경하려는 필드를 설정했습니다.<br/>
                 `$returnType`으로 `UserEntity` 클래스를 설정했습니다.<br/>
                 이를 통해 데이터베이스에서 행을 반환하는 모델의 모든 메소드가 일반 객체나 배열 대신 `UserEntity` 클래스의 인스턴스를 반환합니다.
            </p>
            <p>
                `UserEntity` 클래스는 열에 대한 속성을 설정하지 않았지만 public 속성인 것처럼 열에 액세스할 수 있습니다.<br/>
                기본 클래스 `CodeIgniter\Entity`는 데이터베이스에서 개체를 만들거나, 가져온 후 변경된 열을 추적하여 `isset()` 또는 `unset()`으로 속성을 확인하는 기능을 제공합니다.<br/>
                `UserEntity`가 모델의 save() 메소드로 전달되면 자동으로 속성을 읽고 모델의 `$allowedFields` 속성에 나열된 열의 변경 사항을 저장합니다.
            </p>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>빠르게 속성 채우기</h2>

            <p>
                Entity 클래스는 키/값 쌍 배열을 클래스에 전달하여 클래스 속성을 채울 수 있는 `fill()` 메소드를 제공합니다.<br/>
                `fill()` 메소드를 통해 전달된 배열의 모든 속성은 Entity에 설정됩니다.<br/>
                그러나 모델을 통해 저장할 때 `$allowedFields`에 명시된 필드만 실제 데이터베이스에 저장되므로 필드가 잘못 저장되는 것에 대해 걱정할 필요는 없습니다.
            </p>
            <pre class="prettyprint">
$data = $this->request->getPost();

$user = new \App\Entities\UserEntity();
$user->fill($data);
$userModel->save($user);</pre>

            <p>
                생성자를 통하여 데이터를 전달할 수 있습니다.
            </p>
            <pre class="prettyprint">
$data = $this->request->getPost();

$user = new \App\Entities\UserEntity($data);
$userModel->save($user);</pre>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>비즈니스 로직 처리</h2>

            <p>
                Entity 클래스는 `__get()`과 `__set()` 메소드를 이용하여 비즈니스 로직을 처리하거나 데이터를 변환할 수 있습니다.<br/>
                다음은 이를 사용하는 방법에 대한 예입니다
            </p>
            <p>
                엔티티 클래스는 `snake_case`로 작성된 컬럼 이름을 `set`이나  `get` 접두사가 붙은 PascalCase로 변환합니다.<br/>
                이 메소드는 직접 구문을 (예: $user->email) 사용하여 클래스 속성을 설정하거나 검색할 때마다 자동으로 호출됩니다.<br/>
                다른 클래스에서 액세스하지 못하게 하려면 메소드를 `protected`나 `private`로 지정하십시오.<br/>
                `created_at` 클래스 속성은 `setCreatedAt()`와 `getCreatedAt()` 메소드를 통해 액세스됩니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam2Show',
                'title' => '/model/entity/exam2',
                'href' => '/model/entity/exam2',
            ],
            [
                'id' => 'ExtUserEntity',
                'title' => 'ExtUserEntity.php',
                'href' => '/sample/home/view/Entities/ExtUserEntity',
            ],
            [
                'id' => 'ExtUserModel',
                'title' => 'ExtUserModel.php',
                'href' => '/sample/home/view/Models/Model/Entity/ExtUserModel',
            ],
            [
                'id' => 'Exam2',
                'title' => 'Exam2.php',
                'href' => '/sample/home/view/Controllers/Model/Entity/Exam2',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>데이타 매핑</h2>

            <p>
                Entity 클래스의 데이터 매핑 기능을 사용하여 Entity 클래스의 속성과 데이터베이스 컬럼명을 매핑할 수 있습니다.<br/>
                이를 이용하면 스네이크케이스(snake_case)로 작성된 데이터베이스 컬럼명을 클래스의 카멜케이스(camelCase) 속성으로 변환하거나,
                데이터베이스의 컬럼을 엔티티의 다른 속성으로 쉽게 대체 가능합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam3Show',
                'title' => '/model/entity/exam3',
                'href' => '/model/entity/exam3',
            ],
            [
                'id' => 'DataMapEntity',
                'title' => 'DataMapEntity.php',
                'href' => '/sample/home/view/Entities/DataMapEntity',
            ],
            [
                'id' => 'DataMapModel',
                'title' => 'DataMapModel.php',
                'href' => '/sample/home/view/Models/Model/Entity/DataMapModel',
            ],
            [
                'id' => 'Exam3',
                'title' => 'Exam3.php',
                'href' => '/sample/home/view/Controllers/Model/Entity/Exam3',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>