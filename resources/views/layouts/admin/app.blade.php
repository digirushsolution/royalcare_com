<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ custom_asset('assets/img/logo_f.png') }}" type="image/png" />
    <link href="{{ custom_asset('assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ custom_asset('assets/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ custom_asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href="{{ custom_asset('assets/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ custom_asset('assets/admin/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />
    <link href="{{ custom_asset('assets/admin/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ custom_asset('assets/admin/js/pace.min.js') }}"></script>
    <link href="{{ custom_asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ custom_asset('assets/admin/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ custom_asset('assets/admin/css/app.css') }}" rel="stylesheet">
    <link href="{{ custom_asset('assets/admin/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ custom_asset('assets/admin/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ custom_asset('assets/admin/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ custom_asset('assets/admin/css/header-colors.css') }}" />
    <!-- <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <link href="{{custom_asset('assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <title>Royal Care Travel - Admin Dashboard</title>
    @yield('heads')
</head>
<body>
    @include('layouts.admin.sidebar')
    @include('layouts.admin.header')
    @yield('content')
    @include('layouts.admin.footer')
    <script src="{{ custom_asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/plugins/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/js/index2.js') }}"></script>
    <script src="{{ custom_asset('assets/admin/js/app.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-btn').forEach(function (button) {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			ClassicEditor
				.create(document.querySelector('#blog_description'), {
					toolbar: [
						'heading', '|',
						'bold', 'italic', 'link', '|',
						'numberedList', 'bulletedList', '|',
						'blockQuote', 'insertTable', 'mediaEmbed', '|',
						'undo', 'redo', 'imageUpload' 
					],
					heading: {
						options: [
							{ model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
							{ model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
							{ model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
							{ model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
							{ model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
							{ model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
							{ model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
						]
					},
					ckfinder: {
						uploadUrl: '{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}'
					},
					mediaEmbed: {
						previewsInData: true
					}
				})
				.then(editor => {
					console.log('Editor initialized successfully.', editor);
	
					const editableElement = editor.ui.view.editable.element;
	
					const fixedHeight = '150px';
	
					editableElement.style.height = fixedHeight;
					editableElement.style.maxHeight = fixedHeight;
					editableElement.style.minHeight = fixedHeight;
					editableElement.style.overflowY = 'auto';
	
					function maintainFixedHeight() {
						editableElement.style.height = fixedHeight;
					}
	
					editor.ui.focusTracker.on('change:isFocused', maintainFixedHeight);
					editor.model.document.on('change:data', maintainFixedHeight);
	
					editableElement.addEventListener('focus', maintainFixedHeight);
					editableElement.addEventListener('input', maintainFixedHeight);
					editableElement.addEventListener('blur', maintainFixedHeight);
	
					document.addEventListener('click', function(event) {
						if (!editableElement.contains(event.target)) {
							maintainFixedHeight();
						}
					});
				})
				.catch(error => {
					console.error('Error initializing CKEditor:', error);
				});
		});
	</script>
    @yield('scripts')
</body>
</html>
