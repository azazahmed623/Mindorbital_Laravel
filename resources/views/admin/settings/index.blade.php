<x-master-admin>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">Settings List</h6>
                <x-forms.message />
                <h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('settings.create') }}">Settings Add</a>
                </h6>
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
                                                style="width: 161px;">Sl#</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="title: activate to sort column ascending"
                                                style="width: 248px;">Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1"
                                                aria-label="description: activate to sort column ascending"
                                                style="width: 115px;">Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="button: activate to sort column ascending"
                                                style="width: 51px;">Button</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="button: activate to sort column ascending"
                                                style="width: 51px;">Button</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="logo: activate to sort column ascending"
                                                style="width: 108px;">Logo</th>
                                            <th style="width: 180px" class="sorting" tabindex="0"
                                                aria-controls="dataTable" rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending"
                                                style="width: 97px;">
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Name</th>
                                            <th rowspan="1" colspan="1">Position</th>
                                            <th rowspan="1" colspan="1">Office</th>
                                            <th rowspan="1" colspan="1">Age</th>
                                            <th rowspan="1" colspan="1">Start date</th>
                                            <th rowspan="1" colspan="1">Start date</th>
                                            <th rowspan="1" colspan="1">
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($settings as $setting)
                                            <tr class="odd">
                                                <td class="sorting_1">{{ $loop->iteration }}</td>
                                                <td>{{ $setting->mail }}</td>
                                                <td>{{ $setting->address }}</td>
                                                <td>{{ $setting->mailbox }}</td>
                                                <td>{{ $setting->facebook }}</td>
                                                <td><img width="50px"
                                                        src="{{ asset('storage/settings/' . $setting->logo) }}" /></td>
                                                <td>
                                                    <Center>
                                                        <a class="btn btn-sm btn-info"
                                                            href="{{ route('settings.show', $setting->id) }}">Show</a>
                                                        <a class="btn btn-sm btn-warning"
                                                            href="{{ route('settings.edit', $setting->id) }}">Edit</a>
                                                        <form action="{{ route('settings.destroy', $setting->id) }}"
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
