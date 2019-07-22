// bootstrap tooltip
$('[data-toggle="tooltip"]').tooltip();
// 表單驗證
$('form').submit(function() {
	var isFormValid = true;
	$(this).find('#required ').each(function() {
		var $this = $(this);
		// 使用 trim 把空白去除
		if ($.trim($this.val()).length === 0) {
			$this.tooltip('show').closest('div').addClass('error');
			isFormValid = false;
		} else {
			$this.tooltip('destroy').closest('div').removeClass('error');
		}
	});
	return isFormValid;
});