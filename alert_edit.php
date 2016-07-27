<!DOCTYPE HTML>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>Aguzrybudy.com | Sweet Alert</title>
<link rel="stylesheet" href="alert/css/sweetalert.css">
</head>
<body >

<table id="mytable" class="table table-bordered" border="1">
    <thead>
      <th>No</th>
      <th>Name</th>
      <th>Description</th>
      <th>Action</th>
    </thead>
<?php 
$host="localhost";
$user="root";
$pass="";
$database="dbphp7";
$koneksi=new mysqli($host,$user,$pass,$database);
if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
}
$no = 0;
$modal=mysqli_query($koneksi,"SELECT * FROM alert");
while($r=mysqli_fetch_array($modal)){
$no++;
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['alert_name']; ?></td>
      <td><?php echo  $r['description']; ?></td>
      <td>
         <a href="proses_delete.php?&alert_id=<?php echo  $r['alert_id']; ?>"  class="edit-link">Edit</a>
		 <a href="proses_delete.php?&alert_id=<?php echo  $r['alert_id']; ?>"  class="delete-link">Delete</a>
		 
      </td>
  </tr>
 

<?php } ?>
</table>

<!--Scripts-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>


	<script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: 'Alert',
                        text: 'Hapus Data?',
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>

    <script>
        jQuery(document).ready(function($){
            $('.edit-link').on('click',function(){
               var getLink = $(this).attr('href');
                swal({
                        title: ' Alert',
                        text: 'Edit Data?',
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>
	
</body>
</html>
