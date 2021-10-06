<?php
namespace App\Controllers\Response\Localization;

use App\Controllers\BaseController;

/**
 * Description of IcuSample
 *
 * @author hoksi
 */
class IcuSample extends BaseController
{
    public function index()
    {
        $this->echo(lang('ICUSample.shortTime', [time()]));
        $this->echo(lang('ICUSample.mediumTime', [time()]));
        $this->echo(lang('ICUSample.longTime', [time()]));
        $this->echo(lang('ICUSample.fullTime', [time()]));

        $this->echo(lang('ICUSample.shortDate', [time()]));
        $this->echo(lang('ICUSample.mediumDate', [time()]));
        $this->echo(lang('ICUSample.longDate', [time()]));
        $this->echo(lang('ICUSample.fullDate', [time()]));

        $this->echo(lang('ICUSample.spelledOut', [34]));

        $this->echo(lang('ICUSample.ordinal', [time()]));
    }

    public function locale()
    {
        $this->echo('매개 변수를 대체할 때 사용할 다른 로케일을 지정하기 위해 로케일을 lang() 메소드의 세 번째 매개 변수로 전달할 수 있습니다.');
        $this->echo(lang('ICUSample.longTime', [time()], 'ru-RU'));
        $this->echo(lang('{price, number, currency}', ['price' => 7.41], 'en-GB'));
        $this->echo(lang('{price, number, currency}', ['price' => 7.41], 'en-US'));
    }

    public function list()
    {
        $this->echo('언어 파일에 중첩 배열을 사용하여 목록 등을 쉽게 사용할 수 있습니다.');
        $this->echo(implode(', ', lang('ICUSample.list')));
    }

    protected function echo($str)
    {
        echo '<p>'.$str.'</p>';
    }
}