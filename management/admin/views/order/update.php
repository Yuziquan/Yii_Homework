<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>该订单的详细信息</h1><span class="back"><a class="btn"
                                                                                           href="javascript:;"
                                                                                           onclick="we.back();"><i
                    class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
        <?php $form = $this->beginWidget('CActiveForm', get_form_list()); ?>
        <div class="box-detail-tab">
            <ul class="c">
                <li class="current">订单信息</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
            <div style="display:block;" class="box-detail-tab-item">
                <table>
                    <tr class="table-title">
                        <td colspan="2">基本信息</td>
                    </tr>
                    <tr>
                        <td width="30%"><?php echo $form->labelEx($model, 'order_num'); ?></td>
                        <td width="30%">
                            <?php echo $form->textField($model, 'order_num', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'order_num', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'order_time'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'order_time', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'order_time', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'amount'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'amount', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'amount', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'client_name'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'client_name', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'client_name', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><?php echo $form->labelEx($model, 'phone_num'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'phone_num', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'phone_num', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><?php echo $form->labelEx($model, 'address'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'address', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'address', $htmlOptions = array()); ?>
                        </td>
                    </tr>


                    <tr>
                        <td><?php echo $form->labelEx($model, 'status'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'status', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'status', $htmlOptions = array()); ?>
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
