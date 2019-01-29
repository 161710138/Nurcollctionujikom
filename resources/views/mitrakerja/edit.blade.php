@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Edit Mitra Kerja
			  	<div class="card-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('mitrakerja.update',$mitrak->id) }}" method="post"  enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Gambar</label>
                                @if (isset($mitrakerja) && $mitrakerja->gambar)
                                    <p>
                                        <br>
                                    <img src="{{ asset('assets/img/mitrakerja/'.$mitrakerja->gambar) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="gambar" type="file" value="{{ $mitrakerja->gambar }}">
                            </div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>

</div>
@endsection