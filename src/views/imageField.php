<div class="fileinput fileinput-new" data-provides="fileinput">
    <div class="fileinput-new thumbnail" style="width:100%; height:100%;">
        <?=$thumbnail;?>
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width:200px; max-height:200px;"></div>
    <div>
        <span class="btn btn-default btn-file btn-block">
            <span class="fileinput-new"><?= \Yii::t('file-input', 'Select image') ?></span>
            <span class="fileinput-exists"><?= \Yii::t('file-input', 'Change') ?></span>
            <?=$field;?>
        </span>
        <a href="#" class="btn btn-default btn-block fileinput-exists" data-dismiss="fileinput">
            <?= \Yii::t('file-input', 'Remove') ?>
        </a>
    </div>
</div>
