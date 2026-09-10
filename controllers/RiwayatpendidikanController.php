<?php

namespace backend\controllers;

use Yii;
use backend\models\Riwayatpendidikan;
use backend\models\RiwayatpendidikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatpendidikanController implements the CRUD actions for Riwayatpendidikan model.
 */
class RiwayatpendidikanController extends Controller
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
     * Lists all Riwayatpendidikan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatpendidikanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Riwayatpendidikan model.
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
     * Creates a new Riwayatpendidikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Riwayatpendidikan();

        $tahunSekarang = date("Y");
        $tahunAwal = $tahunSekarang - 20;
        $tahunAkhir = $tahunSekarang;
        $arrayTahun = array();

        foreach (range($tahunAwal, $tahunAkhir) as $n) {
        $arrayTahun[$n] = $n;
        }
 
        $arrayTahun = array_reverse($arrayTahun, true);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pendidikan]);
        }

        return $this->render('create', [
            'model' => $model,
            'arrayTahun' => $arrayTahun,
        ]);
    }

    /**
     * Updates an existing Riwayatpendidikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
         $tahunSekarang = date("Y");
        $tahunAwal = $tahunSekarang - 20;
        $tahunAkhir = $tahunSekarang;
        $arrayTahun = array();

        foreach (range($tahunAwal, $tahunAkhir) as $n) {
       // $arrayTahun=$model->tahun_lulus;
        $arrayTahun[$n] = $n;
        }
 
        $arrayTahun = array_reverse($arrayTahun, true);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pendidikan]);
        }

        return $this->render('update', [
            'model' => $model,
            'arrayTahun' => $arrayTahun,
        ]);
    }

    /**
     * Deletes an existing Riwayatpendidikan model.
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
     * Finds the Riwayatpendidikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Riwayatpendidikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Riwayatpendidikan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
