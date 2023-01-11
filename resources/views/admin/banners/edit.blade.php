<x-master-admin>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">Banner Edit</h6>
                <h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('banners.index') }}">Banner List</a></h6>
            </div>
            <div class="card-body">
                <form action="{{ route('banners.update', $banner->id) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('patch')

                    <x-forms.input type="text" name="title" :value="old('title', $banner->title)" placeholder="Enter title" required label="Title" />

                    <x-forms.input type="text" name="description" :value="old('description', $banner->description)" placeholder="Enter Description" required label="Description" />

                    <x-forms.input type="text" name="button" :value="old('button', $banner->button)" placeholder="Enter Button" required label="Button" />

                    <x-forms.input type="file" name="image" label='Picture' />
                    <img width="100px" src="{{ asset('storage/banners/'.$banner->image) }}" />

                    @php
                        $checklist = ['Is Active'];
                    @endphp

                    <x-forms.checkbox :checklist="$checklist" />

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-master-admin>
