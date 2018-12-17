<?php

class OrderDetail extends BaseModel
{
    public function tableName()
    {
        return '{{order_detail}}';   //数据库表的名字
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {

        return array(
            array('price', 'required', 'message' => '{attribute} 不能为空'),
            array('count', 'required', 'message' => '{attribute} 不能为空'),
            array('name', 'required', 'message' => '{attribute} 不能为空'),
            array('product_id', 'required', 'message' => '{attribute} 不能为空'),
            array('product_id,name,price,count,type,', 'safe')

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
            'name' => '商品名',
            'id' => 'ID',
            'product_id' => '商品编号',
            'price' => '单价',
            'count' => '数量',
            'type' => '种类',
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
