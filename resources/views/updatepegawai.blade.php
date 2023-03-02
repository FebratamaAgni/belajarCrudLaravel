<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Belajar CRUD</title>

   {{-- bootstrap --}}
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
   <h1 class="text-center mb-4">Edit Data Pegawai</h1>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-8">
            <div class="card">
               <div class="card-body">
                  <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                       <label for="nama" class="form-label">Nama Lengkap</label>
                       <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" value="{{ $data->nama }}">                       
                     </div>                     
                     <div class="mb-3">
                       <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                       <select class="form-select" name="jenisKelamin" aria-label="Default select example">
                        <option selected>{{ $data->jenisKelamin }}</option>
                        <option value="cowo">Cowo</option>
                        <option value="cewe">Cewe</option>                        
                      </select>                     
                     </div>                     
                     <div class="mb-3">
                       <label for="noHP" class="form-label">Nomor HP</label>
                       <input type="number" name="noHP" class="form-control" id="noHP" aria-describedby="emailHelp" value="{{ $data->noHP }}">                       
                     </div>                     
                     <button type="submit" class="btn btn-primary">Update Data</button>
                   </form>
               </div>
            </div>            
         </div>
      </div>
   </div>
</body>
</html>