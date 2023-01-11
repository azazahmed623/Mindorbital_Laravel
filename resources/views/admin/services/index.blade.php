<x-master-admin>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">Services List</h6>
                <x-forms.message />
                <h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('services.create') }}">Services Add</a></h6>
            </div>
            <div class="card-body">
                <div class="">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                    cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                    style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="sl: activate to sort column descending"
                                                style="width: 30px;">Sl#</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="title: activate to sort column ascending"
                                                style="width: 248px;">Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1"
                                                aria-label="description: activate to sort column ascending"
                                                style="width: 250px;">Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="images: activate to sort column ascending"
                                                style="width: 108px;">Images</th>
                                            <th style="width: 180px" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 97px;"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">S.N</th>
                                            <th rowspan="1" colspan="1">Title</th>
                                            <th rowspan="1" colspan="1">Description</th>
                                            <th rowspan="1" colspan="1">images</th>
                                            <th rowspan="1" colspan="1"><center>Action</center></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($services as $service)
                                        <tr class="odd">
                                            <td class="sorting_1">{{ $loop->iteration }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td><img width="50px" src="{{ asset('storage/services/'.$service->image) }}" /></td>
                                            <td>
                                                <Center>
                                                    <a class="btn btn-sm btn-info"
                                                        href="{{ route('services.show', $service->id) }}">Show</a>
                                                    <a class="btn btn-sm btn-warning"
                                                        href="{{ route('services.edit', $service->id) }}">Edit</a>
                                                    <form action="{{ route('services.destroy', $service->id) }}"
                                                        method="post" style="display:inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure want to delete')">Delete</button>
                                                    </form>
                                                </Center>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master-admin>
