<table cellpadding="0" cellspacing="0" border="0" class="display groceryCrudTable table table-striped" id="<?php echo uniqid(); ?>">
	<thead>
		<tr>
			<?php foreach($columns as $column){?>
				<th><?php echo $column->display_as; ?></th>
			<?php }?>
			<?php if(!$unset_delete || !$unset_edit || !$unset_read || !empty($actions)){?>
			<th class='actions'><?php echo $this->l('list_actions'); ?></th>
			<?php }?>
		</tr>
		</thead>
		<thead>
		<tr>
			<?php foreach($columns as $column){?>
				<th><input type="text" class="form-control filter-column-input" style="width:100%;" name="<?php echo $column->field_name; ?>" placeholder="<?php echo $this->l('list_search').' '.$column->display_as; ?>" class="search_<?php echo $column->field_name; ?>" /></th>
			<?php }?>
			<?php if(!$unset_delete || !$unset_edit || !$unset_read || !empty($actions)){?>
				<th>
					<button class="btn btn-success refresh-data btn-xs" role="button" data-url="<?php echo $ajax_list_url; ?>">
						<i class="fas fa-sync-alt"></i> Clear Filter
					</button>
				</th>
			<?php }?>
		</tr>
	</thead>
	<tbody>
		<?php foreach($list as $num_row => $row){ ?>
		<tr id='row-<?php echo $num_row?>'>
			<?php foreach($columns as $column){?>
				<td><?php echo $row->{$column->field_name}?></td>
			<?php }?>
			<?php if(!$unset_delete || !$unset_edit || !$unset_read || !empty($actions)){?>
			<td class='actions'>
				<?php if(!empty($row->action_urls)){
					foreach($row->action_urls as $action_unique_id => $action_url){
						$action = $actions[$action_unique_id]; ?>
						<a href="<?php echo $action_url; ?>" class="edit_button btn btn-xs btn-info" role="button">
							<i class="fas fa-<?php echo $action->css_class; ?> <?php echo $action_unique_id;?>"></i>
							<?php echo $action->label?>
						</a>
					<?php }
				} ?>

				<?php if(!$unset_read){?>
					<a href="<?php echo $row->read_url?>" class="edit_button btn btn-xs btn-info btn-sm" role="button">
						<i class="fas fa-info-circle"></i>
						<?php echo $this->l('list_view');?>
					</a>
				<?php }?>

                <?php if(!$unset_clone){?>
                    <a href="<?php echo $row->clone_url?>" class="edit_button btn btn-xs btn-info btn-sm hidden-xs" role="button">
                        <i class="fas fa-copy"></i>
                        <?php echo $this->l('list_clone'); ?>
                    </a>
                <?php }?>

				<?php if(!$unset_edit){?>
					<a href="<?php echo $row->edit_url?>" class="edit_button btn btn-xs btn-info btn-sm hidden-xs" role="button">
						<i class="fas fa-pencil-alt"></i>
						<?php echo $this->l('list_edit'); ?>
					</a>
				<?php }?>

				<?php if(!$unset_delete){?>
					<a onclick = "javascript: return delete_row('<?php echo $row->delete_url?>', '<?php echo $num_row?>')"
						href="javascript:void(0)" class="delete_button btn btn-xs btn-danger btn-sm hidden-xs" role="button">
						<i class="fas fa-trash"></i>
						<?php echo $this->l('list_delete'); ?>
					</a>
				<?php }?>
			</td>
			<?php }?>
		</tr>
		<?php }?>
	</tbody>
	
</table>
