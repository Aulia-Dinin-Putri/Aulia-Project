<form action="" method="POST"> 
<table class="table table-striped">
	<tr><th>Nama</th><td><input type="text" name="nama" class="form-control" value="<?= $nama ?>" required=""></td></tr>
	<tr><th>Username</th><td><input type="text" name="username" class="form-control" value="<?= $username ?>" required=""></td></tr>
	<tr><th>Password</th><td><input type="password" name="password" class="form-control" value="" required=""></td></tr>
	<tr><th>Hak-Akses</th><td><select class="form-control" name="level" required="">
		<option value="admin">Admin</option>
		<option value="user">User</option>
	</select></td></tr>
	<tr><td></td><td><input type="submit" name="kirim" value="Entri Data" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
					 <a href="<?= base_url('admin/user_admin') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></td></tr>
</table>
</form>