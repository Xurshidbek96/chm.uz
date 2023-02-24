@extends('admin.layouts.layout')

@section('products')
    active
@endsection

@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="/admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                  <div class="card">
                    <div class="card-header">
                      <h4>Products</h4>
                      <a href="{{ route('products.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>Name UZ</th>
                                    <th>Category UZ</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products) == 0)
                                    <tr>
                                        <td colspan="5" class="h5 text-center text-muted">No infos
                                        </td>
                                    </tr>
                                @endif

                                @foreach ($products as $item)
                                    <tr>
                                        <td>
                                            {{ ++$loop->index }}
                                        </td>
                                        <td>{{ $item->name_uz }}</td>
                                        <td>{{ $item->category->name_uz ?? 'Bog`lanmagan' }}</td>
                                        <td>
                                            <img alt="image" src="/images/{{ $item->img1 }}" width="59">
                                        </td>

                                        <td>
                                            <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('products.show', $item->id) }}" class="btn btn-info">
                                                    <ion-icon class="fas fa-info-circle"></ion-icon>
                                                </a>
                                                <a href="{{ route('products.edit', $item->id) }}"
                                                    class="btn btn-primary">
                                                    <ion-icon class="far fa-edit"></ion-icon>
                                                </a>
                                                <button class="btn btn-danger"
                                                    onclick="return confirm('Do you want to delete ?')">
                                                    <ion-icon class="fas fa-times"></ion-icon>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        {{ $products->links() }}

                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="/admin/assets/bundles/datatables/datatables.min.js"></script>
    <script src="/admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/admin/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <script src="/admin/assets/js/page/datatables.js"></script>
@endsection
