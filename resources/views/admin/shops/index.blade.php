@extends('admin.layouts.layout')

@section('shops')
active
@endsection

@section('content')

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
						<h3>Reklama</h3>
						<a class="create__btn" href="{{route('shops.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Nomi</th>
								<th>Rasmi: bo'yi 70 px, eni 100 %</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($shop) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($shop as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name}}</td>
									<td><img src="{{URL::to($p->img)}}" width="200px"></td>
									
									<td>
										<form action="{{ route('shops.destroy',$p->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('shops.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$shop->links()}}
				</div>
				
			</div>
		</main>
		<!-- MAIN -->

@endsection