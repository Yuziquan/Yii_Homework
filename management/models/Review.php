<?php


class Review extends BaseModel
{
    public function tableName()
    {
        return '{{order_table}}';   //订单表的名字
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {

        return array(

            array('order_num', 'required', 'message' => '{attribute} 不能为空'),
            array('order_time', 'required', 'message' => '{attribute} 不能为空'),
            array('amount', 'required', 'message' => '{attribute} 不能为空'),
            array('client_name', 'required', 'message' => '{attribute} 不能为空'),
            array('phone_num', 'required', 'message' => '{attribute} 不能为空'),
            array('address', 'required', 'message' => '{attribute} 不能为空'),
            array('status', 'required', 'message' => '{attribute} 不能为空'),
            array('review_id', 'required', 'message' => '{attribute} 不能为空'),
            array('order_num, order_time, amount, client_name, phone_num, address, status, review_id', 'safe')

        );
    }
    public function getPeople()
    {
        return $this->hasOne(People::className(), ['review_id' => 'id']);
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
            'id' => 'ID',
            'order_num' => '订单编号',
            'order_time' => '下单时间',
            'amount' => '总金额',
            'client_name' => '客户名称',
            'phone_num' => '手机号码',
            'address' => '送货地址',
            'status' => '审核状态',
            'review' => '审核人员',

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