

<?php $__env->startSection('title', 'Pengguna'); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
									<div class="alert-icon">
										<span class="svg-icon svg-icon-primary svg-icon-xl">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
													<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
									<div class="alert-text">With server-side processing enabled, all paging, searching, ordering actions that DataTables performs are handed off to a server where an SQL engine (or similar) can perform these actions on the large data set. See official documentation
									<a class="font-weight-bold" href="https://datatables.net/examples/data_sources/server_side.html" target="_blank">here</a>.</div>
								</div>
								<!--end::Notice-->
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header">
										<div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-supermarket text-primary"></i>
											</span>
											<h3 class="card-label">Table Pengguna</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<!--begin::Navigation-->
													<ul class="navi flex-column navi-hover py-2">
														<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
																<span class="navi-text">Print</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
																<span class="navi-text">Copy</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
																<span class="navi-text">Excel</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
																<span class="navi-text">CSV</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
																<span class="navi-text">PDF</span>
															</a>
														</li>
													</ul>
													<!--end::Navigation-->
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="#" class="btn btn-primary font-weight-bolder" onclick="add()">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>New Record</a>
											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama</th>
													<th>Email</th>
													<th>Role</th>
													<th>Actions</th>
												</tr>
											</thead>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<div class="modal fade" id="modalForm" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
						    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						        <div class="modal-content">
						        	<div class="modal-header">
						        		<h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
						        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
						        	</div>
						        	<div class="modal-body">
						        		<form id="form">
						        			<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
						        			<input type="text" hidden="hidden" placeholder="" name="id">
						        			<div class="form-group">
												<label>Nama</label>
												<input type="text" class="form-control" placeholder="" name="nama">
												<span class="form-text text-muted"></span>
											</div>
											<div class="form-group">
												<label>Email</label>
												<input type="text" class="form-control" placeholder="" name="email">
												<span class="form-text text-muted"></span>
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="text" class="form-control" placeholder="" name="password">
												<span class="form-text text-muted"></span>
											</div>
											<div class="form-group">
												<label for="exampleSelectl">Large Select</label>
												<select class="form-control form-control-lg" id="exampleSelectl" name="role">
													<option value="user">User</option>
													<option value="userbayar">User Bayar</option>
													<option value="manager">Manager</option>
													<option value="admin">Admin</option>
												</select>
											</div>
						        		</form>
						        	</div>
						        	<div class="modal-footer">
						        		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
						        		<button  onclick="save()" class="btn btn-primary font-weight-bold">Save changes</button>
						        	</div>
						        </div>
						    </div>
						</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendorJs'); ?>
<script src="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
	"use strict";
	var KTDatatablesDataSourceAjaxServer = function() {

		var initTable1 = function() {
			var table = $('#kt_datatable');

			// begin first table
			table.DataTable({
				responsive: true,
				searchDelay: 500,
				processing: true,
				serverSide: true,
				order : [],
				ajax: { url  : alamat + '/pengguna/datatables',
						type : 'POST',
						data :{ _token: "<?php echo e(csrf_token()); ?>"}
				},

				columns: [
					{data: 'DT_RowIndex'},
					{data: 'name'},
					{data: 'email'},
					{data: 'role'},
					{data: 'action', responsivePriority: -1},
				],
			});
		};

		return {

			//main function to initiate the module
			init: function() {
				initTable1();
			},

		};

	}();

	var saveMethod;

	function add()
	{
		saveMethod = 'add';
		$('#form')[0].reset();
		$('.form-group').removeClass('has-error');
		$('.help-block').empty();
		$('#modalForm').modal('show');
	}

	function editData(id)
	{
		saveMethod = 'edit';
		$('#form')[0].reset();
		$('.form-group').removeClass('has-error');
		$('.help-block').empty();

		$.ajax({
			url : alamat + '/pengguna/' + id,
			type : "GET",
			dataType: "JSON",
			success : function(data)
			{
				$('[name = "id"]').val(data.id);
				$('[name = "nama"]').val(data.name);
				$('[name = "email"]').val(data.email);
				//$('[name = "password"]').val(data.password);
				$('[name = "password"]').prop( "disabled", true );
				$('[name = "role"]').val(data.role);
				$('#modalForm').modal('show');
			},
			error : function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
	}

	function reloadTable()
	{
		$('#kt_datatable').DataTable().ajax.reload();

	}

	function save()
	{
		// var url;

		/*
		if (saveMethod == 'add') {
			url = alamat + '/materi/datatables';
		} else {
			url = alamat + '/materi/datatables';
		}
		*/

		// ajax adding to database
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
			url : alamat + '/pengguna/simpan',
			type : "POST",
			data : $('#form').serialize(),
			dataType : "JSON",
			success : function(data)
			{
				$('#modalForm').modal('hide');
				reloadTable();
			},
			error : function (jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
			}
		});
	}

	function hapus(id)
	{
		if(confirm('Are you sure delete this data?'))
	    {
	        // ajax delete data to database
	        $.ajax({
	        	headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
	            url : alamat + '/pengguna/delete/'+id,
	            type: "POST",
	            dataType: "JSON",
	            success: function(data)
	            {
	                //if success reload ajax table
	                reloadTable();
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error deleting data');
	            }
	        });
	 
	    }
	}

	jQuery(document).ready(function() {
		KTDatatablesDataSourceAjaxServer.init();
	});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WWW\hasbiproject\resources\views/pages/pengguna.blade.php ENDPATH**/ ?>