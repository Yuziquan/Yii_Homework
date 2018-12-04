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
        <a class="btn" href="<?php echo $this->createUrl('DetailIndex',array('id'=>$model_item->id)); ?>"><i class="fa fa-reply"></i>返回</a>

    </div><!--box-title end-->

    <div class="mt15">
        <table style='margin-top:5px;' align="center">
            <tr>
                <td ><?php echo $form->labelEx($model_item, 'sales_id'); ?></td>
                <td  ><?php echo $model_item->sales_id; ?></td>
                <td ><?php echo $form->labelEx($model, 'type'); ?></td>
                <td ><?= $form->textField($model, 'type', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'type', $htmlOptions = array()); ?></td>
            </tr>
            <tr>
                <td width="25%"><?php echo $form->labelEx($model, 'product_id'); ?></td>
                <td width="25%"><?= $form->textField($model, 'product_id', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'product_id', $htmlOptions = array()); ?>
                </td>
                <td width="25%"><?php echo $form->labelEx($model, 'name'); ?></td>
                <td width="25%">
                    <?= $form->textField($model, 'name', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'name', $htmlOptions = array()); ?>
                </td>
            </tr>
            <tr>
                <td width="50%"><?php echo $form->labelEx($model, 'price'); ?></td>
                <td><?= $form->textField($model, 'price', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'price', $htmlOptions = array()); ?>
                <td width="50%"><?php echo $form->labelEx($model, 'count'); ?></td>
                <td><?= $form->textField($model, 'count', array('class' => 'input-text')); ?>
                    <?php echo $form->error($model, 'count', $htmlOptions = array()); ?>
                </td>
            </tr>

        </table>
    </div>
    <div class="box-detail-submit">
        <button class="btn btn-blue" type="submit">保存</button>
        <a class="btn" href="<?php echo $this->createUrl('DetailIndex',array('id'=>$model_item->id)); ?>">返回</a>
        <?php $this->endWidget(); ?>
    </div>
</div>
