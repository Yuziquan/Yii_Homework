<?php


class People extends BaseModel
{
    public function tableName()
    {
        return '{{people}}';   //订单表的名字
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {

        return array(

            array('name', 'required', 'message' => '{attribute} 不能为空'),
            array('status', 'required', 'message' => '{attribute} 不能为空'),
            array('name, status', 'safe')

        );
    }
    public function getPeople()
    {
        return $this->hasOne(People::className(), ['review_id' => 'id']);
    }
    //add by hxl
	public function getStatus($id)
	{
        $sql = "SELECT id,status FROM people WHERE id = '{$id}' ";
        $cmd = Yii::app()->db->createCommand($sql);  
  
        $ret = $cmd->queryAll();  
        if (!$ret){  
                throw new Exception("找不到了 歇歇吧");  
        }  
        return $ret; 
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
            'name' => '审核人员',
            'status' => '审核状态',
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