@extends('admin.layouts.layout')

@section('content')

@section('abouts')
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
						<h3>Biz haqimizda</h3>
						<a class="create__btn" href="{{route('abouts.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Team uz</th>
								<th>Rasmi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($about) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($about as $product)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{!!$product->team_uz!!}</td>
									<td><img src="{{URL::to($product->img)}}" width="200px"></td>
									
									<td>
										<form action="{{ route('abouts.destroy',$product->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('abouts.edit',$product->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
				
			</div>
		</main>
		<!-- MAIN -->

@endsection