<?php
namespace App\Controllers\Database\Result;

/**
 * Description of User
 *
 * 사용자 정의 결과 객체
 * 
 * getResult()는 stdClass 대신 사용자 정의 클래스의 인스턴스로 결과를 반환할 수 있습니다. 
 * 클래스가 아직 메모리에 로드되지 않은 경우 오토로더가 로드를 시도합니다. 
 * 객체는 데이터베이스에서 반환된 모든 값을 속성으로 설정합니다. 
 * 선언되었으나 공개되지 않은 속성의 경우 __set() 메소드를 제공하여 설정할 수 있습니다.
 * 
 * @author hoksi
 */
class User
{
    public $title;
    public $email;
    public $name;

    protected $last_login;

    public function lastLogin($format)
    {
        return $this->last_login->format($format);
    }

    public function reverseName()
    {
        return strrev($this->name);
    }

    public function __set($name, $value)
    {
        if ($name === 'lastLogin') {
            $this->last_login = DateTime::createFromFormat('U', $value);
        }
    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
    }
}