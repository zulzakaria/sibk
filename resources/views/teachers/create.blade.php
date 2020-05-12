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
              <li class="breadcrumb-item active"><a href="{{route('teachers.index')}}">Referensi Data Guru</a></li>
              <li class="breadcrumb-item active">Tambah Data Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">+ Formulir Penambahan Data Guru</h3> 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form enctype="multipart/form-data" action="{{route('teachers.store')}}" method="POST">
                @csrf
                <label for="name">NIK (Nomor Induk Kependudukan) : <code>*) wajib diisi</code></label>
                <input class="form-control col-md-4" type="number" name="nik" placeholder="..." required>
                <hr/>
                <label for="name">Nama Lengkap : <code>*)</code></label>
                <input class="form-control col-md-6" type="text" name="name" placeholder="..." required>
                <hr/>
                <label for="name">Email : <code>*)</code></label>
                <input class="form-control col-md-6" type="email" name="email" placeholder="..." required>
                <hr/>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="name">NIP :</label>
                      <input class="form-control" type="number" name="nip" placeholder="..." required>
                    </div>
                  </div>
                  <div class="col-sm-4 offset-md-1">
                    <div class="form-group">
                      <label for="name">NUPTK : </label>
                      <input class="form-control" type="number" name="nuptk" placeholder="..." required>
                    </div>
                  </div>
                </div>
                
                <hr/>
                <label for="name">Jenis Kelamin : <code>*)</code></label><br/>
                <input type="radio" name="sex" id="male" value="L">
                <label for="male">Laki-laki</label>&nbsp;&nbsp;&nbsp;
                <input type="radio" name="sex" id="female" value="P">
                <label for="female">Perempuan</label>
                <hr/>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="name">Tempat Lahir <code>*)</code></label>
                      <input type="text" name="placeBirth" class="form-control" placeholder="..." required>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for="name">Tanggal Lahir <code>*)</code></label>
                      <input type="date" name="dateBirth" class="form-control" required>
                    </div>
                  </div>
                </div>
                <hr/>
                <label for="name">Agama : <code>*)</code></label>
                @php
                $religions = App\Religion::all();   
                @endphp
                <select class="form-control col-md-3" name="religion">
                @foreach ($religions as $type)
                  <option value="{{$type->desc}}">{{$type->desc}}</option>
                @endforeach
                <select>
                <hr/>
                <label for="name">Alamat :</label>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="district" class="form-control" placeholder="Kecamatan">
                    </div>
                  </div>
                  <div class="col-sm-6  ">
                    <div class="form-group">
                      <input type="text" name="village" class="form-control" placeholder="Kelurahan/Desa">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <input type="text" name="street" class="form-control" placeholder="Jln. ...">
                    </div>
                  </div>
                  RT<div class="col-sm-1">
                    <div class="form-group">
                      <input type="number" name="rt" class="form-control" placeholder="000">
                    </div>
                  </div>
                  RW<div class="col-sm-1">
                    <div class="form-group">
                      <input type="number" name="rw" class="form-control" placeholder="000">
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <input type="text" name="subVillage" class="form-control" placeholder="Dusun">
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <input type="number" name="postalCode" class="form-control" placeholder="KodePos">
                    </div>
                  </div>
                </div>
                <hr/>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="name">Nomor Telepon :</label>
                      <input type="number" name="phone" class="form-control" placeholder="No. Telepon">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="name">Nomor Handphone : <code>*)</code></label>
                      <input type="number" name="handphone" class="form-control" placeholder="No. HP" required>
                    </div>
                  </div>
                </div>
                <hr/>
                <div class="row">
                  <div class="col-sm-3">
                    <!-- text input -->
                    <div class="form-group">
                      <label for="name">Status Kepegawaian :</label>
                      @php
                      $employStatus = App\employStatus::all();   
                      @endphp
                      <select class="form-control" name="employStatus">
                      @foreach ($employStatus as $status)
                        <option value="{{$status->desc}}">{{$status->desc}}</option>
                      @endforeach
                      <select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="name">Jenis PTK :</label>
                      @php
                      $employType = App\employType::all();   
                      @endphp
                      <select class="form-control" name="employType">
                      @foreach ($employType as $type)
                        <option value="{{$type->desc}}">{{$type->desc}}</option>
                      @endforeach
                      <select>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for="name">Status PTK :</label>
                      <select name="status" class="form-control">
                        <option value="1" selected>Aktif</option>
                        <option value="0">Tidak Aktif</option>
                      </select>
                    </div>
                  </div>
                </div>          
                <hr/>
                <label for="exampleInputFile">File Foto</label>
                <input type="file" class="form-control col-md-6" name="photo" id="photo" accept=".jpg,.png">
                <code>Ukuran foto yang direkomendasikan : 240 x 320 pixels</code>
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