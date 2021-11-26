<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mobile legends" ;

$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die ("tidak bisa terkoneksi");
}
$id ="";
$server ="";
$Nickname ="";
$Rankawal = "";
$Rankakhir ="";
$sukses ="";
$error ="";

if(isset($_GET['op'])){
    $op = $_GET['op'];
}else{
    $op ="";
}
if($op == 'delete'){
    $id = $_GET ['id'];
    $sql1 = "delete from data_akun where id = '$id'";
    $q1 = mysqli_query ($koneksi,$sql1);
    if($q1){
        $sukses = "berhasil hapus data ";
    }

}
if($id == 'edit'){
    $id = $_GET['id'];
    $sql1 = "select * from data_akun where id = '$id'";
    $q1 = mysqli_query($koneksi,$sql1);
    $r1 = mysqli_fetch_array($q1);
    $server = $r1['server'];
    $Nickname = $r1['Nickname'];
    $Rankawal = $r1['Rankawal'];
    $Rankakhir = $r1['Rankakhir'];

}

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $server = $_POST['server'];
    $Nickname = $_POST['Nickname'];
    $Rankawal = $_POST['Rankawal'];
    $Rankakhir = $_POST['Rankakhir'];

    if($id && $server && $Nickname && $Rankawal && $Rankakhir){
        if($op == 'edit'){
            $sql1 = "update data_akun set id='$id',server='$server',Nickname='$Nickname',Rankawal='$Rankawal',Rankakhir='$Rankakhir' where id ='$id'";
            $q1   = mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses = "data berhasil di update" ;
            }else{
                $error = "data gagal di update";
            }
        }else {
            $sql1 = "insert into data_akun(id,server,Nickname,Rankawal,Rankakhir) values('$id','$server','$Nickname','$Rankawal','$Rankakhir')";
        $q1   = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses = "berhasil masukkan data";
        }else {
            $error = "gagal";
        }
        }
        
    }else {
        $error ="silahkan masukkan data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOKI MOBILE LEGENDS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .mx-auto { width:800px}
        .card { margin-top: 10px;}
        </style>
</head>
<style>
    body {
                background-image : url("ML.jpg");
                position: fixed;
                width : 100%;
                height : 100%;
                background-size : 100%;
                position: relative;
            }
    </style>
<body>
    <div class="mx-auto">
    <div class="card">
  <div class="card-header">
    Create / Edit Data
  </div>
  <div class="card-body">
      <?php
      if($error){
?>
<div class="alert alert-danger" role="alert">
  <?php echo $error ?>
</div>
<?php
      }
      ?>
      <?php
      if($sukses){
?>
<div class="alert alert-success" role="alert">
  <?php echo $sukses ?>
</div>
<?php
      }
      ?>
    <form action="" method="POST"> 
    <div class="mb-3 row">
                        <label for="id" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" id="id" name="id" value="<?php echo $id ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Server" class="col-sm-2 col-form-label">Server</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="server" id="server" name="server" value="<?php echo $server ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nickname" class="col-sm-2 col-form-label">Nickname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nickname" name="Nickname" value="<?php echo $Nickname ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Rankawal" class="col-sm-2 col-form-label">Rank Awal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ID" name="Rankawal" value="<?php echo $Rankawal ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Rankakhir" class="col-sm-2 col-form-label">Rank Akhir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Rankakhir" name="Rankakhir" value="<?php echo $Rankakhir ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="simpan data" class="btn-btn-primary"/>
                    </div>
    </form>
</div>
  </div>
  <div class="card">
  <div class="card-header text-white bg-secondary">
    Data Akun
  </div>
  <div class="card-body">
      <Table class="table">
          <thead>
              <tr>
              <th scope="col">no</th>
                  <th scope="col">id</th>
                  <th scope="col">server</th>
                  <th scope="col">Nickname</th>
                  <th scope="col">Rankawal</th>
                  <th scope="col">Rankakhir</th>
                  <th scope="col">Aksi</th>
              </tr>
              <tbody>
                  <?php
                  $sql2 = "select * from data_akun order by id desc" ;
                  $q2 = mysqli_query ($koneksi,$sql2);
                  while ($r2 = mysqli_fetch_array($q2)){
                      $id = $r2['id'];
                      $server = $r2['server'];
                      $Nickname = $r2['Nickname'];
                      $Rankawal = $r2['Rankawal'];
                      $Rankakhir = $r2['Rankakhir'];
                      $urut = 1;

                      ?>
                      <tr>
                          <th scope="row"><?php echo $urut++ ?>
                          <td scope="row"><?php echo $id ?> </td>
                          <td scope="row"><?php echo $server ?> </td>
                          <td scope="row"><?php echo $Nickname ?> </td>
                          <td scope="row"><?php echo $Rankawal ?> </td>
                          <td scope="row"><?php echo $Rankakhir ?> </td>
                          <td scope="row">
                              <a href="index.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-danger">Edit</button></a>
                                <a href ="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('yakin mau delete?')"><button type="button" class="btn btn-warning">Delete</button> </a>
                            
                               </td>

                          </th>
                  </tr>
                      <?php
                  }
                  ?>
      </table>

  </div>
</div>
</div>
    </div>
</body>
</html>