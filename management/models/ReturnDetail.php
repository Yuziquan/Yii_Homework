<?php

/**
 * This is the model class for table "return_detail".
 *
 * The followings are the available columns in table 'return_detail':
 * @property string $returnproduct_name
 * @property integer $returnproduct_number
 * @property string $return_date
 * @property string $registrant
 * @property string $id
 * @property string $return_money
 * @property string $consignee
 * @property string $table_id
 * @property string $register_date
 * @property string $product_id
 * @property string $product
 */
class ReturnDetail extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{return_detail}}';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
        return array(
//            array('register_date', 'required', 'message' => '{attribute}不能为空'),
            array('product_name', 'required', 'message' => '{attribute}不能为空'),
            array('product_number', 'required', 'message' => '{attribute}不能为空'),
            array('return_date', 'required', 'message' => '{attribute}不能为空'),
//            array('registrant', 'required', 'message' => '{attribute}不能为空'),
//            array('consignee', 'required', 'message' => '{attribute}不能为空'),
            array('return_money', 'required', 'message' => '{attribute}不能为空'),
            array('product_id', 'required', 'message' => '{attribute}不能为空'),

            array('product_specification,product_units,product_id,register_date,return_money,returnproduct_number,return_date,registrant,consignee,consignee', 'safe'),
        );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
		    'id'=>'ID',
            'table_id'=>'关联销售单id',
			'register_date'=>'登记日期',
			'product_name' => '商品名称',
			'product_number' => '退货数量',
			'return_date' => '退货日期',
			'registrant' => '登记员',
			'return_money' => '退货金额',
            'consignee'=>'收货人',
            'product_id'=>'商品编号',
            'product_units'=>'单位',
            'product_specification'=>'规格',
		);
	}



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReturnDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function getCode()
    {
        return $this->findAll('1=1');
    }
}
