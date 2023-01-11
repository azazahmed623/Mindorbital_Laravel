<x-master-admin>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">Setting Edit</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('settings.update', $setting->id) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('patch')

                    <x-forms.input type="file" name="logo" label='Logo' />
                    <img width="100px" src="{{ asset('storage/settings/'.$setting->logo) }}" />

                    <x-forms.input type="email" name="mail" :value="old('mail', $setting->mail)" placeholder="Enter mail" required label="Mail" />

                    <x-forms.input type="text" name="address" :value="old('address', $setting->address)" placeholder="Enter address" required label="address" />

                    <x-forms.input type="text" name="mailbox" :value="old('mailbox', $setting->mailbox)" placeholder="Enter mailbox" required label="mailbox" />

                    <x-forms.input type="text" name="facebook" :value="old('facebook', $setting->facebook)" placeholder="Enter facebook" required label="facebook" />


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-master-admin>
