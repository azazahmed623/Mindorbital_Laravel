<x-master-admin>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">Setting Add</h6>
                <h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('settings.index') }}">Settings List</a></h6>
            </div>
            <div class="card-body">
                <form action="{{ route('settings.store') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <x-forms.input type="file" name="logo" label='Logo' />

                    <x-forms.input type="email" name="mail" placeholder="Enter mail" required label="mail" />

                    <x-forms.input type="text" name="address" placeholder="Enter address" required label="address" />

                    <x-forms.input type="text" name="mailbox" placeholder="Enter mailbox" required label="mailbox" />

                    <x-forms.input type="text" name="facebook" placeholder="Enter facebook" required label="facebook" />



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-master-admin>
