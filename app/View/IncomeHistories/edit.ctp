<div>
<?php echo $this->Form->create('IncomeHistory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Income History'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('income_date', array('type' => 'text', 'id' => "datepicker_target_date"));
		echo $this->Form->input('price');
		echo $this->Form->input('memo');
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<script>
$(function() {
	$('#datepicker_target_date').datepicker({dateFormat: 'yy-mm-dd'});
});
</script>