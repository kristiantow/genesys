@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Pembelian</h1>
        <form class="" action="{{ route('inventory.pembelian') }}" method="post">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		{{ method_field('post') }}
        	<div class="form-group">
				<label for="" class="control-label">Barang <span class="required">*</span></label>
				<select class="form-control input-sm" name="grup" required>
					<option value="">Pilih Barang...</option>
					@foreach ($dataInventory as $data)
						<option value="{{$data->inventory_id}}">{{$data->nama}}</option>
					@endforeach

				</select>
			</div>
			<div class="form-group">
				<label for="">Jumlah Item <span class="required">*</span></label>
				<input type="number" name="desc" class="form-control input-sm" required="" placeholder="Jumlah..." maxlength="8">
			</div>
			<div>
			<button  type="submit" class="btn btn-success">Simpan</button>
			</div>
        </form>
        @endauth
    </div>
@endsection