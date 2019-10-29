@extends('layouts.nav')

@section('contentuser')

<section class="content" style=" margin: 10%; margin-top: 2%">
	<!-- <div class="container-fluid" style="margin: 10%; overflow-x: hidden;> -->
		<div class="row">
			<div class="col-12">
				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<h2 class="card-title"><strong>List Diagnosa</strong></h2><br/>
						<i>Silahkan centang diagnosa berikut ini</i>
					</div>
					<div>
						<table class="table table-striped">
							<thead>
								<tr style="text-align: center;">
									<th>No</th>
									<th>Nama</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $key=> $value)
								<tr>
									<td style="text-align: center;">{{ $value -> id_penyakit}}</td>
									<td style="padding-left:8%;">{{ $value -> nama_penyakit}}</td>
									<td style="text-align: center;" id="{{ $value -> id_penyakit}}" value="{{ $value -> id_penyakit}}" name="penyakit[]"><a href="{{ route('informasi.show',[$value->id_penyakit])}}">pilih</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->
			</div>
		</div>
		<!-- </div> -->
	</section>

	@endsection