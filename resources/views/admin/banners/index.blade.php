@extends('admin.layouts.layout')

@section('content')

@section('banners')
active
@endsection

<!-- MAIN -->
		<main>
			

			@if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    		@endif

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Banner</h3>
						<a class="create__btn" href="{{route('banners.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Nomi</th>
								<th>Rasmi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($banner) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($banner as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name}}</td>
									<td><img src="{{URL::to($p->img)}}" width="200px"></td>
									<td>
										<form action="{{ route('banners.destroy',$p->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('banners.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$banner->links()}}
				</div>
				
			</div>
		</main>
		<!-- MAIN -->

@endsection