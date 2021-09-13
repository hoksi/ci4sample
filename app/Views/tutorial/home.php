<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title('Tutorial') ?>

    <div class="page-body">

        <?= tabler_card("
            <h2>첫 번째 컨트롤러 만들기</h2>

            <p>`app/Controllers/Tutorial/Pages1.php` 파일을 만들고 다음 코드를 입력합니다.</p>
            <p>우리는 `\$Page`라는 하나의 인수(argument)를 허용하는 view() 메소드가 있는 Pages1 클래스를 작성했습니다.</p>
            <p>그리고 기본 컨트롤러인 `app/Controllers/Home.php`와 동일한 index() 메소드(method)를 가지고 있습니다.</p>
            <p>이 메소드는 CodeIgniter의 welcome 페이지를 보여줍니다.</p>
            <p>Pages1 클래스는 CodeIgniter\Controller 클래스를 확장하고 있습니다.</p>
            <p>이는 새 Pages1 클래스가 CodeIgniter\Controller 클래스에 정의된 메소드와 변수를 이용할 수 있다는 것을 의미합니다.</p>
            <p>컨트롤러는 웹 어플리케이션에 대한 모든 요청의 중심이 되며, 여느 php 클래스와 마찬가지로 컨트롤러내에서 `\$this`로 지칭합니다.</p>
            
        ") ?>
        
        <?= view('tutorial/pages1') ?>

        <?= tabler_card("
            <p>첫 번째 메소드를 만들었으니, 이제 몇 가지 기본적인 페이지 템플릿을 만들어 봅시다.</p>
            <p>우리는 페이지 푸터(footer)와 헤더(header) 역할을 하는 두 개의 “뷰(view)”를 만들겁니다.</p>
            <p>`app/Views/tutorial/templates/header.php` 파일을 만들고 다음 코드를 추가하십시오.</p>
            <p></p>
            <p>헤더에는 머리글과 함께 기본 보기를 로드하기 전에 표시할 기본 HTML 코드가 포함되어 있습니다.</p>
            <p>그리고 우리가 나중에 컨트롤러에서 정의할 `\$title` 변수를 출력합니다.</p>
            <p>이제, 다음 코드를 포함하는 `app/Views/tutorial/templates/footer.php`로 푸터(footer)를 작성하십시오.</p>

            <h2>컨트롤러에 로직 추가</h2>

            <p>앞서 우리는 view() 메소드를 컨트롤러에 추가했습니다.</p>
            <p>이 메소드는 `\$Page`라는 하나의 파라미터를 허용합니다.</p>
            <p>정적(static) 페이지 본문은 `app/Views/tutorial/pages/` 디렉터리에 위치합니다.</p>
            <p>그 디렉터리에 `home.php`과 `about.php`이라는 이름의 파일을 두 개를 만드십시오.</p>
            <p>그 파일들 안에, 텍스트 − 당신이 원하는 어떤것 −를 입력하고 저장합니다.</p>
            <p>만약 여러분이 특별히 독창적이지 않은 사람이 되고 싶다면, “Hello World!”를 입력해도 됩니다.</p>
            <p>이 페이지를 로드하려면 요청된 페이지가 실제로 존재하는지 확인해야 합니다.</p>
        ") ?>

        <?= view('tutorial/pages2') ?>

        <?= view('tutorial/news1') ?>

        <?= view('tutorial/news2') ?>

        <?= view('tutorial/news3') ?>

    </div>
</div>
<?= $this->endSection() ?>