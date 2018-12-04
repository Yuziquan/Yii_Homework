<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>单位信息</h1><span class="back"><a class="btn"
     href="javascript:;"
     onclick="we.back();"><i
     class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
     <div class="box-detail">
        <?php $form = $this->beginWidget('CActiveForm', get_form_list()); ?>
        <div class="box-detail-tab">
            <ul class="c">
                <li class="current">商品信息</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
            <div style="display:block;" class="box-detail-tab-item">
                <table>
                    <tr class="table-title">
                        <td colspan="2">基本信息</td>
                    </tr>
                    <tr>
                        <td width="30%"><?php echo $form->labelEx($model, 'sales_id'); ?></td>
                        <td width="30%">
                            <?php echo $form->textField($model, 'sales_id', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'sales_id', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'sales_company'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'sales_company', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'sales_company', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'registrant_date'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'registrant_date', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'registrant_date', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'sales_man'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'sales_man', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'sales_man', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                </table>
                

            </div><!--box-detail-tab-item end   style="display:block;"-->

        </div><!--box-detail-bd end-->

        <div class="box-detail-submit">
            <button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button>
            <button class="btn" type="button" onclick="we.back();">取消</button>
        </div>

        <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
