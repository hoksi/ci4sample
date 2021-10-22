<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">
    <div class="page-body">
        <?= tabler_card_start() ?>
            <h2>코드 이그나이터의 세계에 오신것을 환영합니다.</h2>

            <p>
                코드이그나이터(CodeIgniter)는 PHP를 사용하여 웹 사이트를 구축하는 사람들을 위한 어플리케이션 개발 프레임워크입니다.<br/>
                풍부한 라이브러리 세트와 이러한 라이브러리에 액세스할 수 있는 간단한 인터페이스 및 논리적 구조를 제공하여 프로젝트에 창의적으로 집중할 수 있으며, 코드를 처음부터 작성하는 것보다 적은 양의 코드로 빠르게 프로젝트를 개발할 수 있습니다.
            </p>

            <p>
                이 사이트는 코드이그나이터 사용자의 이해를 돕기 위해 사용자 가이드에 포함된 샘플을 동작 가능하도록 수정하여 만들었습니다.<br/>
                코드이그나이터 프레임워크에 관심을 가진 모든 분들이 이 샘플을 통하여 코드이그나이터를 쉽게 이해하고 업무에 잘 활용하도록 도움이 되었으면 합니다.
            </p>

            <p>
                코드이그나이터 사용중 이해가 잘 가지 않거나 필요한 샘플이 있다면 아래 사이트에 남겨 주십시오.
            </p>

            <ul>
                <li><a href="https://cikorea.net/" target="_blank">Codeigniter 한국 사용자 포럼</a></li>
                <li><a href="https://github.com/hoksi/ci4sample/issues" target="_blank">Codeigniter4 샘플 Github Issues</a></li>
            </ul>

        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>둘러보기</h2>
        <?= tabler_card_end() ?>

        <div class="container-xl">
            <div class="row row-cards">

              <div class="col-md-6 col-xl-4">
                <?= tabler_card_row_start() ?>
                    <h2>Tutorial</h2>

                    <ol>
                        <li><a href="/tutorial/home/page">Pages</a></li>
                        <li><a href="/tutorial/home/news">News</a></li>
                    </ol>
                <?= tabler_card_row_end() ?>
                <?= tabler_card_row_start() ?>
                    <h2>컨트롤러와 라우팅</h2>

                      <ol>
                          <li><a href="/controller">Controller</a></li>
                          <li><a href="/routing">Routing</a></li>
                          <li><a href="/filters">Filters</a></li>
                          <li><a href="/incomming">IncommingRequest</a></li>
                      </ol>
                <?= tabler_card_row_end() ?>
                <?= tabler_card_row_start() ?>
                    <h2>라이브러리</h2>

                      <ol>
                          <li><a href="/library/pagination">페이지네이션</a></li>
                          <li><a href="/library/validation">폼검증</a></li>
                          <li><a href="/library/curl">CURLRequest</a></li>
                      </ol>
                <?= tabler_card_row_end() ?>
              </div>

              <div class="col-md-6 col-xl-4">
                <?= tabler_card_row_start() ?>
                    <h2>데이터베이스</h2>

                    <ol>
                        <li><a href="/database/quick">빠른시작</a></li>
                        <li><a href="/database/configuration">구성</a></li>
                        <li><a href="/database/queries">Query</a></li>
                        <li><a href="/database/result">Query Result</a></li>
                        <li><a href="/database/helper">Query Helper</a></li>
                        <li><a href="/database/qbuilder">Query Builder</a></li>
                    </ol>
                <?= tabler_card_row_end() ?>
                <?= tabler_card_row_start() ?>
                    <h2>모델</h2>

                    <ol>
                        <li><a href="/model/cimodel">모델 기초</a></li>
                        <li><a href="/model/pagination">모델 페이지네이션</a></li>
                        <li><a href="/model/validation">모델 데이터검증</a></li>
                        <li><a href="/model/event">모델 이벤트</a></li>
                        <li><a href="/model/entity">Entity</a></li>
                    </ol>
                <?= tabler_card_row_end() ?>
              </div>

              <div class="col-md-6 col-xl-4">
                <?= tabler_card_row_start() ?>
                    <h2>응답 만들기</h2>

                      <ol>
                          <li><a href="/response/view">View</a></li>
                          <li><a href="/response/cell">View Cell</a></li>
                          <li><a href="/response/layout">View Layout</a></li>
                          <li><a href="/response/parser">View Parser</a></li>
                          <li><a href="/response/table">HTML Table</a></li>
                          <li><a href="/response/http">HTTP Response</a></li>
                          <li><a href="/response/api">API Response Trait</a></li>
                          <li><a href="/response/localization">Localization</a></li>
                      </ol>
                <?= tabler_card_row_end() ?>
                <?= tabler_card_row_start() ?>
                    <h2>헬퍼</h2>

                      <ol>
                          <li><a href="/helper/arr">Array</a></li>
                          <li><a href="/helper/cookie">Cookie</a></li>
                          <li><a href="/helper/date">Date</a></li>
                          <li><a href="/helper/filesys">Filesystem</a></li>
                      </ol>
                <?= tabler_card_row_end() ?>
              </div>

            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>