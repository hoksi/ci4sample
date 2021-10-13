<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <h2>모델</h2>

            <p>데이터베이스 테이블과 상호 작용(레코드 찾기, 업데이트, 삭제등)하는 많은 표준 메소드가 기본 제공됩니다.</p>

            <h2>모델에 액세스하기</h2>

            <p>
                모델은 일반적으로 `app/Models` 디렉토리에 저장되며, `namespace App\Models`와 같이 디렉토리의 위치와 일치하는 네임스페이스를 가집니다.<br/>
                새 인스턴스를 만들거나 `model()` 헬퍼 함수를 사용하여 클래스 내 모델에 액세스할 수 있습니다.
            </p>
            <pre class="prettyprint">
// 새 클래스를 수동으로 생성
$userModel = new \App\Models\UserModel();

// 모델 헬퍼 함수로 새 클래스 생성
$userModel = model('App\Models\UserModel', false);

// 모델의 공유 인스턴스 생성
$userModel = model('App\Models\UserModel');

// custom DB 연결
// 네임스페이스가 제공되지 않으면 시스템이 알고 있는
// 모든 네임스페이스를 검색하여 UserModel 클래스를 찾습니다.
$db = db_connect('custom');
$userModel = model('UserModel', true, $db);</pre>

            <h2>CodeIgniter 모델</h2>

            <p>CodeIgniter는 다음과 같은 몇 가지 유용한 기능을 제공하는 모델 클래스를 제공합니다.</p>

            <ul>
                <li>자동 데이터베이스 연결</li>
                <li>기본적인 CRUD 메소드</li>
                <li>모델내 검증(validation)</li>
                <li>자동 페이지네이션(pagination)</li>
                <li>등등…</li>
            </ul>

            <p>이 클래스는 자체 모델을 구축할 수있는 견고한 기반을 제공하므로 어플리케이션의 모델 계층을 신속하게 구축할 수 있습니다.</p>

            <h2>모델 만들기</h2>

            <p>
                CodeIgniter의 모델을 활용하려면 CodeIgniter\Model을 확장하는 새로운 모델 클래스를 만들면됩니다.<br />
                모델에서 제공하는 CRUD 기능을 사용하려면 `$table`과 `$primaryKey` 속성을 포함하여 몇가지 속성을 반드시 지정하여야 합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'FirstModel',
                'title' => 'FirstModel.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/FirstModel',
            ],
            [
                'id' => 'CrudModel',
                'title' => 'CrudModel.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/CrudModel',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <p>
                모델에 기본 설정외에 필요한 추가 설정이 있다면 경우 `initialize()` 메소드를 통해 추가 단계를 수행할 수 있습니다.<br/>
                아래 예는 인증 관련 모델을 확장한 후 추가 설정합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'InitModel',
                'title' => 'InitModel.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/InitModel',
            ],
            [
                'id' => 'UserAuthModel',
                'title' => 'UserAuthModel.php',
                'href' => '/sample/home/view/Models/Authentication/Models/UserAuthModel',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>데이터 찾기</h2>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'FindShow',
                'title' => '/model/cimodel/find',
                'href' => '/model/cimodel/find',
            ],
            [
                'id' => 'Find',
                'title' => 'Find.php',
                'href' => '/sample/home/view/Controllers/Model/Cimodel/Find',
            ],
            [
                'id' => 'FindView',
                'title' => 'find.php',
                'href' => '/sample/home/view/Views/model/cimodel/find',
            ],
            [
                'id' => 'FindMyTableModel',
                'title' => 'MyTableModel.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/MyTableModel',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>데이터 저장</h2>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'SaveShow',
                'title' => '/model/cimodel/save',
                'href' => '/model/cimodel/save',
            ],
            [
                'id' => 'Save',
                'title' => 'Save.php',
                'href' => '/sample/home/view/Controllers/Model/Cimodel/Save',
            ],
            [
                'id' => 'SaveView',
                'title' => 'save.php',
                'href' => '/sample/home/view/Views/model/cimodel/save',
            ],
            [
                'id' => 'SaveMyTableModel',
                'title' => 'MyTableTmpModel.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/MyTableTmpModel',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>데이터 삭제</h2>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'DeleteShow',
                'title' => '/model/cimodel/delete',
                'href' => '/model/cimodel/delete',
            ],
            [
                'id' => 'Delete',
                'title' => 'Delete.php',
                'href' => '/sample/home/view/Controllers/Model/Cimodel/Delete',
            ],
            [
                'id' => 'DeleteView',
                'title' => 'delete.php',
                'href' => '/sample/home/view/Views/model/cimodel/delete',
            ],
            [
                'id' => 'DeleteMyTableModel',
                'title' => 'MyTableTmpModel.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/MyTableTmpModel',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>논리 삭제(Soft delete)</h2>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'SoftDeleteShow',
                'title' => '/model/cimodel/softDelete',
                'href' => '/model/cimodel/softDelete',
            ],
            [
                'id' => 'SoftDelete',
                'title' => 'SoftDelete.php',
                'href' => '/sample/home/view/Controllers/Model/Cimodel/SoftDelete',
            ],
            [
                'id' => 'SoftDeleteView',
                'title' => 'softDelete.php',
                'href' => '/sample/home/view/Views/model/cimodel/softDelete',
            ],
            [
                'id' => 'SoftDeleteMyTableModel',
                'title' => 'SoftDeleteMyTableModel.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/SoftDeleteMyTableModel',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>쿼리 빌더 사용</h2>

            <p>
                모델은 쿼리 빌더 공유 인스턴스에 액세스할 수 있으며, 동일한 체인 호출을 통하여 쿼리 빌더 메소드와 CRUD 메소드를 함께 사용할 수 있습니다.
            </p>
            <pre class="prettyprint">
$users = $userModel->where('status', 'active')
    ->orderBy('last_login', 'asc')
    ->findAll();</pre>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>런타임 리턴 유형 변경</h2>

            <p>
                클래스 `$returnType` 속성을 사용하여 `find*()` 메소드가 리턴하는 데이터 형식을 지정할 수 있습니다.<br/>
                하지만 기본적으로 지정한 형식과 다른 데이터 형식이 필요한 경우도 있습니다.<br/>
                이를 수행하기 위해 다음 메소드를 제공합니다.
            </p>

            <h2>asArray()</h2>

            <p>
                `find*()` 메소드의 데이터를 연관 배열로 리턴합니다.
            </p>
            <pre class="prettyprint">$users = $userModel->asArray()->where('status', 'active')->findAll();</pre>

            <h2>asObject()</h2>

            <p>
                `find*()` 메소드의 데이터를 표준 객체 또는 사용자 정의 클래스 인스턴스로 반환합니다.
            </p>
            <pre class="prettyprint">
// Return as standard objects
$users = $userModel->asObject()->where('status', 'active')->findAll();

// Return as custom class instances
$users = $userModel->asObject('User')->where('status', 'active')->findAll();</pre>
            
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>많은 양의 데이터 처리</h2>

            <p>
                많은 양의 데이터를 처리해야 할 때 메모리가 부족해질 위험이 있습니다.<br/>
                이를 방지하기 위해 chunk() 메소드를 사용하여 작업을 수행하면 작은 크기의 데이터 청크를 얻을 수 있습니다.<br/>
                첫 번째 매개 변수는 단일 청크의 크기이고, 두 번째 매개 변수는 각 청크 데이터 행에 대해 호출될 클로저(Closure)입니다.
            </p>
            <p>
                이 방법은 크론 작업, 데이터 내보내기(export) 또는 기타 대규모 작업에 적합합니다.
            </p>
            <pre class="prettyprint">
$userModel->chunk(100, function ($data) {
    // do something.
    // $data is a single row of data.
});</pre>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>데이터베이스 연결</h2>

            <p>
                클래스가 처음 인스턴스화될 때 데이터베이스 연결에 대한 정보가 생성자에 전달되지 않으면, 구성(Config)에 설정한 기본 데이터베이스 그룹이 자동으로 연결됩니다.<br/>
                `DBGroup` 속성을 클래스에 추가하면 모델별로 연결에 사용할 그룹을 지정할 수 있습니다.<br/>
                이 속성은 모델 내에서 `$this->db`에 대한 참조가 지정된 DB에 연결되도록 합니다.<br/>
                다음 예는 데이터베이스 구성 파일에 정의된 “group_name”으로 DB 연결을 바꿉니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'DbGroupModel',
                'title' => 'DbGroupModel.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/DbGroupModel',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>모델 구성</h2>

            <p>
                다음은 모델을 원활하게 작동하도록 설정할 수 있는 구성 옵션입니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Config',
                'title' => 'Config.php',
                'href' => '/sample/home/view/Models/Model/Cimodel/Config',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>$table</h2>

            <p>모델을 통하여 조작하고자 하는 데이터베이스 테이블을 지정합니다. 이 속성은 쿼리빌더 및 모델의 CRUD 메소드에만 적용됩니다.</p>

            <h2>$primaryKey</h2>

            <p>
                테이블에서 레코드를 고유하게 식별하는 열(column)의 이름입니다.<br/>
                반드시 데이터베이스에 지정된 기본(primary) 키와 일치 할 필요는 없으며, find()와 같은 메소드에서 지정된 값과 일치하는 열을 찾을때 사용합니다.<br/>
                <span class="text-red">Note : 모든 기능이 예상대로 작동하려면 모든 모델에 기본(primary) 키가 지정되어 있어야 합니다.</span>
            </p>

            <h2>$useAutoIncrement</h2>

            <p>
                자동 증가(auto-increment) 기능을 사용할지 여부를 지정합니다.<br/>
                `false`로 설정하면 테이블의 모든 레코드에 대해 기본 키 값을 제공해야 합니다.<br/>
                이 기능은 1:1 관계를 구현하거나 모델에 UUID를 사용하려는 경우에 유용합니다.
            <br/>

            <h2>$returnType</h2>

            <p>
                모델의 CRUD 메소드는 Result 객체 대신 결과 데이터를 자동으로 반환합니다.<br/>
                이 설정을 통해 반환되는 데이터 유형을 정의할 수 있습니다.<br/>
                유효한 값은 ‘array’, ‘object’ 또는 `getCustomResultObject()` 메소드와 함께 사용할 수 있는 클래스명입니다.
            </p>

            <h2>$useSoftDeletes</h2>

            <p>
                `true`이면 `delete*` 메소드 호출은 실제로 행을 삭제하는 대신 데이터베이스의 `deleted_at` 필드에 `$dateFormat`으로 지정된 값을 설정합니다.<br/>
                이를 통해 “휴지통”기능을 구현하거나 데이터 흐름 추적할 수 있는 보안기능을 구현할 수 있습니다.<br/>
                `true`인 경우, `find*` 메소드는 삭제되지 않은 행만 리턴합니다.<br/>
                모델의 `$dateFormat` 설정에 따라 데이터베이스에 타입이 `DATETIME` 또는 `INTEGER`인 `deleted_at` 필드가 필요합니다.<br/>
                기본적으로 설정된 필드 이름은 `deleted_at`이지만, `$deletedField` 속성을 사용하여 원하는 이름으로 수정할 수 있습니다.
            </p>

            <h2>$allowedFields</h2>

            <p>
                이 속성은 `save`, `insert`, `update` 메소드를 통하여 전달받을 필드 이름으로 구성된 배열입니다.<br/>
                전달된 데이터중 여기에 명시되지 않은 필드명은 삭제됩니다.<br/>
                Form을 통하여 입력된 모든 데이터를 DB에 모두 입력되는 것을 방지하여 대량 할당 취약점이 발생하지 않도록 보호할 수 있습니다.
            </p>

            <h2>$useTimestamps</h2>

            <p>
                이 속성이 `true`면 모든 `INSERT` 및 `UPDATE`에 자동으로 `$dateFormat`에 지정된 형식으로 현재 시간을 설정합니다.<br/>
                이를 위해 테이블에 ‘created_at’와 ‘updated_at’라는 필드가 있어야 합니다.
            </p>

            <h2>$createdField</h2>

            <p>
                데이터 레코드 작성 타임스탬프를 유지하기 위해 사용하는 데이터베이스 필드를 지정합니다.<br/>
                기본 값은 `created_at` 이며, `$useTimestamps`가 `true` 업데이트가 되지않도록 하려면 비워 둡니다.
            </p>

            <h2>$updatedField</h2>

            <p>
                데이터 레코드 업데이트 타임스탬프를 유지하기 위해 사용할 데이터베이스 필드를 지정합니다.<br/>
                기본 값은 `updated_at` 이며, `$useTimestamps`가 `true`여도 업데이트가 되지않도록 하려면 비워 둡니다.
            </p>

            <h2>$dateFormat</h2>

            <p>
                `$useTimestamps`, `$useSoftDeletes`와 함께 동작하며, 올바른 유형의 날짜 값이 데이터베이스에 INSERT되도록 합니다.<br/>
                기본 값은 `datetime` 이며, `datetime`, `date`, `int`중 하나로 수정 가능합니다.<br/>
                ‘useSoftDeletes’, ‘useTimestamps’에 유효하지 않거나 잘못된 dateFormat을 사용하면 예외가 발생합니다.
            </p>

            <h2>$validationRules</h2>

            <p>
                유효성 검사 규칙 배열 또는 유효성 검사 그룹 이름
            </p>

            <h2>$validationMessages</h2>

            <p>유효성 검증시 사용할 사용자 정의 오류 메시지 배열</p>

            <h2>$skipValidation</h2>

            <p>
                모든 inserts와 updates의 유효성 검사 여부를 결정합니다. 기본값은 `false`이며 데이터의 유효성 검사를 항상 시도합니다.<br/>
                모델이 유효성을 검사하지 않도록 하려면 `true`로 변경합니다.
            </p>

            <h2>$beforeInsert, $afterInsert, $beforeUpdate, $afterUpdate, $afterFind, $afterDelete</h2>

            <p>
                이 속성들은 콜백 메소드를 지정할 때 사용되며, 콜백은 속성 이름이 뜻하는 시점에 호출됩니다.
            </p>

            <h2>$allowCallbacks</h2>

            <p>
                위에서 정의한 콜백을 사용할지 여부를 결정합니다.
            </p>
        <?= tabler_card_end() ?>

        
    </div>
</div>
<?= $this->endSection() ?>