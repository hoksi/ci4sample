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
                지정된 경로의 모든 파일을 삭제합니다.
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

        <?= tabler_card_start() ?>
            <h2>get_filenames($source_dir[, $include_path = false])</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam5Show',
                'title' => '/helper/filesys/exam5',
                'href' => '/helper/filesys/exam5',
            ],
            [
                'id' => 'Exam5',
                'title' => 'Exam5.php',
                'href' => '/sample/home/view/Controllers/Helper/Filesys/Exam5',
            ],
            [
                'id' => 'Exam5View',
                'title' => 'exam5.php',
                'href' => '/sample/home/view/Views/helper/filesys/exam5',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>get_dir_file_info($source_dir, $top_level_only)</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam6Show',
                'title' => '/helper/filesys/exam6',
                'href' => '/helper/filesys/exam6',
            ],
            [
                'id' => 'Exam6',
                'title' => 'Exam6.php',
                'href' => '/sample/home/view/Controllers/Helper/Filesys/Exam6',
            ],
            [
                'id' => 'Exam6View',
                'title' => 'exam6.php',
                'href' => '/sample/home/view/Views/helper/filesys/exam6',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>get_file_info($file[, $returned_values = ['name', 'server_path', 'size', 'date']])</h2>
            <p>
                파일의 `name`, `path`, `size`, `date modified` 정보를 반환합니다.<br/>
                두 번째 매개 변수 `$returned_values` 반환할 정보를 선언할 수 있습니다.
            </p>
            
            <h2>symbolic_permissions($perms)</h2>
            <p>
                숫자 사용 권한을 파일 권한 표준 기호로 변환합니다.
            </p>
            <pre class="prettyprint">symbolic_permissions(fileperms('./index.php'));  // -rw-r--r--</pre>

            <h2>octal_permissions($perms)</h2>
            <p>
               숫자 사용 권한을 8진수 표기법 파일 권한으로 변환합니다.
            </p>
            <pre class="prettyprint">octal_permissions(fileperms('./index.php')); // 644</pre>

            <h2>same_file($file1, $file2)</h2>
            <p>
               두 파일을 MD5 해시 기준으로 비교하여 동일한지 확인합니다.
            </p>
            <pre class="prettyprint">same_file($newFile, $oldFile) ? 'Same!' : 'Different!';</pre>

            <h2>set_realpath($path[, $check_existence = false])</h2>
            <p>
               심볼릭 링크나 상대 디렉터리 구조가 없는 서버 경로를 반환합니다.<br/>
               경로를 확인할 수 없는 경우 선택적 두 번째 인수로 인해 오류가 트리거됩니다.
            </p>
            <pre class="prettyprint">$file = '/etc/php5/apache2/php.ini';
echo set_realpath($file); // Prints '/etc/php5/apache2/php.ini'

$non_existent_file = '/path/to/non-exist-file.txt';
echo set_realpath($non_existent_file, true);    // Shows an error, as the path cannot be resolved
echo set_realpath($non_existent_file, false);   // Prints '/path/to/non-exist-file.txt'

$directory = '/etc/php5';
echo set_realpath($directory);  // Prints '/etc/php5/'

$non_existent_directory = '/path/to/nowhere';
echo set_realpath($non_existent_directory, true);       // Shows an error, as the path cannot be resolved
echo set_realpath($non_existent_directory, false);      // Prints '/path/to/nowhere'</pre>
        <?= tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>