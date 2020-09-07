<?php
class barang{
public $namaBarang,
	   $merk, 
	   $harga;

public function getCetak(){
	return "$this->namaBarang, $this->merk,( Rp $this->harga)";
} 
public function __construct($namaBarang="nama Barang",$merk="merk",$harga=0){
	$this->namaBarang = $namaBarang;
	$this->merk=$merk;
	$this->harga=$harga;
 		}
}

	class cetakInfobarang{
		public function cetakInfo($barang){
			$str="{$barang->namaBarang} , {$barang->getCetak()}";
			return$str;
		}
	}
$barang1 = new barang("KULKAS ", "MESIN CUCI", 2500000);
$barang2 = new barang("TELEVISI", "AC", 3400000);
$barang3 = new barang("MEJA MAKAN", "KASUR ANAK", 1200000);
$barang4 = new barang("DISPENSER", "MESIN JAHIT", 900000);
$cetakInfobarang = new cetakInfobarang();



echo "YESI ASVIA";
echo "<br>";
echo "RPL XI-4";
echo "<br>";
echo "CISARUA 1";
echo "<br>";
echo "<br>";
echo "<br>";
echo "=============== BARANG ELEKTRONIK ===============";
echo "<br>";
echo "<br>";
echo "Nama Barang : " . $barang1->getCetak();
echo "<br>";
echo "Nama Barang : " .$barang2->getCetak();
echo "<br>";
echo "Nama Barang : " .$barang3->getCetak();
echo "<br>";
echo "Nama Barang : " .$barang4->getCetak();
echo "<br>";
echo "<br>";
echo "==================================================";
echo "<br>";
echo "<br>";
echo $cetakInfobarang->cetakInfo($barang1);
?>