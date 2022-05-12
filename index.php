<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>Form Pendaftaran</title>
</head>

<body>
  <div class="wrap">
    <div class="container">
      <h1>
        Form Pendaftaran!
      </h1>
      <form action="create.php" method="POST">
        <table>
          <tr>
            <td><label for="nama">Nama Lengkap</label></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" /></td>
          </tr>
          <tr>
            <td><label for="alamat">Alamat</label></td>
            <td>:</td>
            <td>
              <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
            </td>
          </tr>
          <tr>
            <td><label for="tempat_lahir">Tempat Lahir</label></td>
            <td>:</td>
            <td>
              <input type="text" name="tempat_lahir" id="tempat_lahir" />
            </td>
          </tr>
          <tr>
            <td><label for="lahir">Tanggal Lahir</label></td>
            <td>:</td>
            <td><input type="date" name="lahir" id="lahir" /></td>
          </tr>
          <tr>
            <td><label for="kelamin">Jenis Kelamin</label></td>
            <td>:</td>
            <td>
              <input type="radio" name="kelamin" id="kelamin" value="laki-laki" />Laki-Laki
              <input type="radio" name="kelamin" id="kelamin" value="perempuan" />Perempuan
            </td>
          </tr>
          <tr>
            <td><label for="hape">Nomor Handphone</label></td>
            <td>:</td>
            <td><input type="number" name="nomor_hp" id="hape" /></td>
          </tr>
          <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td><input type="text" name="email" id="email" /></td>
          </tr>
          <tr>
            <td><label for="kecamatan">Kecamatan</label></td>
            <td>:</td>
            <td>
              <select name="kecamatan" id="kecamatan">
                <option value="">--Pilih Kecamatan--</option>
                <option value="babat">Babat</option>
                <option value="kedungpring">Kedungpring</option>
                <option value="pucuk">Pucuk</option>
                <option value="gembong">Gembong</option>
                <option value="ngimbang">Ngimbang</option>
              </select>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Simpan" class="tombol" /></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</body>

</html>