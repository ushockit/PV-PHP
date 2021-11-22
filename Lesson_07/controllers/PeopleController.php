<?php

namespace app\controllers;

use app\business\dtos\CreatePersonDTO;
use app\business\dtos\PersonDTO;
use app\business\services\PeopleService;
use app\database\entities\PersonEntity;
use app\models\PersonModel;
use app\models\UploadFileModel;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class PeopleController extends Controller {
    public function actionAll() {
        $peopleService = new PeopleService();
        $people = $peopleService->getAllPeople();
        return $this->render('all', [
            'people' => $people
        ]);
    }

    public function actionCreate() {
        $model = new PersonModel();
        $fileModel = new UploadFileModel();
        $request = Yii::$app->request;

        if ($request->isPost) {
            $fileModel->imageFile = UploadedFile::getInstance($fileModel, 'imageFile');
            $validated = $model->validate() && $fileModel->validate();
            if ($model->load($request->post()) && $validated) {
                $fileModel->saveImage();

                $peopleService = new PeopleService();
                $personDto = new CreatePersonDTO();
                $personDto->firstName = $model->firstName;
                $personDto->lastName = $model->lastName;

                $peopleService->createNewPerson($personDto);
                return Yii::$app->response->redirect(['/']);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'fileModel' => $fileModel
        ]);
    }
}