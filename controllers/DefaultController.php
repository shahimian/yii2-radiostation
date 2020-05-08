<?php

namespace shahimian\radiostation\controllers;

use Yii;
use shahimian\radiostation\models\RadioSource;
use shahimian\radiostation\models\RadioSourceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * DefaultController implements the CRUD actions for RadioSource model.
 */
class DefaultController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all RadioSource models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RadioSourceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RadioSource model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RadioSource model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RadioSource();

        if ($model->load(Yii::$app->request->post())) {

            $this->saveAll($model);

            if($model->save(false))
                return $this->redirect(['view', 'id' => $model->source_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RadioSource model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $this->saveAll($model);

            if($model->save(false))
                return $this->redirect(['view', 'id' => $model->source_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function saveAll($model){
        $model->source_audio_file = UploadedFile::getInstance($model, 'source_audio_file');
        $model->source_picture_file = UploadedFile::getInstance($model, 'source_picture_file');
        $model->upload();
        $model->source_audio = $model->source_audio_file->basename;
        $model->source_picture = $model->source_picture_file->basename . '.' . $model->source_picture_file->extension;
        $model->datetime = date("Y-m-d H:i:s");
        return true;
    }

    /**
     * Deletes an existing RadioSource model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RadioSource model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RadioSource the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RadioSource::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
