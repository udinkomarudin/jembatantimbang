<style type="text/css">
		body { font-family: Helvetica, sans-serif; }
		h2, h3 { margin-top:0; }
		form { margin-top: 15px; }
		form > input { margin-right: 15px; }
		#my_camera { background: #ccc; }
		#results { float:right; margin:20px; padding:10px; border:1px solid; background:#ccc; }
	</style>
<body style="background-color: #151E2F">
	<!-- Start Sidebar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
			<span class="text-right">JEMBATAN TIMBANG ( IN )</span>
		</a>

	</nav>


	<div class="row" id="body-row ">
		<div id="sidebar-container" class="sidebar-expanded d-none d-md-block" style="background-color: #343a40">
		</div>
		<div class="col-md-3" style="color: white;padding: 10px">
			<div class="card" style="background-color: #343a40">
				<div class="card-header text-right">
					<!-- <h2>10.0000 <small>KG</small></h2> -->
					<input class="form-control" type="text" name="timbangan" id="timbangan" value="0">
				</div>
				<div class="card-body text-center">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="autotimbangan" value="option1">
						<label class="form-check-label" for="inlineRadio1">AUTO</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="manualtimbangan" value="option2">
						<label class="form-check-label" for="inlineRadio2">MANUAL</label>
					</div>
					<div class="form-group" style="padding: 10px">
						<button class="btn btn-primary " id="savetimbangan">CAPTURE</button>
					</div>
				</div>
			</div>
			<div style="padding-top: 400px" class="text-center">
				<a href="<?= base_url('Keluar') ?>"><img src="<?= base_url('assets/out.png') ?>" alt="" style="width: 100px;height: 100px"></a><br>
				OUT
			</div>
		</div>
		<div class="col-md-5" style="color: white;padding: 10px">
			<div class="card" style="background-color: #343a40">
				<div class="card-header text-center">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-4 col-form-label">NOMOR TIKET :</label>
						<div class="col-sm-7">
							<select name="notiket" id="notiket" class="form-control">
								<?php foreach ($notiket as $v): ?>
									<option value="<?= $v->notiket ?>"><?= $v->notiket ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form >
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Nomor Polisi</label>
							<div class="col-sm-7">
								<input type="text" class="form-control formku" id="nopolisi" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Nama Supir</label>
							<div class="col-sm-7">
								<input type="text" class="form-control formku" id="namasupir" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Nama Muatan</label>
							<div class="col-sm-7">
								<input type="text" class="form-control formku" id="namamuatan" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Berat Total</label>
							<div class="col-sm-7 text-right">
								<input class="form-control formku" type="text" name="berattotal" id="berattotal" value="" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Berat Kosong</label>
							<div class="col-sm-7">
								<input type="text" class="form-control formku" id="beratkosong" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Berat Muatan</label>
							<div class="col-sm-7">
								<input type="text" class="form-control formku" id="beratmuatan" readonly>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-11 text-right">
								<button type="submit" class="btn btn-success navbar-btn" id="butsave"><i class="fas fa-check-circle"></i></button>
								<button type="button" class="btn btn-danger navbar-btn"><i class="far fa-times-circle"></i></button>
								<a class="btn btn-primary" href="" id="printtiket">PRINT TIKET</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="color: white;padding: 10px">
			<div class="card" style="background-color: #343a40">
				<div class="card-header text-center"><h2>CAMERA VIEW</h2></div>
				<div class="card-body text-center">
						<div id="my_camera"></div>
						<div id="results"></div>
					<form>
						<input type="button" value="Ambil Photo" id="ambilphoto" onClick="take_snapshot()" class="btn btn-primary">
					</form>
				</div>
			</div>
			<div style="padding-top: 130px" class="text-center">
				<a href="<?= base_url('Keluar') ?>"><img src="<?= base_url('assets/out.png') ?>" alt="" style="width: 100px;height: 100px"></a>
				<a href="<?= base_url('List') ?>"><img src="<?= base_url('assets/list.png') ?>" alt="" style="width: 100px;height: 80px"></a>
				<a href="<?= base_url('login/logout') ?>"><img src="<?= base_url('assets/logout.png') ?>" alt="" style="width: 100px;height: 100px"></a><br>
				<p>&nbsp&nbsp&nbsp&nbsp&nbsp IN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp LIST &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp LOGOUT</p>
			</div>
		</div>
	</div>
	<script src="<?=base_url()?>assets/js/socket.io.min.js"></script>
	<script src="<?=base_url()?>assets/js/webcam.min.js"></script>

	<script>
		let timbanganisauto = true

		let socket = io.connect('http://localhost:8888');

		socket.on('data', function(message) {
			if(timbanganisauto){
				$("#timbangan").val(message.data);				
			}
		});


		$(document).ready(function() {
			$("#notiket").select2();
			$('#but_read').click(function(){
				var username = $('#notiket option:selected').text();
				var userid = $('#notiket').val();
				$('#result').html("id : " + userid + ", name : " + username);

			});
			getdetailtiket()
			$( "#savetimbangan" ).click(function() {
				let berattotal = $('#berattotal').val()
				let beratkosong = $('#timbangan').val()
				let selisih = parseInt(berattotal) - parseInt(beratkosong);
				$('#beratkosong').val(beratkosong);
				$('#beratmuatan').val(selisih);
			});
			$('#printtiket').hide();
			$("#timbangan").prop('disabled', true);
			$("#autotimbangan").prop("checked", true);
			$("#autotimbangan").click(function(){
				$('#berattotal').val('');
				$('#timbangan').val('');
				$("#timbangan").prop('disabled', true);
				timbanganisauto = true;
			});
			$("#manualtimbangan").click(function(){
				// $('#berattotal').val('');
				$('#timbangan').val('');
				$("#timbangan").prop('disabled', false);
				timbanganisauto = false;
			});
			$("#ambilphoto").click(function(){
				$('#my_camera').hide();
				$('#ambilphoto').hide();
			});
			$('#butsave').on('click', function() {
				var timbangan = $('#timbangan').val();
				var notiket = $('#notiket').val();
				var nopolisi = $('#nopolisi').val();
				var namasupir = $('#namasupir').val();
				var namamuatan = $('#namamuatan').val();
				var berattotal = $('#berattotal').val();
				var beratkosong = $('#beratkosong').val();
				var beratmuatan = $('#beratmuatan').val();
				console.log(timbangan)
				Webcam.snap( function(data_url) {
				// if(timbangan!="" && notiket!="" && nopolisi!="" && namasupir!=""){
					$("#butsave").attr("disabled", "disabled");
					$.ajax({
						url: "<?php echo base_url("Keluar/savedata");?>",
						type: "POST",
						data: {
							type: 1,
							timbangan: timbangan,
							notiket: notiket,
							nopolisi: nopolisi,
							namasupir: namasupir,
							namamuatan: namamuatan,
							berattotal: berattotal,
							beratkosong: beratkosong,
							beratmuatan: beratmuatan,
							base64image: data_url
						},
						cache: false,
						success: function(dataResult){
							var dataResult = JSON.parse(dataResult);
							if(dataResult.statusCode==200){
								$('#timbangan').val('');
								$('#notiket').val('');
								$('#nopolisi').val('');
								$('#namasupir').val('');
								$('#namamuatan').val('');
								$('#berattotal').val('');
								$('#beratkosong').val('');
								$('#beratmuatan').val('');
								alert('berhasil disimpan');
								$('#printtiket').attr('href','<?=base_url()?>Keluar/printtiket/'+dataResult.id);
								$('#printtiket').show();
							}
							else if(dataResult.statusCode==201){
								alert("Error occured !");
							}

						}
					});
				// }
				// else{
				// 	alert('Please fill all the field !');
				// }
				});
			});
		});

		function getdetailtiket() {
			$("#notiket").change(function() {
				codep = $("#notiket").val();
				$.ajax({
					url: "<?php echo base_url("Keluar/cekdetailtiket");?>",
					type: "POST",
					data: {
						type: 1,
						kode: codep
					},
					cache: false,
					success: function(dataResult){
						console.log(dataResult[0].id)
						$('#nopolisi').val(dataResult[0].nopolisi);
						$('#namasupir').val(dataResult[0].namasupir);
						$('#namamuatan').val(dataResult[0].namamuatan);
						$('#berattotal').val(dataResult[0].berattotal);
			// $('#beratkosong').val(dataResult[0].beratkosong);
			// $('#beratmuatan').val(dataResult[0].beratmuatan);
		}
	})
			});
		}
		function take_snapshot() {

			Webcam.snap( function(data_uri) {
				console.log(data_uri)
				document.getElementById('results').innerHTML = 
					'<img src="'+data_uri+'"/>';
			} );
		}
		Webcam.set({
			width: 320,
			height: 280,
			image_format: 'jpeg',
			jpeg_quality: 90,
			constraints: {
				width: 320, // { exact: 320 },
				height: 280, // { exact: 180 },
				facingMode: 'user',
				frameRate: 30
			}
		});
		Webcam.attach( '#my_camera' );
	</script>
</body>
</html>

