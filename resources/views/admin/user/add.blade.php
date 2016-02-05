@extends('admin.master')

@section('style')
<link rel="stylesheet" href="/assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="/assets/css/chosen.css" />
@endsection

@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			Form User
			<small>
				<i class="icon-double-angle-right"></i>
				Create new user
			</small>
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			<form class="form-horizontal" action="{{ route('admin.user.store') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="control-group">
					<label class="control-label" for="form-field-1">User Name</label>

					<div class="controls">
						<input type="text" id="form-field-1" placeholder="User name" name="name" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-1">Email</label>

					<div class="controls">
						<input type="email" id="form-field-1" placeholder="email" name="email" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-2">Password</label>

					<div class="controls">
						<input type="password" id="form-field-2" placeholder="Password" name="password" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-2">Retype Password</label>

					<div class="controls">
						<input type="password" id="form-field-2" placeholder="Password confirmation" name="password_confirmation" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-2">Avatar</label>
					<div class=" controls" style="width:221px">
						<input type="file" id="id-input-file-2">
						<label data-title="Choose"></label>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">Level</label>
					<div class="controls">
						<label>
							<input name="form-field-radio" type="radio" />
							<span class="lbl"> Admin</span>
						</label>
						<label>
							<input name="form-field-radio" type="radio" />
							<span class="lbl">Member</span>
						</label>
					</div>
				</div>

				<div class="form-actions">
					<button class="btn btn-info" type="submit">
						<i class="icon-ok bigger-110"></i>
						Submit
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="icon-undo bigger-110"></i>
						Reset
					</button>
				</div>
				<hr />
				<hr />
			</form>
			<div class="hr hr-18 dotted hr-double"></div>
		</div>
	</div>
	@endsection

	@section('script')
	<script src="/assets/js/chosen.jquery.min.js"></script>
	<script src="/assets/js/fuelux/fuelux.spinner.min.js"></script>
	<script src="/assets/js/jquery.knob.min.js"></script>
	<script src="/assets/js/jquery.autosize-min.js"></script>
	<script src="/assets/js/jquery.maskedinput.min.js"></script>
	<!--ace scripts-->

	<!--inline scripts related to this page-->

	<script type="text/javascript">
		$(function() {
			$('#id-disable-check').on('click', function() {
				var inp = $('#form-input-readonly').get(0);
				if(inp.hasAttribute('disabled')) {
					inp.setAttribute('readonly' , 'true');
					inp.removeAttribute('disabled');
					inp.value="This text field is readonly!";
				}
				else {
					inp.setAttribute('disabled' , 'disabled');
					inp.removeAttribute('readonly');
					inp.value="This text field is disabled!";
				}
			});


			$(".chzn-select").chosen();

			$('[data-rel=tooltip]').tooltip({container:'body'});
			$('[data-rel=popover]').popover({container:'body'});

			$('textarea[class*=autosize]').autosize({append: "\n"});
			$('textarea[class*=limited]').each(function() {
				var limit = parseInt($(this).attr('data-maxlength')) || 100;
				$(this).inputlimiter({
					"limit": limit,
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			});

			$.mask.definitions['~']='[+-]';
			$('.input-mask-date').mask('99/99/9999');
			$('.input-mask-phone').mask('(999) 999-9999');
			$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
			$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



			$( "#input-size-slider" ).css('width','200px').slider({
				value:1,
				range: "min",
				min: 1,
				max: 6,
				step: 1,
				slide: function( event, ui ) {
					var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
					var val = parseInt(ui.value);
					$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
				}
			});

			$( "#input-span-slider" ).slider({
				value:1,
				range: "min",
				min: 1,
				max: 11,
				step: 1,
				slide: function( event, ui ) {
					var val = parseInt(ui.value);
					$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
				}
			});


			$( "#slider-range" ).css('height','200px').slider({
				orientation: "vertical",
				range: true,
				min: 0,
				max: 100,
				values: [ 17, 67 ],
				slide: function( event, ui ) {
					var val = ui.values[$(ui.handle).index()-1]+"";

					if(! ui.handle.firstChild ) {
						$(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
					}
					$(ui.handle.firstChild).show().children().eq(1).text(val);
				}
			}).find('a').on('blur', function(){
				$(this.firstChild).hide();
			});

			$( "#slider-range-max" ).slider({
				range: "max",
				min: 1,
				max: 10,
				value: 2
			});

			$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true

					});
				});

			$('#id-input-file-1 , #id-input-file-2').ace_file_input({
				no_file:'No File ...',
				btn_choose:'Choose',
				btn_change:'Change',
				droppable:false,
				onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});

			$('#id-input-file-3').ace_file_input({
				style:'well',
				btn_choose:'Drop files here or click to choose',
				btn_change:null,
				no_icon:'icon-cloud-upload',
				droppable:true,
				thumbnail:'small'
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}

				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});


				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}

							allowed_files.push(file);
						}
						if(allowed_files.length == 0) return false;

						return allowed_files;
					}
				}
				else {
					btn_choose = "Drop files here or click to choose";
					no_icon = "icon-cloud-upload";
					before_change = function(files, dropped) {
						return files;
					}
				}
				var file_input = $('#id-input-file-3');
				file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
				file_input.ace_file_input('reset_input');
			});

$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
.on('change', function(){
					//alert(this.value)
				});
$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});


$(".knob").knob();
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
			});
</script>
@endsection