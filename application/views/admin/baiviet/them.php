<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1"><?=$title ?></h2>
			<div class="panel-body widget-shadow">
				<h4><?=$title ?></h4>
				<textarea id="mytextarea" rows="10"></textarea>
			</div>
		</div>
	</div>
</div>
<script> 
	$(function() { 
		$('textarea').froalaEditor({
			heightMin: 300,
			language: 'vi',
			imageManagerLoadURL: '<?=base_url('admin/images') ?>',
			imageManagerDeleteURL: '<?=base_url('admin/images/delete_file') ?>'
		}) 
	}); 
</script>