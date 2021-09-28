<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title('Tutorial') ?>

    <div class="page-body">

    <?php if ($menu == 'page'): ?>

        <?= tabler_card_start() ?>
            <h2>첫 번째 컨트롤러 만들기</h2>

            <p>`app/Controllers/Tutorial/Pages1.php` 파일을 만들고 다음 코드를 입력합니다.</p>
            <p>우리는 `\$Page`라는 하나의 인수(argument)를 허용하는 view() 메소드가 있는 Pages1 클래스를 작성했습니다.</p>
            <p>그리고 기본 컨트롤러인 `app/Controllers/Home.php`와 동일한 index() 메소드(method)를 가지고 있습니다.</p>
            <p>이 메소드는 CodeIgniter의 welcome 페이지를 보여줍니다.</p>
            <p>Pages1 클래스는 CodeIgniter\Controller 클래스를 확장하고 있습니다.</p>
            <p>이는 새 Pages1 클래스가 CodeIgniter\Controller 클래스에 정의된 메소드와 변수를 이용할 수 있다는 것을 의미합니다.</p>
            <p>컨트롤러는 웹 어플리케이션에 대한 모든 요청의 중심이 되며, 여느 php 클래스와 마찬가지로 컨트롤러내에서 `\$this`로 지칭합니다.</p>
        <?= tabler_card_end() ?>
        <?= view('tutorial/pages1') ?>

        <?= tabler_card_start() ?>
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
            <p></p>
            <p>요청된 페이지가 존재하면 헤더와 푸터를 포함하여 본문이 로드되어 사용자에게 표시됩니다. 요청된 페이지가 존재하지 않을 경우, “404 Page not found” 오류가 표시됩니다.</p>
            <p>이 메소드의 첫 번째 줄은 페이지가 실제로 존재하는지 여부를 확인합니다. PHP의 네이티브 함수 `is_file()`는 파일이 예상되는 위치에 있는지 확인하는 데 사용되었습니다. `PageNotFoundException`은 기본 오류 페이지를 표시하는 CodeIgniter 예외입니다.</p>
            <p>헤더 템플릿에서는 페이지 제목을 출력하기 위해 “\$title” 변수가 사용되었습니다. \$title의 값은 메소드에서 정의되지만, 변수에 직접 값을 할당하는 대신 \$data 배열의 title 요소에 할당합니다.</p>
            <p>마지막으로 해야 할 일은 뷰(view)를 표시되는 순서대로 로드하는 것입니다. 이를 위해 CodeIgniter에 내장된 view() 함수를 사용합니다. view() 함수의 두 번째 매개변수는 뷰에 값을 전달하는 데 사용됩니다.</p>
            <p>\$data 배열의 값은 변수명을 키(key)로하여 할당됩니다. 컨트롤러의 \$data['title'] 값은 뷰의 \$title과 동일합니다.</p>
        <?= tabler_card_end() ?>
        <?= view('tutorial/pages2') ?>

    <?php else: ?>

        <?= tabler_card_start() ?>
            <h2>뉴스 섹션</h2>
            <p>이전 섹션에서는 정적 페이지(static page)를 참조하는 클래스를 작성하여 프레임워크의 몇 가지 기본 개념을 살펴 보고 사용자 정의 라우팅 규칙을 추가하여 URI를 정리했습니다. 이제 동적(dinamic) 컨텐츠를 소개하고 데이터베이스를 사용할 차례입니다.</p>

            <h2>작업 할 데이터베이스 생성</h2>
            <p>먼저, CodeIgniter 설치시 <a href='http://ci4doc.cikorea.net/intro/requirements.html' target='_blank'>요구사항</a>에 요약 된대로 적절한 데이터베이스를 설정했다고 가정합니다. 이 튜토리얼에서는 MySQL 데이터베이스에 대한 SQL을 제공하며, 데이터베이스 명령을 실행하기에 적합한 클라이언트(mysql, MySQL Workbench 또는 phpMyAdmin)가 있다고 가정합니다.</p>

            <p>이 섹션을 진행하기 위해서는 데이터베이스를 만든 다음 CodeIgniter를 구성하여 사용해야 합니다.</p>

            <p>데이터베이스 클라이언트를 사용하여 데이터베이스에 연결하고 아래의 SQL(MySQL)을 실행하십시오. 또한, 몇 개의 시드(seed) 레코드를 추가합니다. 지금은 테이블을 만드는데 필요한 SQL문을 보여 주지만 CodeIgniter에 익숙해지면 프로그래밍 방식으로이 작업을 수행할 수 있습니다.</p>
            <p>나중에 더 유용한 데이터베이스 설정을 작성하기 위해 <a href='http://ci4doc.cikorea.net/dbmgmt/migration.html' target='_blank'>마이그레이션</a> 및 <a href='http://ci4doc.cikorea.net/dbmgmt/seeds.html' target='_blank'>시드(Seeds)</a>에 대해 읽어보세요.</p>

            <pre>
    CREATE TABLE news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        body text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
    );
            </pre>

            <p>관심사항: 웹과 관련하여 슬러그(slug)는 URL을 사용하여 리소스를 식별하고 설명하는데 사용되는 SEO 친화적인 짧은 텍스트입니다.</p>
            <p>시드(seed) 레코드는 다음과 같습니다.:</p>

            <pre>
    INSERT INTO news VALUES
    (1,'Elvis sighted','elvis-sighted','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
    (2,'Say it isn\'t so!','say-it-isnt-so','Scientists conclude that some programmers have a sense of humor.'),
    (3,'Caffeination, Yes!','caffeination-yes','World\'s largest coffee shop open onsite nested coffee shop for staff only.');
            </pre>

            <h2>데이터베이스에 연결</h2>

            <p>CodeIgniter를 설치할 때 생성한 로컬 구성 파일 .env를 열어 데이터베이스 속성의 주석을 해제하고 사용하려는 데이터베이스에 맞게 설정하십시오. 여기에 설명된 대로 데이터베이스를 올바르게 구성했는지 확인합니다.</p>
            <pre>
    database.default.hostname = localhost
    database.default.database = ci4tutorial
    database.default.username = root
    database.default.password = root
    database.default.DBDriver = MySQLi
            </pre>

            <h2>모델(model) 설정</h2>
            <p>컨트롤러에서 데이터베이스 작업을 바로 작성하는 대신 쿼리를 모델에 배치하면 나중에 쉽게 재사용 할 수 있습니다. 모델은 데이터베이스 또는 다른 데이터 저장소에서 정보를 검색, 삽입 및 업데이트하는 장소이자, 데이터에 대한 액세스를 제공합니다. 자세한 내용은 여기를 참조하십시오.</p>
            <p>`app/Models/` 디렉터리에 NewsModel.php라는 새 파일을 만들고 다음 코드를 추가하십시오. 여기에 설명 된대로 데이터베이스를 올바르게 구성했는지 확인하십시오.</p>

            <p>이 코드는 앞서 사용한 컨트롤러 코드와 비슷합니다. CodeIgniter\Model을 확장하여 새 모델을 만들고 데이터베이스 라이브러리를 로드합니다. 이렇게 하면 \$this->db 객체를 통해 데이터베이스 클래스를 사용할 수 있게 됩니다.</p>
            <p>데이터베이스와 모델이 설정되었으므로 데이터베이스에서 모든 게시물을 가져올 방법이 필요합니다. 이를 위해 CodeIgniter에 포함 된 데이터베이스 추상화 계층인 Query Builder를 사용합니다. 이를 통해 한 번 작성된 쿼리는 지원되는 모든 데이터베이스 시스템에서 작동할 수 있습니다. Model 클래스를 사용하면 Query Builder로 쉽게 작업 할 수 있으며 데이터 작업을 보다 간단하게 수행할 수 있는 추가 도구도 제공됩니다. 다음 코드를 모델에 추가하십시오.</p>
        <?= tabler_card_end() ?>
        <?= view('tutorial/news1') ?>

        <?= tabler_card_start() ?>
            <p>이 코드를 사용하면 두 가지 다른 쿼리를 수행 할 수 있습니다. 모든 뉴스 레코드를 얻거나, slug를 통해 뉴스 항목을 얻을 수 있습니다. Query Builder를 실행하기 전 \$slug 변수에 값이 제거되지 않았습니다.</p>
            <p>여기서 사용되는 두 가지 메소드 findAll()과 first()는 모델 클래스에 의해 제공됩니다. 이 두 메소드는 이미 우리가 앞서 NewsModel 클래스에 설정한 \$table 속성을 기준으로 사용할 테이블를 알고 있습니다. 이 메소드는 Query Builder를 사용하여 현재 테이블에서 명령을 실행하고 원하는 형식으로 결과 배열을 반환하는 도우미(helper) 메소드입니다. 이 예에서 findAll()은 일련의 객체(object)를 반환합니다.</p>

            <h2>뉴스 표시</h2>
            <p>쿼리가 작성되었으므로 모델은 뉴스 항목을 사용자에게 표시할 뷰와 연결되어야 합니다. 이는 앞서 만든 Pages 컨트롤러에서 할 수 있지만, 명확한 연결을 위해 새로운 News 컨트롤러를 정의합니다. `app/Controllers/News.php`로 새 컨트롤러를 생성합니다.</p>

            <p>코드를 살펴보면 앞서 만든 파일과 비슷한 점이 있을 수 있습니다. 첫째, 코어 CodeIgniter 클래스인 Controller를 확장하여 몇 가지 도우미 메소드를 제공하며, 디스크에 정보를 저장하는 Logger 클래스와 Request 및 Response 객체를 사용할 수 있도록 합니다.</p>
            <p>다음으로 두 가지 메소드가 있는데, 모든 뉴스 항목을 보는 메소드와 특정 뉴스 항목을 보는 메소드입니다. 두 번째 메소드에서는 \$slug 변수가 모델의 메소드로 전달되는 것을 볼 수 있습니다. 모델은 이 slug를 사용하여 뉴스 항목을 식별합니다.</p>
            <p>이제 데이터는 모델을 통해 컨트롤러에 검색되지만, 아직 아무것도 표시되지 않습니다. 다음으로 해야할 일은 이 데이터를 뷰에 전달하는 것입니다. 수정된 index() 메소드를 살펴보세요.</p>

            <p>index()의 코드는 모델로부터 모든 뉴스를 가져와 변수 `\$data['news']`에 할당합니다. title의 값은 \$data['title'] 요소에 할당되며 모든 데이터는 뷰로 전달됩니다. 뉴스 항목을 렌더링하려면 뷰를 작성해야 합니다. `app/Views/news/overview.php` 를 생성하고 탭 `overview.php`의 코드를 추가합니다.</p>
        <?= tabler_card_end() ?>
        <?= view('tutorial/news2') ?>

        <?= tabler_card_start() ?>
            <p>각 뉴스 항목은 루프를 이용하여 사용자에게 표시됩니다. 우리는 템플릿에 HTML과 PHP를 섞어 사용한 것을 볼 수 있습니다. 템플릿 언어를 사용하고 싶다면 CodeIgniter의 View Parser 또는 타사의 파서를 사용하십시오.</p>
            <p>뉴스 개요(overview) 페이지는 현재 완료되었지만, 개별 뉴스 항목을 표시할 페이지는 여전히 없습니다. 앞서 만든 모델은 이 기능을 쉽게 사용할 수 있도록 만들어졌습니다. 컨트롤러에 일부 코드를 추가하고 새로운 뷰를 작성하면 됩니다.</p>
            <p>컨트롤러의 view() 메소드를 확인하세요.</p>

            <p>매개 변수없이 getNews() 메소드를 호출하는 대신 \$slug 변수가 전달되므로 특정 뉴스 항목을 반환합니다. 이제 남은 것은 뷰를 만드는 일입니다.  `view.php` 탬을 확인하세요.

            <h2>뉴스 아이템 만들기</h2>

            <p>CodeIgniter를 사용하여 데이터베이스에서 데이터를 읽는 방법을 알았지만 아직 데이터베이스에 정보를 쓰지는 않았습니다. 이 섹션에서는 이 기능을 포함하기 위해 이전에 작성한 뉴스 컨트롤러 및 모델을 확장합니다.</p>

            <h2>Create a form</h2>
            <p>데이터베이스에 데이터를 입력하려면 저장할 정보를 입력 할 수 있는 양식(form)을 작성해야 합니다. 제목과 텍스트 입력을 위해 두 개의 필드가 있는 양식이 필요합니다. 모델에서는 타이틀을 이용하여 슬러그를 만듭니다. app/Views/news/create.php에 새로운 뷰를 만듭니다.</p>
            <p>`create.php`를 살펴보면 생소해 보이는 두 가지가 있을 것입니다. \Config\Services::validation()->listErrors() 함수는 양식 검증과 관련된 오류를 보고하는 데 사용됩니다. csrf_field() 함수는 CSRF 토큰으로 숨겨진 입력을 생성하여 일부 일반적인 공격으로부터 보호합니다.</p>
            <p>컨트롤러로 돌아가 우리는 두 가지 작업, `양식이 제출되었는지`와 `제출된 데이터가 검증 규칙을 통과했는지` 여부를 확인할 겁니다 이를 위해 form validation 라이브러리를 사용합니다.</p>
        <?= tabler_card_end() ?>
        <?= view('tutorial/news3') ?>

        <?= tabler_card_start() ?>
            <p>위의 코드는 많은 기능을 추가합니다. 먼저 NewsModel을 로드합니다. 그리고 POST 요청을 처리하는지 확인한 다음 컨트롤러 제공 헬퍼 기능을 사용하여 유효성을 검증합니다 위의 경우 제목(title)과 텍스트(body) 필드는 필수입니다.</p>
            <p>CodeIgniter에는 위에서 설명한 강력한 유효성 검사 라이브러리가 있습니다. 이 라이브러리에 대한 자세한 내용은 여기를 참조하십시오.</p>
            <p>계속해서 폼(form) 유효성 검사가 성공적으로 실행되었는지 확인하는 조건을 볼 수 있습니다. 그렇지 않은 경우 폼이 표시됩니다. 제출된 데이터가 모든 규칙을 통과했을때 모델이 호출됩니다. 모델로 뉴스 아이템을 전달하여 처리합니다.</p>
            <p>여기에는 새로운 함수인 url_title()이 포함되어 있습니다. 이 함수 - URL helper에서 제공 - 는 전달받은 문자열에서 모든 공백을 대시 (-)로 바꾸고 모든 문자가 소문자인지 확인합니다. 이 함수는 URI로 사용 가능한 완벽한 slug를 만듭니다.</p>
            <p>그런 다음 성공 메시지를 표시하기 위해 뷰가 로드됩니다. app/Views/news/success.php로 뷰를 작성하고 성공 메시지를 추가하십시오.</p>
        <?= tabler_card_end() ?>

    <?php endif; ?>

    </div>
</div>
<?= $this->endSection() ?>