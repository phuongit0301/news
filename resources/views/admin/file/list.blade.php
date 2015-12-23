@include("layouts.admin.header")

@foreach($filesList as $fileList)
	<a href="{{ asset($fileList->path . "/" .$fileList->name) }}">
		<img src='{{ asset($fileList->path . "/" .$fileList->name) }}' alt='' />
	</a>
@endforeach

@include("layouts.admin.footer-bottom")

<script type='text/javascript'>
	$(document).ready(function() {
		$('a[href]').on('click', function(e) {

			window.opener.CKEDITOR.tools.callFunction({{ $funcNum }}, $(this).find('img').prop('src'));
			window.close();
		});
	});
</script>