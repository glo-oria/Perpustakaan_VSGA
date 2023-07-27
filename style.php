* {
  margin: 0px;
  padding: 0px;
}

/* --Awal index-- */

body {
  font-family: sans-serif;
  font-size: 13px;
  color: blue;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}

#container {
  width: 99%;
  margin: 0px auto;
  border: 2px solid #919191;
  background-color: #c4c4c4;
}

#header {
  width: 100%;
  height: 100px;
  background-color: #c4c4c4;
}

#logo-perpustakaan-container {
  float: left;
  width: 6%;
  height: 80%;
  padding: 8px;
}

#logo-perpustakaan {
  width: 80px;
  height: 80px;
  border: 2px solid #ffffff;
}

#nama-alamat-perpustakaan-container {
  float: left;
  width: 90%;
  padding: 10px;
}

.nama-alamat-perpustakaan {
  float: left;
  width: 100%;
  padding: 6px;
  text-align: center;
}

#header2 {
  width: 100%;
  height: 32px;
  background-color: #5c3701;
  color: #ffffff;
}

#nama-user {
  float: left;
  color: #eeeeee;
  padding: 6px;
}

#sidebar {
  float: left;
  width: 15.8%;
}

#sidebar ul {
  list-style: none;
}

#sidebar a:link,
#sidebar a:visited {
  color: black;
  text-decoration: none;
  display: block;
  padding: 6px;
}

#sidebar a:hover {
  background-color: #919191;
}

.label-navigasi {
  background-color: #5c3701;
  padding: 6px;
  color: white;
  font-weight: bold;
}

#content-container {
  float: left;
  width: 83.8%;
  background-color: #ffffff;
}

#footer {
  width: 99.4%;
  height: 20px;
  clear: both;
  text-align: center;
  padding: 4px;
  background-color: #5c3701;
  color: #ffffff;
}

/* --Akhir index.php-- */

/* --Awal pages-- */

#label-page {
  margin-top: 6px;
  margin-bottom: 6px;
  margin-left: 6px;
  border: 2px solid #c4c4c4;
  padding: 4px;
  width: 97.9%;
}

#content {
  float: left;
  width: 96.8%;
  min-height: 454px;
  background-image: none;
  border: 2px solid #c4c4c4;
  padding: 10px;
  margin-bottom: 6px;
}

#beranda-judul {
  text-align: center;
  background-color: #ffffff; /* Add a valid background color value */
}

#beranda-konten {
  text-align: center;
  padding-top: 140px;
  color: red;
}

.tombol {
  border-radius: 4px;
  font-size: 12px;
  text-decoration: none;
  background-color: #f1f1f1;
  padding-top: 3px;
  padding-bottom: 3px;
  padding-left: 5px;
  padding-right: 5px;
  border: 1px solid #01597e;
  color: black;
}

#tombol-tambah-container {
  margin-bottom: 10px;
}

#tombol-tambah-container a:hover {
  background-color: #c4c4c4;
}

#tabel-tampil {
  border: 1px solid #c4c4c4;
  width: 100%;
}

#tabel-tampil tr:nth-child(odd) {
  background-color: #f1f1f1;
}

#tabel-tampil tr th {
  background-color: #5c3701;
  color: #ffffff;
  padding: 4px;
  text-align: left;
}

#tabel-tampil td {
  padding: 4px;
}

#label-tampil-no {
  width: 30px;
}

#label-opsi {
  width: 158px;
  font-weight: bold;
}

#label-opsi2 {
  width: 82px;
  font-weight: bold;
}

#label-opsi3 {
  width: 166px;
  font-weight: bold;
}

.tombol-opsi-container {
  float: left;
}

.tombol-opsi-container a:hover {
  background-color: #c4c4c4;
}

#tabel-input {
  width: 100%;
}

.label-formulir {
  width: 12%;
  height: 36px;
  margin: 20px;
}

.isian-formulir {
  width: 80%;
  padding: 4px;
  width: 99.8%;
}

.isian-formulir2 {
  width: 78%;
  padding: 4px;
  width: 20%; /* Fix the width value or correct the class name */
}

.label-formulir2 {
  width: 100%;
  height: 26px;
  margin: 20px;
  padding-left: 16px;
  font-weight: bold;
}

.isian-formulir-border {
  border: 1px solid #c4c4c4;
}

.warna-formulir-disabled {
  background-color: #f1f1f1;
}

/* --Akhir pages-- */
