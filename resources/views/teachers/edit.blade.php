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
              <li class="breadcrumb-item active">Perbarui Data Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">+ Formulir Perubahan Data Guru</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form enctype="multipart/form-data" action="{{route('teachers.store')}}" method="POST">
                @csrf
                <label for="name">Nama Lengkap :</label>
            <input class="form-control" type="text" name="name" value="{{$teacher->name}}" required>
                <hr/>
                <label for="name">Email :</label>
                <input class="form-control" type="email" name="email" value="{{$teacher->email}}" required>
                <hr/>
                <label for="name">NIK (Nomor Induk Kependudukan) :</label>
                <input class="form-control" type="number" name="nik" value="{{$teacher->nik}}" required>
                <hr/>
                <label for="name">Jenis Kelamin :</label><br/>
                <input type="radio" name="sex" id="male" value="M">
                <label for="male">Laki-laki</label>&nbsp;&nbsp;&nbsp;
                <input type="radio" name="sex" id="female" value="F">
                <label for="female">Perempuan</label>
                <hr/>
                <label for="name">Nomor Telepon/HP :</label>
                <input class="form-control" type="text" name="phone" placeholder="..." required>
                <hr/>
                <label for="exampleInputFile">File Foto</label>
                <input type="file" class="form-control" name="photo" id="photo">
                <hr/>
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1" selected>Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
                <hr/>
                <span class="float-sm-right"><input type="submit" class="btn btn-lg btn-success" value="Simpan">&nbsp;
                &nbsp;<input type="reset" class="btn btn-lg btn-warning" value="Batal"></span>
            </form>
            </div>
            <!-- /.card-body -->
          </div>        
      </div>
    </section>
    <!-- /.content -->
  </div>
@include('layouts.footer')