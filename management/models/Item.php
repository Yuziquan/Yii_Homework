<?php

class Item extends BaseModel
{
    public function tableName()
    {
        return '{{item_table}}';   //数据库表的名字
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {

        return array(
            array('sales_id', 'required', 'message' => '{attribute} 不能为空'),
            array('sales_company', 'required', 'message' => '{attribute} 不能为空'),
            array('registrant_date', 'required', 'message' => '{attribute} 不能为空'),
            array('sales_man', 'required', 'message' => '{attribute} 不能为空'),
            array('sales_man,registrant_date,sales_company,sales_id', 'safe')

        );
    }

    /**
     * 模型关联规则
     */
    public function relations()
    {
        return array();
    }

    /**
     * 属性标签
     */
    public function attributeLabels()
    {
        return [
            'sales_id' => '销售单编号',
            'id' => 'ID',
            'sales_company' => '销售公司',
            'registrant_date' => '登记日期',
            'sales_man' => '销售员',
        ];
    }

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


    public function getCode()
    {
        return $this->findAll('1=1');
    }
}
