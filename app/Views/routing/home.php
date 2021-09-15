<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title('URI 라우팅(Routing)') ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>일반적으로 URL 문자열과 해당 컨트롤러 클래스/메소드 사이에는 일대일 관계가 있습니다. URI의 세그먼트는 일반적으로 이 패턴을 따릅니다.</p>
            <pre>example.com/class/method/id/</pre>

            <p>그러나 경우에 따라 URL에 해당하는 클래스 대신 다른 클래스/메소드를 호출할 수 있도록 이 관계를 다시 맵핑해야 할 경우가 있습니다.</p>
            <p>예를 들어 URL에 이런 프로토타입이 있어야 한다고 가정해 보겠습니다.</p>
            <pre>
example.com/product/1/
example.com/product/2/
example.com/product/3/
example.com/product/4/
            </pre>

            <p>일반적으로 URL의 두 번째 세그먼트는 메소드 이름으로 예약되어 있지만 위의 예제에서는 대신 제품 ID가 있습니다. 이를 위해 CodeIgniter는 URI 처리기(handler)를 다시 매핑할 수 있습니다.</p>

            <h2>자신만의 라우팅 규칙 설정</h2>
            <p>라우팅 규칙(rule)은 `app/Config/Routes.php` 파일에 정의되어 있습니다. 여기에서 고유한 라우팅 기준을 지정할 수 있는 RouteCollection 클래스의 인스턴스가 생성됩니다. 자리 표시자(placeholder) 또는 정규식(Regular Expressions)을 사용하여 경로를 지정할 수 있습니다.</p>
            <p>라우터는 왼쪽의 URI를 가져와 컨트롤러에 전달해야 하는 매개 변수를 오른쪽의 컨트롤러/메소드에 맵핑합니다. 컨트롤러와 메소드는 완전한 이름 공간 클래스(fully-namespaced class)와 Users::list와 같이 이중 콜론(정적 메소드를 사용하는 것과 동일한 방식)으로 분리하여 나열합니다.</p>
            <p>해당 메소드에 매개 변수를 전달해야 한다면 메소드 이름 뒤에 슬래시로 구분하여 나열합니다.</p>
            <pre>
// Calls the $Users->list()
Users::list
// Calls $Users->list(1, 23)
Users::list/1/23
            </pre>

            <h2>자리 표시자(Placeholder)</h2>

            <p>일반적으로 경로(route)는 다음과 같습니다</p>
            <pre>$routes->add('product/(:num)', 'App\Catalog::productLookup');</pre>

            <p>경로에서 첫 번째 매개 변수는 일치할 URI이고, 두 번째 매개 변수는 다시 라우팅해야 하는 대상입니다. 위의 예제는 URL의 첫 번째 세그먼트가 “product”이고 두 번째 세그먼트에 숫자가 있으면 “AppCatalog” 클래스의 “productLookup” 메소드로 라우팅됩니다.</p>
            <p>자리 표시자는 단순히 정규식 패턴을 나타내는 문자열입니다. 라우팅 프로세스가 진행되는 동안 이러한 자리 표시자는 정규식 값으로 대체됩니다. 이들은 주로 가독성을 위해 사용됩니다.</p>
            <p>경로에서 사용할 수있는 자리 표시자는 다음과 같습니다.</p>

            <table class='table'>
                <colgroup>
                    <col width='10%'>
                    <col width='90%'>
                </colgroup>
                <thead valign='bottom'>
                    <tr class='row-odd'><th class='head'>Placeholders</th>
                        <th class='head'>Description</th>
                    </tr>
                </thead>
                <tbody valign='top'>
                    <tr class='row-even'><td>(:any)</td>
                        <td>해당 시점부터 URI 끝까지의 모든 문자와 일치하며, 여기에는 여러 URI 세그먼트가 포함될 수 있습니다.</td>
                    </tr>
                    <tr class='row-odd'><td>(:segment)</td>
                        <td>결과를 단일 세그먼트로 제한하는 슬래시(/)를 제외한 모든 문자와 일치합니다.</td>
                    </tr>
                    <tr class='row-even'><td>(:num)</td>
                        <td>모든 정수와 일치합니다.</td>
                    </tr>
                    <tr class='row-odd'><td>(:alpha)</td>
                        <td>모든 알파벳 문자와 일치합니다</td>
                    </tr>
                    <tr class='row-even'><td>(:alphanum)</td>
                        <td>영문자, 정수 문자열, 둘의 조합과 일치합니다.</td>
                    </tr>
                    <tr class='row-odd'><td>(:hash)</td>
                        <td><strong>(:segment)</strong>와 같습니다. 그러나 hashded id를 사용합니다. (<a href='http://ci4doc.cikorea.net/models/model.html' target='_blank'><span class='doc'>모델</span></a> 문서 참조).</td>
                    </tr>
                </tbody>
            </table>

            <h2>Examples</h2>

            <p>다음은 기본적인 몇 가지 라우팅 예입니다.</p>
        <?= tabler_card_end() ?>

        <?= view('routing/blog') ?>

        <?= view('routing/catalog') ?>

        <?= tabler_card_start() ?>
            <h2>맞춤(custom) 자리 표시자</h2>

            <p>가독성을 위해 경로(route) 파일에 사용자 정의 자리 표시자를 만들어 사용할 수 있습니다.</p>
        <?= tabler_card_end() ?>

        <?= view('routing/custom') ?>

        <?= tabler_card_start() ?>
            <h2>정규식</h2>

            <p>원하는 경우 정규식을 사용하여 라우팅 규칙을 정의할 수 있습니다. 역 참조와 마찬가지로 유효한 정규식이 허용됩니다.</p>
            <p>정규 표현식에 대해 더 배우고 싶은 사람들에게 <a href='https://www.regular-expressions.info/' target='_blank'>regular-expressions.info</a>가 좋은 출발점이 될 수 있습니다.</p>
        <?= tabler_card_end() ?>

        <?= view('routing/regex') ?>
    </div>
</div>


<?= $this->endSection() ?>