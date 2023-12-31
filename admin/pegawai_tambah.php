<?php
require "../inc/koneksi.php";
include_once 'head.php';
if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $jenkel = $_POST['jenkel'];
    $jabatan = $_POST['jabatan'];

    // Perform validation if needed

    // Insert data into the database
    $query = "INSERT INTO tbl_pegawai (nip, nama_pegawai, jenkel, jabatan) VALUES ('$nip', '$nama_pegawai', '$jenkel', '$jabatan')";
    $result = mysqli_query($konek, $query);

    if ($result) {
        // Data inserted successfully
        echo "Data added successfully.";
    } else {
        // Error occurred
        echo "Error: " . mysqli_error($konek);
    }
}

mysqli_close($konek);
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<body class='contrast-red'>
	<?php include_once 'navbar.php'; ?>

<div id='wrapper'>
	<div id='main-nav-bg'></div>
	<nav class='' id='main-nav'>
		<div class='navigation'>
			<?php include_once 'sidebar.php'; ?>
		</div>
	</nav>
	<section id='content'>
		<div class='container-fluid'>
			<div class='row-fluid' id='content-wrapper'>
				<div class='span12'>
					<?php include_once 'header.php'; ?>

					<div class='row-fluid'>
				    <div class='span12 box'>
			        <div class='box-content'>
								<h3>Tambah Pegawai</h3>
								<form method='POST' action='pegawai_tambah.php'>
								<table align='left'>
									<tr>
										<td>NIP</td>
										<td> : </td>
										<td><input type=text name='nip' placeholder='nip' ></td>
									</tr>
									<tr>
										<td>NAMA</td>
										<td> : </td>
										<td><input type=text name='nama_pegawai' placeholder='Nama Pegawai' required></td>
									</tr>
									<tr>
										<td>JENIS KELAMIN</td>
										<td>:</td>
										<td><select name="jenkel">
												<option value="">-Pilih-</option>
												<option value="L">Laki-Laki</option>
												<option value="P">Perempuan</option>
											</select>
										</td>
									</tr>
						<tr>
							<td>JABATAN</td>
							<td>:</td>
							<td><input type=text name='jabatan' placeholder='jabatan' /></td>
						</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									<tr>
									<tr>
										<td colspan=3>
										<button class='btn btn-danger' name="simpan" type='submit'><i class='icon-save'></i> Simpan</button>
                    <button class='btn' onclick=self.history.back() type='button'>Batal</button>
										</td>
									</tr>
								</table>
								</form>
				<?php
				?>
			            <div class='clearfix'></div>
			            <hr class='hr-normal' />
			        </div>
				    </div>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>

<?php include_once 'footer.php'; ?>
