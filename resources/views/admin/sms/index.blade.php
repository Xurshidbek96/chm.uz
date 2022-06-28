@extends('admin.layouts.layout')

@section('content')

@section('sms')
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
						<h3>Xabarlar</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Ismi</th>
								<th>Raqami</th>
								<th>Mavzusi</th>
								<th>Xabari</th>
								<th>Vaqti</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($sms) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Xabarlar yo'q</td>
					          </tr>
					        @endif
					        @foreach($sms as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name}}</td>
									<td>{{$p->phone}}</td>
									<td>{{$p->subject}}</td>
									<td>{{$p->message}}</td>
									<td>{{$p->created_at}}</td>
									<td>
										<form action="{{ route('sms.destroy',$p->id) }}" method="POST">

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$sms->links()}}
				</div>
				
			</div>
		</main>
		<!-- MAIN -->

@endsection