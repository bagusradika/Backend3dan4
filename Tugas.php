<?php
class Buku {
   public $IdBuku, $NamaBuku, $JenisBuku;
   public function __construct($idBuku, $namaBuku, $jenisBuku) {
    $this->IdBuku = $idBuku;
    $this->NamaBuku = $namaBuku;
    $this->JenisBuku = $jenisBuku;
   }
   public function InfoBuku() {
    echo "===INFORMASI PEMINJAMAN BUKU PERPUSTAKAAN=== <br>";
    echo "ID Buku : $this->IdBuku<br>";
    echo "Nama Buku : $this->NamaBuku<br>";
    echo "Jenis Buku : $this->JenisBuku<br>";
   }
}
Class Anggota {
    public $nama;
    public $IdAnggota;
    public function __construct($nama,$idAnggota){
        $this->nama = $nama;
        $this->IdAnggota = $idAnggota;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setNama($nama) {
        $this->nama =$nama;
    }
    public function getIdAnggota(){
        return $this->IdAnggota;
    }
    public function dipinjamoleh(){
        echo " Nama Anggota  : ". $this->nama . "<br>";
        echo "ID Anggota     : ". $this->IdAnggota. "<br>";
    }
}
Class Peminjaman extends Buku {
    private $IdPinjam ;
    private $tanggalPinjam;
    private $tanggalKembali;
    public $anggota;
    public function __construct($idBuku, $namaBuku, $jenisBuku,$idPinjam,$tanggalPinjam,$tanggalKembali,$anggota){
        parent::__construct($idBuku, $namaBuku, $jenisBuku);
        $this->IdPinjam = $idPinjam;
        $this->tanggalPinjam = $tanggalPinjam;
        $this->tanggalKembali = $tanggalKembali;
        $this->anggota = $anggota;
    }
    public function detaipinjaman(){
        $this->InfoBuku();
        $this->anggota->dipinjamoleh();

        echo "ID Peminjaman :". $this->IdPinjam. "<br>";
        echo "Tanggal Pinjam :". $this->tanggalPinjam. "<br>";
        echo "Tanggal Pengembaliyan :". $this->tanggalKembali. "<br>";
    }



}
$anggota = new Anggota("Bagus Radika", "25054");

$peminjaman = new Peminjaman( "B007","Belajar PHP","Pendidikan","P001","26-9-2026","14-12-2026",$anggota);

$peminjaman->detaipinjaman();
?>
    