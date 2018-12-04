<div class="box">
    <div class="box-content">
        <div class="box-header">
            <a class="btn"
               href="<?php echo $this->createUrl('detailcreate', array('id' => $model_salesreturn->id)); ?>"><i
                        class="fa fa-plus"></i>添加退货详细信息</a>
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>
            <span class="back"><a class="btn" href="javascript:;" onclick="we.back();">
                <i class="fa fa-reply"></i>返回</a>
            </span>

            <a style="display:none;" id="j-delete" class="btn" href="javascript:;"
               onclick="we.dele(we.checkval('.check-item input:checked'), deleteUrl);"><i
                        class="fa fa-trash-o"></i>删除</a>
            </a><!--box-header end-->
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
            <h1 align="center">退货详细单</h1>
            <table class="salesreturn">
                <tr>
                    <th><?php echo $model_salesreturn->getAttributeLabel('sales_id') . ':' . $model_salesreturn->sales_id . '<br>'; ?></th>
                    <th class="right"><?php echo $model_salesreturn->getAttributeLabel('salesman') . ':' . $model_salesreturn->salesman . '<br>'; ?></th>

                </tr>
                <tr>
                    <th><?php echo $model_salesreturn->getAttributeLabel('salesreturn_id') . ':' . $model_salesreturn->salesreturn_id . '<br>'; ?></th>
                    <th class="right"><?php echo $model_salesreturn->getAttributeLabel('handler') . ':' . $model_salesreturn->handler . '<br>'; ?></th>
                </tr>
            </table>
            <div class="box-table">
                <table class="list">
                    <thead>
                    <tr>
                        <th class="check"><input id="j-checkall" class="input-check" type="checkbox"></th>
                        <th><?php echo $model->getAttributeLabel('product_name'); ?></th>
                        <th><?php echo $model->getAttributeLabel('product_number'); ?></th>
                        <th><?php echo $model->getAttributeLabel('product_id'); ?></th>
                        <th><?php echo $model->getAttributeLabel('product_units'); ?></th>
                        <th><?php echo $model->getAttributeLabel('product_specification'); ?></th>
                        <th><?php echo $model->getAttributeLabel('registrant'); ?></th>
                        <th><?php echo $model->getAttributeLabel('consignee'); ?></th>
                        <th><?php echo $model->getAttributeLabel('return_money'); ?></th>
                        <th><?php echo $model->getAttributeLabel('register_date'); ?></th>
                        <th><?php echo $model->getAttributeLabel('return_date'); ?></th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($arclist as $v) { ?>
                        <tr>
                            <td class="check check-item"><input class="input-check" type="checkbox"
                                                                value="<?php echo CHtml::encode($v->id); ?>"></td>
                            <td title="编辑详细信息"><?php echo CHtml::link($v->product_name, array('detailupdate','id_returndetail' => $v->id, 'id_salesreturn' => $model_salesreturn->id)); ?></td>
                            <td ><?php echo $v->product_number; ?></td>
                            <td><?php echo $v->product_id; ?></td>
                            <td><?php echo $v->product_units; ?></td>
                            <td><?php echo $v->product_specification; ?></td>
                            <td><?php echo $v->registrant; ?></td>
                            <td><?php echo $v->consignee; ?></td>
                            <td><?php echo $v->return_money; ?></td>
                            <td><?php echo $v->register_date; ?></td>
                            <td><?php echo $v->return_date; ?></td>
                            <td>
                                <a class="btn"
                                   href="<?php echo $this->createUrl('detailupdate', array('id_returndetail' => $v->id, 'id_salesreturn' => $model_salesreturn->id)); ?>"
                                   title="编辑"><i class="fa fa-edit"></i></a>
                                <a class="btn" href="javascript:;"
                                   onclick="we.dele('<?php echo $v->id; ?>', deleteUrl);"
                                   title="删除"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    <table class="salesreturn">
                        <tr>
                            <th><?php echo $model_salesreturn->getAttributeLabel('return_department') . ':' . $model_salesreturn->return_department . '<br>'; ?></th>
                        </tr>
                        <tr>
                            <th><?php echo $model_salesreturn->getAttributeLabel('check') . ':' . $model_salesreturn->check . '<br>'; ?></th>
                            <th class="right"><?php echo $model_salesreturn->getAttributeLabel('return_date') . ':' . $model_salesreturn->return_date . '<br>'; ?></th>
                        </tr>
                        <tr>
                            <th colspan="2"><?php echo $model_salesreturn->getAttributeLabel('reason') . ':' . $model_salesreturn->reason . '<br>'; ?></th>
                        </tr>
                        <tr>
                            <th colspan="2"><?php echo $model_salesreturn->getAttributeLabel('remark') . ':' . $model_salesreturn->remark . '<br>'; ?></th>
                        </tr>
                    </table>
                </table>
            </div><!--box-table end-->
            <div class="box-page c"><?php $this->page($pages); ?></div>
        </div><!--box-content end-->


    </div><!--box end-->
    <script>
        var deleteUrl = '<?php echo $this->createUrl('detaildelete', array('id' => 'ID')); ?>';
    </script>


