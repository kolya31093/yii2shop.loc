<option
    value="<?= $category['id'] ?>"<? if($category['id'] == $this->model->parent_id) echo 'selected' ?>
    value="<?= $category['id'] ?>"<? if($category['id'] == $this->model->id) echo 'disabled' ?>
    ><?= $tab.$category['name'] ?>
</option>
<?php  if(isset($category['childs'])):?>
    <ul>
        <?= $this->getMenuHtml($category['childs'], $tab.'--');?>
    </ul>
<?php endif;?>
