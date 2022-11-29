@extends('layout.lyadmin')

@section('admin_container')
            <!-- START DATA -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="row position-relative">
                    <div class="col-12 col-lg-2 col-xl-1 col-navbar d-block">
            
                        <aside class="sidebar">
                            <div class="d-flex flex-column justify-content-center align-items-center sidebar-top">
            
                                <a href="#">
                                    <img src="./logo/UNY.png" width="60px" alt="">
                                </a>
            
                            </div>
            
            
                            <div class="sidebar-item-container d-flex flex-column justify-content-center align-items-center">
            
                                <a href="#" class="sidebar-item active" onclick="toggleActive(this)">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 14H14V21H21V14Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10 14H3V21H10V14Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21 3H14V10H21V3Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10 3H3V10H10V3Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
            
                                <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3 6H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
            
                                
            
                                <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 17L21 12L16 7" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21 12H9" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9"
                                            stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
            
                            </div>
            
                        </aside>
            
                    </div>
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="keyword" value="{{ Request::get('keyword') }}" placeholder="input keyword" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ url('home/create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Nama</th>
                            <th class="col-md-2">Gambar</th>
                            <th class="col-md-4">Harga</th>
                        </tr>
                    </thead>
                    @foreach($menu as $p)
                    <tr>
                        <td>{{ $p->id}}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->image }}</td>
                        <td>{{ $p->price }}</td>
                        <td>
                            <a href='{{ url('home/'.$p->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            {{-- <a href='' class="btn btn-danger btn-sm">Del</a> --}}
                            <form action="{{ url('home/'. $p->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </table>

          </div>
          <!-- AKHIR DATA -->

@endsection