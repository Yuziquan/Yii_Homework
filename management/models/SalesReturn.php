<?php

/**
 * Created by PhpStorm.
 * User: mgh
 * Date: 2018/11/1
 * Time: 10:45
 */
class SalesReturn extends BaseModel
{
    /**
     * @inheritdoc
     */
    public function tableName()
    {
        return '{{sales_return_table}}';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array(
            array('salesreturn_id', 'required', 'message' => '{attribute}不能为空'),
            array('sales_id', 'required', 'message' => '{attribute}不能为空'),
            array('return_company', 'required', 'message' => '{attribute}不能为空'),
            array('salesman', 'required', 'message' => '{attribute}不能为空'),
            array('handler', 'required', 'message' => '{attribute}不能为空'),
            array('return_date', 'required', 'message' => '{attribute}不能为空'),
            //            array('remark', 'required', 'message' => '{attribute}不能为空'),
            array('warehouse_id,check,handler,return_department,salesreturn_id,sales_id,return_company,reason,salesman,return_date,remark', 'safe'),
        );
    }

    /**
     * @inheritdoc
     */
    public function relations()
    {
        return array();
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'salesreturn_id' => '退货单单号',
            'sales_id' => '销售单单号',//涉及到的销售单单号
            'reason' => '退货原因',
            'return_company' => '退货公司',
            'warehouse_id'=>'收货仓库',
            //            'quantity' => '退货数量',
            //            'product_name' => '货物名称',
            //            'original_price' => '原价',
            //            'real_price' => '销售价格',
            'salesman' => '销售员',
            'handler'=>'操作者',
            'return_date' => '退货日期',
            'remark' => '备注',
            'return_department'=>'退货部门',
            'check'=>'审核',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function getCode()
    {
        return $this->findAll('1=1');
    }
}