@include('layouts.header')
@include('layouts.nav')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Referensi Data Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card">
            <div class="card-header">
              {{-- <h3 class="card-title">Referensi Data Guru</h3> --}}
              <span class="float-sm-right"><a href="{{route('teachers.create')}}" class="btn btn-md btn-success">+ Tambah Guru</a>&nbsp;
              <!-- Button trigger modal Import-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import">
                  Impor Excel
                </button>
              </span>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel1" class="table table-striped table-bordered">
                <thead>
                <tr>
                  <th>Status</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>
                        @if ($teacher->status=='1')
                        <span class="btn btn-block btn-success btn-xs">Aktif</span>
                        @else
                        <span class="btn btn-block btn-secondary btn-xs">Tidak Aktif</span>
                        @endif
                        </div>
                        </td>
                        <td>{{$teacher->nik}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>
                        <button type="button" class="btn btn-primary btn-flat btn-sm"><i class="fas fa-address-card"></i></button>
                        <a href="{{route('teachers.edit',['teacher'=>$teacher->id])}}" class="btn btn-warning btn-flat btn-sm"><i class="fas fa-user-edit"></i></a>
                        <button type="button" class="btn btn-danger btn-flat btn-sm"><i class="fas fa-user-times"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>NIK</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- Modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Impor Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('teachers.import')}}" enctype="multipart/form-data" >
          @csrf
          <input type="file" class="form-controll" name="importTeachers" required>
        <hr>
        Format Ms. Excel : <a href="{{asset('/storage/format/format_Import_Guru.xlsx')}}" class="btn btn-sm btn-success">Unduh Format</a> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">+Unggah</button>
      </div>
    </form>
    </div>
  </div>
</div>
@include('layouts.footer')
  <script>
    $(document).ready(function() {
        $('#tabel1').DataTable({
            responsive: true
        });
    } );
  </script>