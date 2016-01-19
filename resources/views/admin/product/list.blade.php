@extends('admin.master')
@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			Tables
			<small>
				<i class="icon-double-angle-right"></i>
				Danh sách sản phẩm
			</small>
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			<div class="row-fluid">
				<div class="table-header">
					Kết quả cho Danh sách sản phẩm
				</div>
				<table id="sample-table-2" class="display table-bordered ">


					<thead>
						<tr>
							<th class="center hidden-480">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</th>
							<th class="hidden-480 hidden-phone center" >STT</th>
							<th class="center" >Sản phẩm</th>
							<th class="center" >Giá</th>
							<th>Mô tả</th>
							<th class="hidden-480 hidden-phone">Loại thiệp</th>
							<th class="hidden-480 hidden-phone center">Ngày cập nhật</th>

							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach($products as $product)
							<tr>
								<td class="center hidden-480">
									<label>
										<input type="checkbox" />
										<span class="lbl"></span>
									</label>
								</td>
								<td class="hidden-480 hidden-phone center"></td>
								<td class="center">
									<a href="#">{{ $product->name }}</a>
								</td>
								<td><div class="align-right">{{ $product->price }}</div></td>
								<td>{{ $product->description }}</td>
								<td class="hidden-480 hidden-phone">{{ $product->category->name }}</td>
								<td class="hidden-480 hidden-phone center">{{ date('F d, Y', strtotime($product->updated_at))  }}</td>

								<td class="td-actions" nowrap>
									<div class="action-buttons">

										<a class="green" href="{{ route('admin.product.edit', $product->slug) }}">
											<i class="icon-pencil bigger-130"></i>
										</a>

										<a>
											{!! Form::open(array('route'=>array('admin.product.destroy', $product->id), 'method' => 'DELETE',  'class'=>'ajax')) !!}
										<button><i class="icon-trash bigger-130"></i></button>
										{!! Form::close() !!}
										</a>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->
@endsection

@section('script')
<script src="/assets/js/jquery.dataTables.min.js"></script>
<script src="/assets/js/jquery.dataTables.bootstrap.js"></script>

<!--inline scripts related to this page-->
<script src="/js/datatable.js"></script>
<script src="/js/myscript.js"></script>

@endsection