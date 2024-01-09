<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showProfileKorporat()
    {
        return view('mengenai-kami.profile-korporat');
    }
    public function showCartaOrganisasi(){
        return view('mengenai-kami.carta-organisasi');
    }
    public function showKonsepPeranan(){
        return view('mengenai-kami.konsep-peranan');
    }
    public function showPiagamPelanggan(){
        return view('mengenai-kami.piagam-pelanggan');
    }

    public function showBayaranMasuk(){
        return view('info-pelawat.bayaran-masuk');
    }
    public function showBorangTempahan(){
        return view('info-pelawat.borang-tempahan-maklumbalas');
    }
    public function showDirektoriPegawai(){
        return view('info-pelawat.direktori-pegawai');
    }
    public function showGaleriPameran(){
        return view('info-pelawat.galeri-pameran');
    }
    public function showGarisPanduan(){
        return view('info-pelawat.garis-panduan');
    }
    public function showMerancangLawatan(){
        return view('info-pelawat.merancang-lawatan');
    }
    public function showPelanBangunanPusatSainsNegara(){
        return view('info-pelawat.pelan-bangunan-pusat-sains-negara');
    }
    public function showSoalanLazim(){
        return view('info-pelawat.soalan-lazim');
    }
    public function showWaktuOperasi(){
        return view('info-pelawat.waktu-operasi');
    }
    public function showDinosaurEncounter(){
        return view('info-pelawat.tema.dinosaur-encounter');
    }
    public function showObskuraXR(){
        return view('info-pelawat.tema.obskura-xr');
    }

    public function showAccess(){
        return view('access');
    }


    public function showAdmin(){
        return view('admin.index');
    }

    public function showAddUser(){
        return view('admin.partials.adduser');
    }

    public function showUserList(){
        return view('admin.partials.userlist');
    }

    public function showNotice(){
        return view('admin.partials.updateNotice');
    }
}
