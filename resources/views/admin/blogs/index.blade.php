@extends('admin.layouts.layout')



@section('content')



@section('blogs')

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

						<h3>Maqolalar</h3>

						<a class="create__btn" href="{{route('blogs.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>

						

					</div>

					<table>

						<thead>

							<tr>

								<th>№</th>

								<th>Nomi Uz</th>

								<th>Rasmi</th>

								<th>Vaqti</th>

								<th>Action</th>

							</tr>

						</thead>

						<tbody>

							@if (count($blog) == 0)

					          <tr>

					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>

					          </tr>

					        @endif

					        @foreach($blog as $product)

								<tr>

									<td>{{++$loop->index}}</td>

									<td>{{$product->name_uz}}</td>

									<td><img src="{{URL::to($product->img)}}" width="200px"></td>

									<td>{{$product->created_at}}</td>

									<td>

										<form action="{{ route('blogs.destroy',$product->id) }}" method="POST">



						                    <a class="btn btn-primary" href="{{ route('blogs.edit',$product->id) }}"><ion-icon name="create-outline"></ion-icon></a>



						                    @csrf

						                    @method('DELETE')



						                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>

					            	</td>

								</tr>

							@endforeach

						</tbody>

					</table>

					{{$blog->links()}}

				</div>

				

			</div>

		</main>

		<!-- MAIN -->



@endsection