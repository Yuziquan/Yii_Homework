<?php
/**
 * Created by PhpStorm.
 * User: mgh
 * Date: 2018/9/29
 * Time: 19:17
 */
$form = $this->beginWidget('CActiveForm', get_form_list());
?>
<div class="box-detail">
    <div class="box-title c">
        <h1><i class="fa fa-table"></i>退货表基本信息</h1>
        <span class="back"><a class="btn" href="javascript:;" onclick="we.back();">
                <i class="fa fa-reply"></i>返回</a>
        </span>

    </div><!--box-title end-->

    <div class="mt15">
        <table style='margin-top:5px;' align="center">
            <tr class="table-title">
                <td colspan="4">单号信息</td>
            </tr>
            <tr>
                <td><?php echo $form->labelEx($model, 'sales_id'); ?></td>
                <td >
                    <?php echo $form->dropDownList($model, 'sales_id',
                        Chtml::listData(Item::model()->findAll(),
                            'sales_id', 'sales_id'),
                        array('prompt' => '请选择', 'onchange' => 'selectRecommendType(this)')); ?>
                </td>

                <td width="50%"><?php echo $form->labelEx($model, 'salesreturn_id'); ?></td>
                <td width="50%">
                    <?= $form->textField($model, 'salesreturn_id', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'salesreturn_id', $htmlOptions = array()); ?>
                </td>
            </tr>
        </table>

        <table style='margin-top:5px;'>
            <tr>
                <td width="25%"><?php echo $form->labelEx($model, 'salesman'); ?></td>
                <td><?= $form->textField($model, 'salesman', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'salesman', $htmlOptions = array()); ?>
                <td width="25%"><?php echo $form->labelEx($model, 'handler'); ?></td>
                <td><?= $form->textField($model, 'handler', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'handler', $htmlOptions = array()); ?>
                </td>
            </tr>
        </table>

        <table style='margin-top:5px;'>
            <tr>
                <td width=25%><?php echo $form->labelEx($model, 'return_company'); ?></td>
                <td width=25%>
                    <?= $form->textField($model, 'return_company', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'return_company', $htmlOptions = array()); ?>
                <td width="25%"><?php echo $form->labelEx($model, 'return_date'); ?></td>
                <td width="25%"><?= $form->textField($model, 'return_date', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'return_date', $htmlOptions = array()); ?>
                </td>
            </tr>
            <tr>
                <td width="50%"><?php echo $form->labelEx($model, 'reason'); ?></td>
                <td ><?= $form->textArea($model, 'reason', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'reason', $htmlOptions = array()); ?>
                </td>
                <td width="50%"><?php echo $form->labelEx($model, 'remark'); ?></td>
                <td ><?= $form->textArea($model, 'remark', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'remark', $htmlOptions = array()); ?>
                </td>
            </tr>
            <tr>
                <td width=50% ><?php echo $form->labelEx($model, 'return_department'); ?></td>
                <td width=50% >
                    <?= $form->textField($model, 'return_department', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'return_department', $htmlOptions = array()); ?>
                </td>
                <td width=50% ><?php echo $form->labelEx($model, 'check'); ?></td>
                <td>
                    <?= $form->textField($model, 'check', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'check', $htmlOptions = array()); ?>
                </td>
            </tr>

            <tr>
                <td><?php echo $form->labelEx($model, 'warehouse_id'); ?></td>
                <td colspan="3">
                    <?php echo $form->dropDownList($model, 'warehouse_id',
                        Chtml::listData(WareHouse::model()->findAll(),
                        'warehouse_id', 'warehouse_name'),
                        array('prompt' => '请选择', 'onchange' => 'selectRecommendType(this)')); ?>
                </td>
            </tr>


        </table>
    </div>
    <div class="box-detail-submit">
        <button class="btn btn-blue" type="submit">保存</button>
        <button class="btn" type="button" onclick="we.back();">取消</button>
        <?php $this->endWidget(); ?>
    </div>
</div>
