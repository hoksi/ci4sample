<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                Codeigniter는 모델 실행시 데이터를 정규화하거나, 암호를 해시하고 관련 엔터티를 저장하는 작업등을 수행할 수 있는 이벤트 포인트를 제공합니다.<br/>
                모델이 제공하는 이벤트 포인트는 `$beforeInsert`, `$afterInsert`, `$beforeUpdate`, `$afterUpdate`, `$afterFind`, `$afterDelete` 속성을 통해 영향을 받습니다.
            </p>
            <p>
                이벤트를 사용하기 위해서는 모델 클래스 내에 콜백 메소드를 정의해야 합니다.<br/>
                이 메소드는 `$data` 배열을 매개 변수로 받습니다.<br/>
                `$data` 배열에 전달되는 내용은 이벤트마다 다르지만, 원래 메소드에 전달된 기본 데이터를 `data`라는 키에 전달합니다.<br/>
                콜백 메소드는 다른 콜백이 정보를 전달받을 수 있도록 `$data` 배열을 리턴해야 합니다.
            </p>
            <p>
                콜백 메소드 작성이 완료되었으면 적절한 클래스 속성에 메소드 이름을 추가하여 콜백이 호출될 시기를 지정합니다.<br/>
                단일 이벤트에 여러 개의 콜백을 추가할 수 있으며 지정된 순서대로 처리됩니다.<br/>
                여러 이벤트에 동일한 콜백을 사용할 수도 있습니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'CallBackModel',
                'title' => 'CallBackModel.php',
                'href' => '/sample/home/view/Models/Model/Event/CallBackModel',
            ],
            [
                'id' => 'ModelEventShow',
                'title' => '/model/event/modelEvent',
                'href' => '/model/event/modelEvent',
            ],
            [
                'id' => 'ModelEventallowCallbacksShow',
                'title' => '/model/event/modelEvent/allowCallbacks',
                'href' => '/model/event/modelEvent/allowCallbacks',
            ],
            [
                'id' => 'ModelEvent',
                'title' => 'ModelEvent.php',
                'href' => '/sample/home/view/Controllers/Model/Event/ModelEvent',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>이벤트 매개 변수</h2>

            <p>
                각 콜백에 전달되는 데이터는 약간씩 다릅니다.<br/>
                다음은 각 이벤트의 $data 매개 변수에 전달되는 세부 정보입니다.
            </p>
            <table class="table table-bordered">
                <colgroup>
                    <col width="13%">
                    <col width="87%">
                </colgroup>
                <thead valign="bottom">
                    <tr class="row-odd"><th class="head">Event</th>
                        <th class="head">$data contents</th>
                    </tr>
                </thead>
                <tbody valign="top">
                    <tr class="row-even"><td>beforeInsert</td>
                        <td><strong>data</strong> = Insert되는 키/값 쌍 객체, 엔터티 클래스가 insert 메소드로 전달되면 먼저 배열로 변환됩니다.</td>
                    </tr>
                    <tr class="row-odd"><td>afterInsert</td>
                        <td><strong>id</strong> = 새 행의 기본 키, 실패 시 0
                            <strong>data</strong> = Insert될 원래의 키/값 쌍
                            <strong>result</strong> = 쿼리 빌더 insert() 메소드 호출 결과</td>
                    </tr>
                    <tr class="row-even"><td>beforeUpdate</td>
                        <td><strong>id</strong> = Update할 행의 기본(primary) 키 배열
                            <strong>data</strong> = Update되는 키/값 쌍 객체, 엔터티 클래스가 Update 메소드로 전달되면 먼저 배열로 변환됩니다.</td>
                    </tr>
                    <tr class="row-odd"><td>afterUpdate</td>
                        <td><strong>id</strong> = Update할 행의 기본(primary) 키 배열
                            <strong>data</strong> = 업데이트되는 키/값 쌍
                            <strong>result</strong> = 쿼리 빌더 update() 메소드 호출 결과</td>
                    </tr>
                    <tr class="row-even"><td>beforeFind</td>
                        <td>호출 <strong>method</strong> 이름, <strong>singleton</strong> 요청 여부와 추가 필드</td>
                    </tr>
                    <tr class="row-odd"><td><ul class="first last simple">
                                <li>first()</li>
                            </ul>
                        </td>
                        <td>추가 필드 없음</td>
                    </tr>
                    <tr class="row-even"><td><ul class="first last simple">
                                <li>find()</li>
                            </ul>
                        </td>
                        <td><strong>id</strong> = 검색되는 행의 기본 키</td>
                    </tr>
                    <tr class="row-odd"><td><ul class="first last simple">
                                <li>findAll()</li>
                            </ul>
                        </td>
                        <td><strong>limit</strong> = 찾을 행 수
                            <strong>offset</strong> = 검색하는 동안 건너뛸 행 수</td>
                    </tr>
                    <tr class="row-even"><td>afterFind</td>
                        <td><strong>beforeFind</strong>와 동일하지만 데이터의 결과 행을 포함하거나 결과가 없으면 null 입니다.</td>
                    </tr>
                    <tr class="row-odd"><td>beforeDelete</td>
                        <td>delete* 메소드에 따라 다릅니다. 다음을 참조하십시오.</td>
                    </tr>
                    <tr class="row-even"><td><ul class="first last simple">
                                <li>delete()</li>
                            </ul>
                        </td>
                        <td><strong>id</strong> = 삭제되는 행의 기본 키
                            <strong>purge</strong> = 소프트 삭제(soft-delete) 행을 강제로 삭제할지 여부(boolean)</td>
                    </tr>
                    <tr class="row-odd"><td>afterDelete</td>
                        <td><strong>id</strong> = 삭제되는 행의 기본 키
                            <strong>purge</strong> = 소프트 삭제(soft-delete) 행을 강제로 삭제할지 여부(boolean)
                            <strong>result</strong> = 쿼리 빌더 delete() 메소드 호출 결과
                            <strong>data</strong> = 사용안함</td>
                    </tr>
                </tbody>
            </table>
            <?= tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>