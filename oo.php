<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Dashboard</title>
     <meta charset="utf-8"> 
            <script src="jquery-3.2.1.js"></script>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css">
           <script src="bootstrap.min.js"> </script>
           <link rel="stylesheet" href="font.css">
           <link rel="stylesheet" href="nawawi.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.ttf); } 

              </style>
  </head>
  <body>


<div class="content">
    <div class="header">
        <h1 class="page-title">Form Input Nilai Praktikum</h1>
    </div>
    <table id="details" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Nim</th>
                <th>Nama Praktikan</th>
                <th>Nilai 1</th>
                <th>Nilai 2</th>
                <th>Nilai 3</th>
                <th>Nilai 4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox"/></td>
                <td><input type="text" class="input-mini" name="id_nilai1"/></td>
                <td><input type="text" class="input-mini" name="id_nilai2"/></td>
                <td><input type="text" class="input-mini" name="id_nilai3"/></td>
                <td><input type="text" class="input-mini" name="id_nilai4"/></td>
            </tr>
            <tr>
                <td><input type="checkbox"/></td>
                <td><input type="text" class="input-mini" name="id_nilai1"/></td>
                <td><input type="text" class="input-mini" name="id_nilai2"/></td>
                <td><input type="text" class="input-mini" name="id_nilai3"/></td>
                <td><input type="text" class="input-mini" name="id_nilai4"/></td>
            </tr>
            <tr>
                <td><input type="checkbox"/></td>
                <td><input type="text" class="input-mini" name="id_nilai1"/></td>
                <td><input type="text" class="input-mini" name="id_nilai2"/></td>
                <td><input type="text" class="input-mini" name="id_nilai3"/></td>
                <td><input type="text" class="input-mini" name="id_nilai4"/></td>
            </tr>
            <tr>
                <td><input type="checkbox"/></td>
                <td><input type="text" class="input-mini" name="id_nilai1"/></td>
                <td><input type="text" class="input-mini" name="id_nilai2"/></td>
                <td><input type="text" class="input-mini" name="id_nilai3"/></td>
                <td><input type="text" class="input-mini" name="id_nilai4"/></td>
            </tr>
        </tbody>
    </table>
</div> <script>
    $('#details input[type="checkbox"]').change(function () {
    $(this).closest('tr').find('input:text').prop('disabled', !this.checked)
}).change()
</script>
  </body>
</html>

