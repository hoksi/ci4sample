<?php
namespace App\Controllers\Incomming;

use App\Controllers\BaseController;

/**
 * Description of Upload
 *
 * @author hoksi
 */
class Upload extends BaseController
{
    public function index()
    {
        helper('form');
        
        echo form_open_multipart('/incomming/upload/up');
        echo 'Single file : <input type="file" name="single" /><br/>';
        echo 'Multi files : <input type="file" name="multi[]" /><input type="file" name="multi[]" /><br/>';
        echo '<button>업로드</button>';
        echo '</form>';
    }

    public function up()
    {
        $files = $this->request->getFiles();

        echo '<a href="/incomming/upload">Back</a>';
        
        // 단일 파일
        if (!empty($files['single'])) {
            !d($this->fileInfo($files['single']));
        }

        // 멀티 파일
        if (!empty($files['multi'])) {
            foreach($files['multi'] as $file) {
                !d($this->fileInfo($file));
            }
        }
        
        echo '<a href="/incomming/upload">Back</a>';
    }

    protected function fileInfo($file)
    {
        /* @var $file \CodeIgniter\HTTP\Files\UploadedFile */
        
        return [
            'Error' => $file->getError(),
            'ErrorString' => $file->getErrorString(),
            'Name' => $file->getName(),
            'RandomName' => $file->getRandomName(),
            'Size' => $file->getSize('mb'),
            'Extension' => $file->getExtension(),
            'Type' => $file->getType(),
        ];
    }
}