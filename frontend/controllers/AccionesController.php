<?php

namespace frontend\controllers;

use Yii;
use app\models\Acciones;
use app\models\AccionesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AccionesController implements the CRUD actions for Acciones model.
 */
class AccionesController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Acciones models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AccionesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Acciones model.
     * @param integer $modcod
     * @param string $acccod
     * @return mixed
     */
    public function actionView($modcod, $acccod)
    {
        return $this->render('view', [
            'model' => $this->findModel($modcod, $acccod),
        ]);
    }

    /**
     * Creates a new Acciones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Acciones();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'modcod' => $model->modcod, 'acccod' => $model->acccod]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Acciones model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $modcod
     * @param string $acccod
     * @return mixed
     */
    public function actionUpdate($modcod, $acccod)
    {
        $model = $this->findModel($modcod, $acccod);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'modcod' => $model->modcod, 'acccod' => $model->acccod]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Acciones model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $modcod
     * @param string $acccod
     * @return mixed
     */
    public function actionDelete($modcod, $acccod)
    {
        $this->findModel($modcod, $acccod)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Acciones model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $modcod
     * @param string $acccod
     * @return Acciones the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($modcod, $acccod)
    {
        if (($model = Acciones::findOne(['modcod' => $modcod, 'acccod' => $acccod])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
