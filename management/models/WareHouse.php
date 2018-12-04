<?php

class WareHouse extends BaseModel
{
    /**
     * @inheritdoc
     */
    public function tableName()
    {
        return '{{warehouse}}';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array(
            array('warehouse_id', 'required', 'message' => '{attribute}不能为空'),
            array('warehouse_name', 'required', 'message' => '{attribute}不能为空'),

            array('check,handler,return_department,salesreturn_id,sales_id,return_company,reason,salesman,return_date,remark', 'safe'),
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
            'warehouse_id' => '退货单单号',
            'warehouse_name'=>'审核',
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