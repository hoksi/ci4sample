<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">
    
    <?= tabler_page_title('Controller') ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>해봅시다 - Hello World!</h2>
            
            <p>간단한 컨트롤러를 만들어 실제 작동하는 모습을 보도록 하겠습니다.</p>
            <p>텍스트 편집기를 사용하여 Controllers/Controller/Helloworld1.php라는 파일을 만들고 다음 코드를 입력합니다.
                Helloworld1 컨트롤러가 BaseController를 확장하고 있음을 알 수 있습니다.
                BaseController 기능이 필요하지 않은 경우 CodeIgniter\Controller를 확장합니다.</p>
            <p>url : `example.com/controller/hellowrold1`로 결과를 확인합니다.</p>
            <p>BaseController는 모든 컨트롤러에 필요한 구성 요소를 로드하고 기능을 수행할 수 있는 편리한 기능를 제공합니다.</p>
            <p>새로운 유틸리티 메소드는 보안을 위하여 protected 또는 private로 선언해야 합니다.</p>
        <?= tabler_card_end() ?>
        <?= view('controller/hello_world1') ?>

        <?= tabler_card_start() ?>
            <h2>메소드</h2>

            <p>위 예제에서 메소드 이름은 index()입니다. URI의 두 번째 세그먼트가 비어 있으면 “index” 메소드가 항상 기본적으로 로드됩니다. “Hello World” 메시지를 표시하는 다른 방법은 다음과 같습니다.</p>
            <p>`example.com/controller/helloworld1/index/`</p>
            <p>URI의 두 번째 세그먼트는 컨트롤러에서 호출할 메소드를 결정합니다.</p>
            <p>텍스트 편집기를 사용하여 Controllers/Controller/Helloworld2.php라는 파일을 만들고 다음 코드를 입력합니다.</p>
            <p>이제 다음 URL을 로드하여 comment 메소드를 봅니다.: `example.com/controller/helloworld2/comment/`</p>
            <p>새로운 메시지가 표시됩니다.</p>
        <?= tabler_card_end() ?>
        <?= view('controller/hello_world2') ?>

        <?= tabler_card_start() ?>
            <h2>메소드에 URI 세그먼트 전달</h2>

            <p>URI에 세 개 이상의 세그먼트가 포함되어 있으면 메소드에 매개 변수(parameters)로 전달됩니다.</p>
            <p>예를 들어 이와 같은 URI가 있다고 가정 해 봅시다.: `example.com/products/shoes/sandals/123`</p>
            <p>메소드에 URI 세그먼트 3과 세그먼트 4가 전달됩니다. (“sandals” 와 “123”)</p>
            <p>텍스트 편집기를 사용하여 Controllers/Controller/Product.php라는 파일을 만들고 다음 코드를 입력합니다.</p>
            <p>이제 다음 URL을 로드하여 세그먼트를 통하여 전달된 데이터를 봅니다.: `example.com/controller/product/shoes/sandals/123`</p>
        <?= tabler_card_end() ?>
        <?= view('controller/products') ?>

        <?= tabler_card_start() ?>
            <h2>리매핑 메소드 호출</h2>

            <p>URI의 두 번째 세그먼트는 일반적으로 컨트롤러에서 호출되는 메소드를 결정합니다.</p>
            <p>_remap() 메소드를 사용하면 CodeIgniter의 이 동작을 재정의 할 수 있습니다.</p>
            <p>재정의 된 메소드 호출(일반적으로 URI의 두 번째 세그먼트)은 `_remap()` 메소드에 매개 변수로 전달됩니다.</p>
        <?= tabler_card_end() ?>
        <?= view('controller/remap1') ?>

        <?= tabler_card_start() ?>
            <p>메소드 이름 뒤의 추가 세그먼트는 `_remap()`에 전달됩니다. </p>
            <p>이러한 매개 변수는 CodeIgniter의 기본 동작을 에뮬레이트하기 위해 메소드로 전달됩니다.</p>
        <?= tabler_card_end() ?>
        <?= view('controller/remap2') ?>

        <?= tabler_card_start() ?>
            <h2>비공개 메소드</h2>

            <p>메소드를 private 또는 protected로 선언하면 URL 요청을 통해 접근할 수 없습니다.</p>
        <?= tabler_card_end() ?>

        <?= view('controller/invisible') ?>
    </div>
</div>
<?= $this->endSection() ?>