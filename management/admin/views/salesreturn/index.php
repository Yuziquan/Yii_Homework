<div class="box">
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create'); ?>"><i class="fa fa-plus"></i>添加退货单</a>
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
                <button class="btn btn-blue" type="submit">查询</button>
            </form>
        </div><!--box-search end-->
        <div class="box-table">
            <table class="list">
                <thead>
                <tr>
                    <th class="check"><input id="j-checkall" class="input-check" type="checkbox"></th>
                    <th width=9%><?php echo $model->getAttributeLabel('salesreturn_id'); ?></th>
                    <th width=9%><?php echo $model->getAttributeLabel('sales_id'); ?></th>
                    <th width=5%><?php echo $model->getAttributeLabel('salesman'); ?></th>
                    <th width=5%><?php echo $model->getAttributeLabel('handler'); ?></th>
                    <th width=8%><?php echo $model->getAttributeLabel('return_department'); ?></th>
                    <th width=8%><?php echo $model->getAttributeLabel('return_company'); ?></th>
                    <th width=9%><?php echo $model->getAttributeLabel('return_date'); ?></th>
                    <th width=16%><?php echo $model->getAttributeLabel('reason'); ?></th>
                    <th width=12%><?php echo $model->getAttributeLabel('remark'); ?></th>
                    <th width="5%"><?php echo $model->getAttributeLabel('check'); ?></th>
                    <th width=14%>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arclist as $v) { ?>
                    <tr>
                        <td class="check check-item"><input class="input-check" type="checkbox"
                                                            value="<?php echo CHtml::encode($v->id); ?>"></td>
                        <td><?php echo CHtml::link($v->salesreturn_id, array('update', 'id' => $v->id)); ?></td>
                        <td><?php echo CHtml::link($v->sales_id, array('update', 'id' => $v->id)); ?></td>
                        <td><?php echo $v->salesman; ?></td>
                        <td><?php echo $v->handler; ?></td>
                        <td><?php echo $v->return_department; ?></td>
                        <td><?php echo $v->return_company; ?></td>
                        <td><?php echo $v->return_date; ?></td>
                        <td><?php echo $v->reason; ?></td>
                        <td><?php echo $v->remark; ?></td>
                        <td><?php echo $v->check; ?></td>
                        <td>
                            <a class="btn" href="<?php echo $this->createUrl('update', array('id' => $v->id)); ?>"
                               title="编辑退货基本信息"><i class="fa fa-edit"></i></a>
                            <a class="btn" href="<?php
                            //                            怎么将直接将模型作为参数传入?
                            //
                            //                                  $base_info=array(
                            //                                'salesreturn_id' => $v->salesreturn_id,
                            //                                'sales_id' => $v->sales_id,
                            //                                'salesman' => $v->salesman,
                            //                                'registrant' => $v->registrant,
                            //                                'return_department' => $v->return_department,
                            //                                'return_company' => $v->return_company,
                            //                                'return_date' => $v->return_date,
                            //                                'reason' => $v->reason,
                            //                                'remark' => $v->remark,
                            //                                    );
                            //                           put_msg($base_info);
                            echo $this->createUrl('DetailIndex', array('id' => $v->id)); ?>"
                               title="编辑退货详细信息"><i class="fa fa-columns"></i></a>
                            <a class="btn" href="<?php echo $this->createUrl('read', array('id' => $v->id)); ?>"
                               title="查看"><i class="fa fa-eye"></i></a>
                            <a class="btn" href="javascript:;" onclick="we.dele('<?php echo $v->id; ?>', deleteUrl);"
                               title="删除"><i class="fa fa-trash-o"></i></a>
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
