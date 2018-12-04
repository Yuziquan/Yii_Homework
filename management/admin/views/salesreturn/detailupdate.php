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
        <h1><i class="fa fa-table"></i>退货表详细信息</h1>
        <a class="btn" href="<?php echo $this->createUrl('DetailIndex',array('id'=>$model_salesreturn->id)); ?>"><i class="fa fa-reply"></i>返回</a>

    </div><!--box-title end-->

    <div class="mt15">
        <table style='margin-top:5px;' align="center">
            <tr>
                <td width="25%"><?php echo $form->labelEx($model_salesreturn, 'salesreturn_id'); ?></td>
                <td width="25%"><?php echo $model_salesreturn->salesreturn_id; ?>
                </td>
                <td width="25%"><?php echo $form->labelEx($model_salesreturn, 'sales_id'); ?></td>
                <td width="25%"><?php echo $model_salesreturn->sales_id; ?>
                </td>
            </tr>
            <tr>
                <td width="25%"><?php echo $form->labelEx($model, 'product_id'); ?></td>
                <td width="25%"><?= $form->textField($model, 'product_id', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'product_id', $htmlOptions = array()); ?>
                </td>
                <td width="25%"><?php echo $form->labelEx($model, 'product_name'); ?></td>
                <td width="25%">
                    <?= $form->textField($model, 'product_name', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'product_name', $htmlOptions = array()); ?>
                </td>
            </tr>
            <tr>
                <td width="50%"><?php echo $form->labelEx($model, 'product_number'); ?></td>
                <td><?= $form->textField($model, 'product_number', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'product_number', $htmlOptions = array()); ?>
                <td width="50%"><?php echo $form->labelEx($model, 'return_money'); ?></td>
                <td><?= $form->textField($model, 'return_money', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'return_money', $htmlOptions = array()); ?>
                </td>
            </tr>
            <tr>
                <td width="50%"><?php echo $form->labelEx($model, 'product_units'); ?></td>
                <td><?= $form->textField($model, 'product_units', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'product_units', $htmlOptions = array()); ?>
                </td>
                <td width="50%"><?php echo $form->labelEx($model, 'product_specification'); ?></td>
                <td><?= $form->textField($model, 'product_specification', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'product_specification', $htmlOptions = array()); ?>
                </td>
            </tr>
            <tr>
                <td width=25%><?php echo $form->labelEx($model, 'registrant'); ?></td>
                <td width=25%>
                    <?= $form->textField($model, 'registrant', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'registrant', $htmlOptions = array()); ?>
                <td width="25%"><?php echo $form->labelEx($model, 'consignee'); ?></td>
                <td width="25%"><?= $form->textField($model, 'consignee', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'consignee', $htmlOptions = array()); ?>
                </td>
            </tr>

            <tr>
                <td width="50%"><?php echo $form->labelEx($model, 'return_date'); ?></td>
                <td><?= $form->textField($model, 'return_date', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'return_date', $htmlOptions = array()); ?>
                </td>
                <td width="50%"><?php echo $form->labelEx($model, 'register_date'); ?></td>
                <td width="50%">
                    <?= $form->textField($model, 'register_date', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'register_date', $htmlOptions = array()); ?>
                </td>
            </tr>

        </table>
    </div>
    <div class="box-detail-submit">
        <button class="btn btn-blue" type="submit">保存</button>
        <a class="btn" href="<?php echo $this->createUrl('DetailIndex',array('id'=>$model_salesreturn->id)); ?>">返回</a>
        <?php $this->endWidget(); ?>
    </div>
</div>
