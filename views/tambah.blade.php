<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data</h1>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
         <div class="card">
            <div class="card-body">
              <form action="insertdata" method="POST" enctype="multipart/form-data">
                @csrf
     
              <div class="mb-3">
                <label class="form-label">Nama Buku</label>
                <input type="text" name="nama" class="form-control" >
              </div>
              
              <div class="mb-3">
                <label class="form-label">Harga Buku</label>
                <input type="text" name="harga" class="form-control">
              </div>

              <div class="mb-3">
                <label class="form-label">Sinopsis</label>
                <input type="text" name="sinopsis" class="form-control">
              </div>

              <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" >
              </div>

              <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control">
              </div>
            
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        
            </div>
          </div>
        </div>
      </div>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>