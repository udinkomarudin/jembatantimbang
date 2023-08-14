<link rel="stylesheet" href="<?= base_url('assets/css/jquery.dataTables.min.js'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css'); ?>">
<script>
	function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
     event.preventDefault()
}
</script>
<body style="background-color: #151E2F">
	<!-- Start Sidebar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
			<span class="text-right">JEMBATAN TIMBANG ( LIST )</span>
		</a>

	</nav>


	<div class="row" id="body-row ">
		<div id="sidebar-container" class="sidebar-expanded d-none d-md-block" style="background-color: #343a40">
		</div>

		<div class="col-md-11" style="color: white;padding: 30px">
			<div class="card" style="background-color: #343a40; padding-left: 10px;padding-right: 10px"><br>
				<form method="GET">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-1 col-form-label">Tanggal</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" name="tanggalawal" id="tanggalawal">
					</div>S/D
					<!-- <label for="inputEmail3" class="col-sm-1 col-form-label">Tanggal</label> -->
					<div class="col-sm-2">
						<input type="date" class="form-control formku" name="tanggalakhir" id="tanggalakhir">
					</div>
					<div class="col-sm-2">
						<button type="submit" class="btn btn-success" >Cari</button>
						<button class="btn btn-warning" onclick="exportTableToExcel('example', 'list_data_in_out')" >Export</button>
						<a href="<?= base_url('List') ?>" class="btn btn-danger">Reset</a>
					</div>
				</div><br>
				</form>
				<table class="table text-center" id="example">
						<tr class="thead-dark">
							<th rowspan="2">No</th>
							<th rowspan="2">No Tiket</th>
							<th rowspan="2">No Polisi</th>
							<th rowspan="2">Nama Supir</th>
							<th rowspan="2">Nama Muatan</th>
							<th colspan="2">Berat Total</th>
							<th rowspan="2">Berat Kosong</th>
							<th rowspan="2">Berat Muatan</th>
						</tr>
						<tr>
							<th>IN</th>
							<th>OUT</th>
						</tr>
					
						<?php $no=1;foreach ($listdata as $v): ?>

						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $v->notik ?></td>
							<td><?= $v->nopol ?></td>
							<td><?= $v->namsup ?></td>
							<td><?= $v->nammut ?></td>
							<td><?= $v->berattotal_in ?></td>
							<td><?= $v->beratkosong_out ?></td>
							<td><?= $v->berattotal_out ?></td>
							<td><?= $v->beratmuatan_out ?></td>
						</tr>
					<?php endforeach ?>
			</table>


		</div>
		<div style="padding-top: 10px" class="text-center">
			<a href="<?= base_url('Masuk') ?>"><img src="<?= base_url('assets/in.png') ?>" alt="" style="width: 100px;height: 100px"></a>
			<a href="<?= base_url('Keluar') ?>"><img src="<?= base_url('assets/out.png') ?>" alt="" style="width: 100px;height: 100px"></a>
			<a href="<?= base_url('List') ?>"><img src="<?= base_url('assets/list.png') ?>" alt="" style="width: 100px;height: 80px"></a>
			<a href="<?= base_url('login/logout') ?>"><img src="<?= base_url('assets/logout.png') ?>" alt="" style="width: 100px;height: 100px"></a><br>
			<p>&nbsp&nbsp&nbsp&nbsp&nbspIN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp OUT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp LIST &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp LOGOUT</p>
		</div>
	</div>
</div>
<script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable({
			"scrollY":        "400px",
			"scrollCollapse": true,
		});
	} );
</script>