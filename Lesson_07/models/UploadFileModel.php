<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;


class UploadFileModel extends Model {
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
        ];
    }

    public function saveImage() {
        $savePath = 'uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
        $this->imageFile->saveAs($savePath);
        return $savePath;
    }
}