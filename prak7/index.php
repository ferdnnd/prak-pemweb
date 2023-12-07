<!-- Ferdinand Zulvan Lindan | 121140170 -->
<!-- RB -->
<?php
class Manusia
{
    protected $nama;

    public function setNama($nama)
    {
        $regex = '/^[a-zA-Z\s]+$/';
        if (!preg_match($regex, $nama)) {
            throw new InvalidArgumentException('Nama terdiri dari huruf & spasi.');
        }
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

class Mahasiswa extends Manusia
{
    private $nim;
    private $prodi;
    private $alamat;

    public function __construct($nama, $nim, $prodi, $alamat)
    {
        parent::setNama($nama);
        $this->setNim($nim);
        $this->setProdi($prodi);
        $this->setAlamat($alamat);
    }

    public function setNama($nama)
    {
        $regex = '/^[a-zA-Z\s]+$/';
        if (!preg_match($regex, $nama)) {
            throw new InvalidArgumentException('Nama terdiri dari huruf');
        }
        $this->nama = $nama;
    }

    public function setNim($nim)
    {
        $regex = '/^[0-9]{9}$/';
        if (!preg_match($regex, $nim)) {
            throw new InvalidArgumentException('NIM terdiri dari 9 digit angka');
        }
        $this->nim = $nim;
    }

    public function setProdi($prodi)
    {
        $regex = '/^[a-zA-Z\s]+$/';
        if (!preg_match($regex, $prodi)) {
            throw new InvalidArgumentException('Prodi terdiri dari huruf & spasi');
        }
        $this->prodi = $prodi;
    }

    public function setAlamat($alamat)
    {
        $regex = '/^[a-zA-Z0-9\s\.,#-]+$/';
        if (!preg_match($regex, $alamat)) {
            throw new InvalidArgumentException('Alamat terdiri dari huruf & angka');
        }
        $this->alamat = $alamat;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }
}

try {
    $mahasiswa = new Mahasiswa("Ferdinand Zulvan", "121140170", "Teknik Informatika", "Kotabumi");
    echo "Nama: " . $mahasiswa->getNama();
} catch (InvalidArgumentException $error) {
    echo "Error: " . $error->getMessage(). "\n";
}
try {
    $mahasiswa = new Mahasiswa("Ferdinand_Zulvan", "121140170", "Teknik Informatika", "Kotabumi");
    echo "\nNIM: " . $mahasiswa->getNama();
} catch (InvalidArgumentException $error) {
    echo "Error: " . $error->getMessage();
}

?>