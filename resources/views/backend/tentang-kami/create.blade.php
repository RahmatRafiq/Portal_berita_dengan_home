@extends('layouts.default')
@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="ml-md-auto py-2 py-md-0">
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title"> Form Tentang Kami</div>
                            <a href="{{ route('tentang-kami.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('tentang-kami.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul Artikel</label>
                                <input type="text" name="judul" class="form-control" value="{{ old('judul') }}"
                                    placeholder="Masukkan judul artikel">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}"
                                    placeholder="Masukkan alamat">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" name="telepon" class="form-control" value="{{ old('telepon') }}"
                                    placeholder="Masukkan Nomor Telepon">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                    placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="social_media">Social Media</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="youtube">YouTube</label>
                                        <input type="text" name="youtube" class="form-control"
                                            value="{{ old('youtube') }}" placeholder="Masukkan URL YouTube">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" name="twitter" class="form-control"
                                            value="{{ old('twitter') }}" placeholder="Masukkan URL Twitter">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" name="instagram" class="form-control"
                                            value="{{ old('instagram') }}" placeholder="Masukkan URL Instagram">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" name="facebook" class="form-control"
                                            value="{{ old('facebook') }}" placeholder="Masukkan URL Facebook">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/6jdasye4n88gih6plksapgsl334fmqa48fzzs0rirp23llra/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#deskripsi',
            apiKey: '6jdasye4n88gih6plksapgsl334fmqa48fzzs0rirp23llra',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            toolbar: 'undo redo | bold italic underline strikethrough | bullist numlist | link image',
            images_upload_url: '/upload'
        });
    </script>
@endsection