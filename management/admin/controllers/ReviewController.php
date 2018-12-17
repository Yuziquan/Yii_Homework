<?php
/**
 * Created by PhpStorm.
 * User: cmh
 * Date: 2018/12/14
 * Time: 21:40
 */
class ReviewController extends BaseController
{
    protected $model = '';
    public function init()
    {
        $this->model = substr(__CLASS__, 0, -10);
        parent::init();
        //dump(Yii::app()->request->isPostRequest);
    }


    protected function getPeople()
    {
        $query = CHtml::listData(People::model()->findAll(),'id','name');
        return $query;
    }

    public function actionGetNode()
    {
     
        $user_list = People::model()->getStatus($_POST['id']); //通过节点ID 匹配用户  
        if(!$user_list)
        {
            echo CHtml::tag('option', array('value'=>''), '暂无', true); 
        }
        
        foreach($user_list as $k => $v){
          echo CHtml::tag('option', array('value'=>$v['id']), CHtml::encode($v['status']), true);
        }
        $id = $_POST['orderID'];
        $modelName = $this->model;
        $model_order=$this->loadModel($id,$modelName);
        $model_order->review_id=$_POST['id'];
        $model_order->save();
    }

    public function actionDelete($id)
    {
        $this->_clear($id);
    }


    function _clear($id, $redirect = '',$keyname='id') {
        //清除基本表信息
        $modelName = $this->model;
        $model = $modelName::model();
        $count = $model->deleteAll($keyname.' in (' . $id . ')');

        //清除基本表所包含详细表信息
        $modelName='OrderDetail';
        $model=$modelName::model();
        $model->deleteAll('table_id in ('.$id.')');

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

//    public function actionRead($id)
//    {
//        $modelName = $this->model;
//        $model = $this->loadModel($id, $modelName);
//        $data['model'] = $model;
//        $this->render('read', $data);
//    }

/****/
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
        $criteria->order = 'id';
        if (!empty($keywords)) {
            $criteria->condition = "order_num like '%" . $keywords . "%'";
        }
        $data = array();
        $people=CHtml::listData(People::model()->findAll(),'id','status');

        parent::_list($model, $criteria, 'index', $data, 15 , $people);
    }

    /****/

    public function actionDetailIndex($id,$keywords='')
    {
        $modelName = $this->model;
        $model_order=$this->loadModel($id,$modelName);
        $model = new OrderDetail();
        set_cookie('_DetailIndexUrl_', $this->createUrl('DetailIndex',array('id'=>$model_order->id)));
        $criteria = new CDbCriteria;
        $criteria->addCondition("table_id=$model_order->id");
        if (!empty($keywords)) {
            $criteria->condition = "product_name like '%" . $keywords . "%'";
        }
        $data = array(
            'model_order'=>$model_order,
        );
        parent::_list($model, $criteria, 'DetailIndex', $data);
    }

    public function actionDetailCreate($id)
    {
        $modelName0 = $this->model;
        $model_order=$this->loadModel($id,$modelName0);
        $modelName = 'OrderDetail';
        $model = new $modelName('create');
        $model->table_id=$model_order->id;
        $data = array();
        if (!Yii::app()->request->isPostRequest) {
            $data['model'] = $model;
            $data['model_order']=$model_order;
            $this->render('detailupdate', $data);
        } else {

            $this->saveData($model, $_POST[$modelName], '_DetailIndexUrl_');
        }
    }

    public function actionDetailUpdate($id_orderdetail,$id_order)
    {
        $modelName = $this->model;
        $model_order=$this->loadModel($id_order,$modelName);

        $modelName = 'OrderDetail';
        $model = $this->loadModel($id_orderdetail, $modelName);
        $model->table_id=$model_order->id;
        if (!Yii::app()->request->isPostRequest) {
            $data = array();
            $data['model'] = $model;
            $data['model_order']=$model_order;
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
        $modelName = 'OrderDetail';
        $model = $modelName::model();
        $count = $model->deleteAll($keyname . ' in (' . $id . ')');
        if ($count > 0) {
            ajax_status(1, '删除成功', $redirect);
        } else {
            ajax_status(0, '删除失败');
        }
    }

}