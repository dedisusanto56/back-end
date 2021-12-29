<?php
class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "shandika galih",
  //     "nrp" => "123456789",
  //     "email" => "sandhikagalih@unpas.ac.id",
  //     "jurusan" => "teknik informatika"
  //   ],
  //   [
  //     "nama" => "doddy ferdiansyah",
  //     "nrp" => "987654321",
  //     "email" => "doddy@gmail.com",
  //     "jurusan" => "teknik industri"
  //   ],
  //   [
  //     "nama" => "erik doang",
  //     "nrp" => "654987654",
  //     "email" => "erik@gmail.com",
  //     "jurusan" => "teknik bubut"
  //   ]
  // ];

  private $dbh; //database handler
  private $stmt; //statement

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
