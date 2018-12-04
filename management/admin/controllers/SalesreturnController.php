<?php

/**
 * Created by PhpStorm.
 * User: mgh
 * Date: 2018/10/18
 * Time: 20:56
 */
class SalesReturnController extends BaseController
{

    protected $model = '';

    public function init()
    {
        $this->model = substr(__CLASS__, 0, -10);
        parent::init();
        //dump(Yii::app()->request->isPostRequest);
    }

    public function actionDelete($id)
    {
        $this->_clear($id);
    }

    function _clear($id, $redirect = '', $keyname = 'id')
    {
        //清除基本表信息
        $modelName = $this->model;
        $model = $modelName::model();

        $returntable_id = $this->loadModel($id, $modelName)->salesreturn_id;
        $count = $model->deleteAll($keyname . ' in (' . $id . ')');

        //清除基本表所包含详细表信息
        $modelName = 'ReturnDetail';
        $model = $modelName::model();
        $model->deleteAll('salesreturn_id in (' . $returntable_id . ')');

        if ($count > 0) {
            ajax_status(1, '删除成功', $redirect);
        } else {
            ajax_status(0, '删除失败');
        }
    }


    public function actionCreate()
    {
        $modelName = $this->model;
        $model = new $modelName('create');
        $data = array();
        if (!Yii::app()->request->isPostRequest) {
            $data['model'] = $model;
            $this->render('update', $data);
        } else {
            $this->saveData($model, $_POST[$modelName], '_currentUrl_');
        }
    }

    public function actionRead($id)
    {
        $modelName = $this->model;
        $model = $this->loadModel($id, $modelName);
        $data['model'] = $model;
        $this->render('read', $data);
    }

    public function actionUpdate($id)
    {
        $modelName = $this->model;
        $model = $this->loadModel($id, $modelName);
        if (!Yii::app()->request->isPostRequest) {
            $data = array();
            $data['model'] = $model;
            $this->render('update', $data);
        } else {
            $this->saveData($model, $_POST[$modelName], '_currentUrl_');//页面转换在此实现
        }
    }/*曾老师保留部份，---结束*/

    function saveData($model, $post, $url)
    {
        $model->attributes = $post;
        put_msg($post);
        show_status($model->save(), '保存成功', get_cookie($url), '保存失败');
    }


    ///列表搜索
    public function actionIndex($keywords = '')
    {
        set_cookie('_currentUrl_', Yii::app()->request->url);
        $modelName = $this->model;
        $model = $modelName::model();
        $criteria = new CDbCriteria;
        $criteria->order = 'salesreturn_id';
        $data = array();
        parent::_list($model, $criteria, 'index', $data);
    }

    public function actionDetailIndex($id)
    {
        $modelName = $this->model;
        $model_salesreturn = $this->loadModel($id, $modelName);
        $model = new ReturnDetail();
        set_cookie('_DetailIndexUrl_', $this->createUrl('DetailIndex', array('id' => $model_salesreturn->id)));
        $criteria = new CDbCriteria;
        $criteria->addCondition("table_id=$model_salesreturn->id");
        $data = array(
            'model_salesreturn' => $model_salesreturn,
        );
        parent::_list($model, $criteria, 'DetailIndex', $data);
    }

    public function actionDetailCreate($id)
    {
        $modelName0 = $this->model;
        $model_salesreturn = $this->loadModel($id, $modelName0);
        $modelName = 'ReturnDetail';
        $model = new $modelName('create');
        $model->table_id = $model_salesreturn->id;
        $data = array();
        if (!Yii::app()->request->isPostRequest) {
            $data['model'] = $model;
            $data['model_salesreturn'] = $model_salesreturn;
            $this->render('detailupdate', $data);
        } else {

            $this->saveData($model, $_POST[$modelName], '_DetailIndexUrl_');
        }
    }

    public function actionDetailUpdate($id_returndetail, $id_salesreturn)
    {
        $modelName = $this->model;
        $model_salesreturn = $this->loadModel($id_salesreturn, $modelName);

        $modelName = 'ReturnDetail';
        $model = $this->loadModel($id_returndetail, $modelName);

        if (!Yii::app()->request->isPostRequest) {
            $data = array();
            $data['model'] = $model;
            $data['model_salesreturn'] = $model_salesreturn;
            $this->render('detailupdate', $data);
        } else {
            $this->saveData($model, $_POST[$modelName], '_DetailIndexUrl_');//页面转换在此实现
        }
    }

    public function actionDetailDelete($id)
    {
        $this->_detailclear($id);
    }

    function _detailclear($id, $redirect = '', $keyname = 'id')
    {
        $modelName = 'ReturnDetail';
        $model = $modelName::model();
        $count = $model->deleteAll($keyname . ' in (' . $id . ')');
        if ($count > 0) {
            ajax_status(1, '删除成功', $redirect);
        } else {
            ajax_status(0, '删除失败');
        }
    }
}
