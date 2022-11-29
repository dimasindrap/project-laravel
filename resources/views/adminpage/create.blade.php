@extends('layout.lyadmin')

@section('admin_container')
     
     <form action='{{ url('home') }}' method='post'>
    @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div>
                <p class="text-center">Input Data ormanan </p>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name' id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="string" class="form-control" name='image' id="image">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='price' id="price">
                </div>
                {{-- <div class="input-group mb-3">
                    <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="input-group-prepend">
                    
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      <option value="1">Makanan</option>
                      <option value="2">Minuman</option>
                    </select>
                  </div> --}}
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-11"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>

        

@endsection