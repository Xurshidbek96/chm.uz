@extends('admin.layouts.layout')



@section('content')



@section('products')

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

						<h3>Mahsulotlar</h3>

						<a class="create__btn" href="{{route('products.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>

						

					</div>

					<table>

						<thead>

							<tr>

								<th>№</th>

								<th>Nomi Uz</th>

								<th>Rasm 1</th>

								

								<th>Vaqti</th>

								<th>Action</th>

							</tr>

						</thead>

						<tbody>

							@if (count($product) == 0)

					          <tr>

					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>

					          </tr>

					        @endif

					        @foreach($product as $p)

								<tr>

									<td>{{++$loop->index}}</td>

									<td>{{$p->name_uz}}</td>

									<td><img src="{{URL::to($p->img1)}}" width="200px"></td>

									<td>{{$p->created_at}}</td>

									<td>

										<form action="{{ route('products.destroy',$p->id) }}" method="POST">



						                    <a class="btn btn-primary" href="{{ route('products.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>



						                    @csrf

						                    @method('DELETE')



						                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>

					            	</td>

								</tr>

							@endforeach

						</tbody>

					</table>

					{{$product->links()}}

				</div>

				

			</div>

		</main>

		<!-- MAIN -->



@endsection