<div class="box">
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create'); ?>"><i class="fa fa-plus"></i>添加订单</a>
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>
            <a style="display:none;" id="j-delete" class="btn" href="javascript:;"
               onclick="we.dele(we.checkval('.check-item input:checked'), deleteUrl);"><i
                    class="fa fa-trash-o"></i>删除</a>
        </div><!--box-header end-->
        <div class="box-search">
            <form action="<?php echo Yii::app()->request->url; ?>" method="get">
                <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r'); ?>">
                <label style="margin-right:10px;">
                    <span>关键字：</span>
                    <input style="width:200px;" class="input-text" type="text" name="keywords"
                           value="<?php echo Yii::app()->request->getParam('keywords'); ?>">
                </label>
                <button class="btn btn-blue" type="submit">查询订单单号</button>
            </form>
        </div><!--box-search end-->
        <div class="box-table">
            <table class="list">
                <thead>
                <tr>
                    <th class="check"><input id="j-checkall" class="input-check" type="checkbox"></th>
                    <th><?php echo $model->getAttributeLabel('order_num'); ?></th>
                    <th><?php echo $model->getAttributeLabel('order_time'); ?></th>
                    <th><?php echo $model->getAttributeLabel('amount'); ?></th>
                    <th><?php echo $model->getAttributeLabel('client_name'); ?></th>
                    <th><?php echo $model->getAttributeLabel('phone_num'); ?></th>
                    <th><?php echo $model->getAttributeLabel('address'); ?></th>
                    <th><?php echo $model->getAttributeLabel('review'); ?></th>  
                    <th><?php echo $model->getAttributeLabel('status'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0; $j=0; $k=0; foreach ($arclist as $v) { $i=2*$k; $j=2*$k+1; $k+=1;?>
                    <tr>
                        <td class="check check-item"><input class="input-check" type="checkbox"
                                                            value="<?php echo CHtml::encode($v->id); ?>"></td>
                        <td><?php echo CHtml::link($v->order_num, array('update', 'id' => $v->id)); ?></td>
                        <td><?php echo CHtml::link($v->order_time, array('update', 'id' => $v->id)); ?></td>
                        <td><?php echo CHtml::link($v->amount, array('update', 'id' => $v->id)); ?></td>
                        <td><?php echo CHtml::link($v->client_name, array('update', 'id' => $v->id)); ?></td>
                        <td><?php echo CHtml::link($v->phone_num, array('update', 'id' => $v->id)); ?></td>
                        <td><?php echo CHtml::link($v->address, array('update', 'id' => $v->id)); ?></td>
                        <td>
                            <?php
                                //node 为表单name
                                echo CHtml::dropDownList($i, $v->review_id,CHtml::listData(People::model()->findAll(),'id','name'),
                                        array(
                                        'empty'=>'请选择审核人员',    //空数据时填充 
                                        'id' => $i,             //相当js id
                                        'ajax'=>array(  
                                            'type'=>'POST',  
                                            'url'=>Yii::app()->createUrl('review/getNode'),  
                                            'update'=>'#'.$j, //要更新的dom元素 名称
                                            'data'=>array('id'=>'js:$("#node").val()'),  //jq id选择上面node
                                            'data'=>array('id'=>"js:$(\"#".$i."\").val()",'orderID'=>$v->id),
                                        ) 
                                    )         
                                );  
                            ?>
                        </td>
                        <td>
                            <?php         
                                echo CHtml::dropDownList($j, $v->review_id, CHtml::listData(People::model()->findAll(),'id','status')); 
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!--box-table end-->
        <div class="box-page c"><?php $this->page($pages); ?></div>
    </div><!--box-content end-->
</div><!--box end-->
<script>
    var deleteUrl = '<?php echo $this->createUrl('delete', array('id' => 'ID')); ?>';
</script>
