<?php
/**
 * Created by PhpStorm.
 * User: mgh
 * Date: 2018/9/29
 * Time: 19:17
 */
$form = $this->beginWidget('CActiveForm', get_form_list());
?>
<div class="biaoge">
    <div class="box-detail">
        <div class="box-title c">
            <h1><i class="fa fa-table" data-align="center"></i>退货表</h1>
        </div><!--box-title c end-->

        <div class="mt15">
            <table style='margin-top:5px;' align="center">
                <tr class="table-title">
                    <td colspan="4"><b>单号信息</b></td>
                </tr>

                <tr>
                    <td width="50%"><?php echo $form->labelEx($model, 'sales_id'); ?></td>
                    <td width="50%"><?= $model->sales_id; ?></td>
                    <td width="50%"><?php echo $form->labelEx($model, 'salesreturn_id'); ?></td>
                    <td width="50%"><?= $model->salesreturn_id; ?></td>
                </tr>

                <tr>
                    <td width="50%"><?php echo $form->labelEx($model, 'salesman'); ?></td>
                    <td width="50%"><?= $model->salesman; ?></td>
                    <td width="50%"><?php echo $form->labelEx($model, 'handler'); ?></td>
                    <td width="50%"><?= $model->handler; ?></td>
                    </td>
                </tr>

                <tr>
                    <td width="50%"><?php echo $form->labelEx($model, 'return_company'); ?></td>
                    <td width="50%"><?= $model->return_company; ?></td>

                    <td width="50%"><?php echo $form->labelEx($model, 'return_date'); ?></td>
                    <td width="50%"><?= $model->return_date; ?></td>

                    </td>
                </tr>
                <tr>
                    <td width="50%"><?php echo $form->labelEx($model, 'reason'); ?></td>
                    <td width="50%"><?= $model->reason; ?></td>

                    <td width="50%"><?php echo $form->labelEx($model, 'remark'); ?></td>
                    <td width="50%"><?= $model->remark; ?></td>
                </tr>
                <tr>
                    <td ><?php echo $form->labelEx($model, 'return_company'); ?></td>
                    <td ><?= $model->return_company; ?></td></td>
                    <td width="50%"><?php echo $form->labelEx($model, 'check'); ?></td>
                    <td width="50%"><?= $model->check; ?></td>
                </tr>
            </table>
        </div>
        <div class="box-detail-submit">
            <a class="btn btn-blue" href="<?php echo $this->createUrl('update', array('id' => $model->id)); ?>"><b>编辑</b></a>
            <button class="btn" type="button" onclick="we.back();">返回</button>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>

<style>
    .box-detail {
        padding: 20px;
    }

    .box-detail table, .box-detail-table {
        table-layout: fixed;
        width: 80%;
        border-spacing: 1px;
        border-collapse: separate;
        background: #ccc;
    }

    .box-detail td, .box-detail-table td {
        padding: 10px;
        background: #fff;
    }

    .box-detail span.required {
        overflow: hidden;
        line-height: 100px;
    }

    .box-detail .errorMessage {
        display: block;
        padding-top: 3px;
        color: #f00;
    }
    .table-title td{
        background:#efefef;}

</style>
