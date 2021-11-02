<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<form action='/ci4lab/lab1/exam2/generate' method='post'>
<table class="table table-vcenter card-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Select</th>
            <th>비고</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Helper
            </td>
            <td>
                <input type="checkbox" name="helper[]" value="array" /> Array 헬퍼<br/>
                <input type="checkbox" name="helper[]" value="cookie" /> 쿠키 헬퍼<br/>
                <input type="checkbox" name="helper[]" value="date" /> Date 헬퍼<br/>
                <input type="checkbox" name="helper[]" value="filesystem" /> 파일시스템 헬퍼<br/>
                <input type="checkbox" name="helper[]" value="form" /> 폼 헬퍼<br/>
                <input type="checkbox" name="helper[]" value="html" /> HTML 헬퍼<br/>
                <input type="checkbox" name="helper[]" value="url" /> url 헬퍼<br/>
                <input type="checkbox" name="helper[]" value="text" /> text 헬퍼<br/>
            </td>
            <td>            
            </td>
        </tr>
        <tr>
            <td>
                Library
            </td>
            <td>
                <input type="checkbox" name="library[cache]" value="\Config\Services::cache()" />cache<br/>
                <input type="checkbox" name="library[session]" value="\Config\Services::session()" />session<br/>
                <input type="checkbox" name="library[throttler]" value="\Config\Services::throttler()" />throttler<br/>
                <input type="checkbox" name="library[typography]" value="\Config\Services::typography()" />upload<br/>
            </td>
            <td>            
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <button type='submit'>BaseController 생성</button>
            </td>     
        </tr>
    </tbody>
</table>
</form>
<?= $this->endSection() ?>