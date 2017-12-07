<?php

namespace frontend\controllers;

use Yii;
use app\models\Modgrupo;
use app\models\ModgrupoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ModgrupoController implements the CRUD actions for Modgrupo model.
 */
class ModgrupoController extends Controller
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
     * Lists all Modgrupo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ModgrupoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Modgrupo model.
     * @param integer $grupcod
     * @param integer $modcod
     * @return mixed
     */
    public function actionView($grupcod, $modcod)
    {
        return $this->render('view', [
            'model' => $this->findModel($grupcod, $modcod),
        ]);
    }

    /**
     * Creates a new Modgrupo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Modgrupo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'grupcod' => $model->grupcod, 'modcod' => $model->modcod]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Modgrupo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $grupcod
     * @param integer $modcod
     * @return mixed
     */
    public function actionUpdate($grupcod, $modcod)
    {
        $model = $this->findModel($grupcod, $modcod);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'grupcod' => $model->grupcod, 'modcod' => $model->modcod]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Modgrupo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $grupcod
     * @param integer $modcod
     * @return mixed
     */
    public function actionDelete($grupcod, $modcod)
    {
        $this->findModel($grupcod, $modcod)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Modgrupo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $grupcod
     * @param integer $modcod
     * @return Modgrupo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($grupcod, $modcod)
    {
        if (($model = Modgrupo::findOne(['grupcod' => $grupcod, 'modcod' => $modcod])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
