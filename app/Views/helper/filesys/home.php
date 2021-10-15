<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                디렉토리 작업을 지원하는 함수 모음입니다.<br/>
                이 헬퍼는 다음 코드를 사용하여 로드합니다.
            </p>
            <pre class="prettyprint">helper('filesystem');</pre>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>directory_map($source_dir[, $directory_depth = 0[, $hidden = false]])</h2>

            <p>
                디렉토리와 포함된 하위 폴더 정보를 배열에 매핑합니다.<br/>
                결과가 없으면 빈 배열을 반환합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/helper/filesys/exam1',
                'href' => '/helper/filesys/exam1',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Helper/Filesys/Exam1',
            ],
            [
                'id' => 'Exam1View',
                'title' => 'exam1.php',
                'href' => '/sample/home/view/Views/helper/filesys/exam1',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>directory_mirror($original, $target[, $overwrite = true])</h2>

            <p>
                원본 디렉터리의 파일 및 디렉터리를 대상 디렉터리로 복사합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam2Show',
                'title' => '/helper/filesys/exam2',
                'href' => '/helper/filesys/exam2',
            ],
            [
                'id' => 'Exam2',
                'title' => 'Exam2.php',
                'href' => '/sample/home/view/Controllers/Helper/Filesys/Exam2',
            ],
            [
                'id' => 'Exam2View',
                'title' => 'exam2.php',
                'href' => '/sample/home/view/Views/helper/filesys/exam2',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>write_file($path, $data[, $mode = 'wb'])</h2>

            <p>
                지정된 경로의 파일에 데이터를 저장합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam3Show',
                'title' => '/helper/filesys/exam3',
                'href' => '/helper/filesys/exam3',
            ],
            [
                'id' => 'Exam3',
                'title' => 'Exam3.php',
                'href' => '/sample/home/view/Controllers/Helper/Filesys/Exam3',
            ],
            [
                'id' => 'Exam3View',
                'title' => 'exam3.php',
                'href' => '/sample/home/view/Views/helper/filesys/exam3',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>delete_files($path[, $delDir = false[, $htdocs = false[, $hidden = false]]]])</h2>

            <p>
                지정된 경로의 파일에 데이터를 저장합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam4Show',
                'title' => '/helper/filesys/exam4',
                'href' => '/helper/filesys/exam4',
            ],
            [
                'id' => 'Exam4',
                'title' => 'Exam4.php',
                'href' => '/sample/home/view/Controllers/Helper/Filesys/Exam4',
            ],
            [
                'id' => 'Exam4View',
                'title' => 'exam4.php',
                'href' => '/sample/home/view/Views/helper/filesys/exam4',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>