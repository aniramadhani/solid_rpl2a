<?
include_once "Mahasiswa.php";

class MahasiswaManager {
    private $daftarMahasiswa = [];

    public function tambahMahasiswa(Mahasiswa $mahasiswa) {
        $this->daftarMahasiswa[] = $mahasiswa;
    }

    public function hapusMahasiswa($nim) {
        foreach ($this->daftarMahasiswa as $key => $mahasiswa) {
            if ($mahasiswa->getNim() === $nim) {
                unset($this->daftarMahasiswa[$key]);
                break;
            }
        }
    }

    public function tampilkanDaftarMahasiswa() {
        foreach ($this->daftarMahasiswa as $mahasiswa) {
            echo "NIM: " . $mahasiswa->getNim() . ", Nama: " . $mahasiswa->getNama() . "\n";
        }
    }
}
?>