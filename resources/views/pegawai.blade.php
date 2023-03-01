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
   <div class="container">
      <div class="row">
         <div class="col">
            <h1 class="text-center mb-4">Data Pegawai</h1>
            <button type="button" class="btn btn-success my-4">Tambah Data Pegawai</button>
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">No.</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Jenis Kelamin</th>
                     <th scope="col">Nomor HP</th>
                     <th scope="col" class="">Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($data as $datas)
                  <tr>
                     <th scope="row">{{ $datas->id }}</th>
                     <td>{{ $datas->nama }}</td>
                     <td>{{ $datas->jenisKelamin }}</td>
                     <td>{{ $datas->noHP }}</td>
                     <td>
                        <button type="button" class="btn btn-info text-white">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                     </td>
                  </tr>      
                  @endforeach                  
               </tbody>
            </table>
         </div>
      </div>
   </div>
</body>
</html>