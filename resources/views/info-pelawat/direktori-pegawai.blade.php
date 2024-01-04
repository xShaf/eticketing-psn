@extends('layouts.index')

@section('content');

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

  body {
    background-color: #0D2C54;
  }

  .kotak {
    background-color: #f8f8f8;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }

  .naik {
        animation: fades-up 0.5s;
    }

    @keyframes fades-up {
        0% {
            opacity: 0;
            transform: translateY(-30px) scale(0.9);
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }
</style>

<div class="container gap-4 bg-light kotak naik" style="background-color:white;">
  <h3 class="mb-4">Direktori Pegawai</h3>
  <table class="table table-striped table-sm table-bordered">
    <tbody>
      <tr>
        <td colspan="4">
          <strong style="font-size:1.8em;">PUSAT SAINS NEGARA KUALA LUMPUR (PSNKL)</strong>
        </td>
      </tr>
      <tr>
        <td colspan="4">No.Tel PSNKL: 03–20893400 / 03–2089+Samb.</td>
      </tr>
      <tr>
        <td colspan="4" valign="top"> Alamat Surat-Menyurat <br> Pusat Sains Negara Kuala Lumpur, <br> Kementerian
          Sains, Teknologi Dan Inovasi, <br> Persiaran Bukit Kiara, <br> 50662 Bukit Kiara, <br> Kuala Lumpur <br> Tel :
          +603-2089 3400 <br> Fax : +603-2089 3401 <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>PEJABAT PENGARAH</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="1">
        <td>MOHAMMAD FUAD BIN RAHMAN</td>
        <td>PENGARAH (PSN)</td>
        <td></td>
        <td>fuad</td>
      </tr>
      <tr rowid="2">
        <td>NURUL AIN BINTI MOHD NOOR</td>
        <td>PEMBANTU SETIAUSAHA PEJABAT (PSN)</td>
        <td>3501</td>
        <td>nurul.ain</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>PENGURUSAN</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="3">
        <td>MUHAMMAD RAMZAN BIN TASNIM</td>
        <td>TIMBALAN PENGARAH (P)</td>
        <td>3434</td>
        <td>ramzan</td>
      </tr>
      <tr rowid="4">
        <td>NURBAIZURA BINTI RASHID</td>
        <td>PEMBANTU SETIAUSAHA PEJABAT (P)</td>
        <td>3433</td>
        <td>nurbaizura</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>PENTADBIRAN &amp; KEWANGAN</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="5">
        <td>GEEDHA MALAR A/P SUBRAMANIAM</td>
        <td>PENOLONG PENGARAH KANAN (P)P</td>
        <td>3418</td>
        <td>geedhamalar</td>
      </tr>
      <tr rowid="6">
        <td>NOOR AISYAH BINTI MOHD AMIN</td>
        <td>MYSTEP</td>
        <td>3488</td>
        <td>n.aisyah</td>
      </tr>
      <tr rowid="7">
        <td>JUWAHIZA BINTI ISNEN HADZIRI</td>
        <td>PENOLONG PEGAWAI TADBIR (P)P</td>
        <td>3419</td>
        <td>juwahiza</td>
      </tr>
      <tr rowid="8">
        <td>ASHA WIDIANTI BINTI KAMALUL ARIFFIN</td>
        <td>PENOLONG AKAUNTAN (P)P</td>
        <td>3404</td>
        <td>widianti</td>
      </tr>
      <tr rowid="9">
        <td>FAUZIAH BINTI ASLAH</td>
        <td>KETUA PEMBANTU TADBIR (P)P</td>
        <td>3423</td>
        <td>fauziah</td>
      </tr>
      <tr rowid="10">
        <td>NORSYAKIRAH BINTI MOHD YUSOFF</td>
        <td>KETUA PEMBANTU TADBIR (KEW) (P)P</td>
        <td>3415</td>
        <td>norsyakirah</td>
      </tr>
      <tr rowid="11">
        <td>ZAMHIZATUL ATIKAH BINTI ZAMRUDDIN</td>
        <td>PEMBANTU TADBIR (KEW) (P)P1</td>
        <td>3569</td>
        <td>zamhizatul</td>
      </tr>
      <tr rowid="12">
        <td>NORFARAAIN BINTI BAKAR</td>
        <td>PEMBANTU TADBIR (KEW) (P)P2</td>
        <td>3421</td>
        <td>faraain</td>
      </tr>
      <tr rowid="13">
        <td>MOHD HAFIZ BIN MAT TAHIR</td>
        <td>PEMBANTU TADBIR (P/O) (P)P1</td>
        <td>3408</td>
        <td>hafiz</td>
      </tr>
      <tr rowid="14">
        <td>AIDA ROHAYU BINTI ALI</td>
        <td>PEMBANTU TADBIR (P/O) (P)P2</td>
        <td>3410</td>
        <td>aidarohayu</td>
      </tr>
      <tr rowid="15">
        <td>MUHAMAD SUFRI BIN ZAKARIA</td>
        <td>PEMBANTU TADBIR (P/O) (P)P3</td>
        <td>3407</td>
        <td>sufri</td>
      </tr>
      <tr rowid="16">
        <td>FARAH NUR FILDZA BINTI ABD RAHMAN</td>
        <td>PEMBANTU TADBIR (P/O) (P)P4</td>
        <td>3470</td>
        <td>fildza</td>
      </tr>
      <tr rowid="17">
        <td>HAZWANI NADIRAH BINTI MOHD ZALI</td>
        <td>PEMBANTU TADBIR (P/O) (P)P5</td>
        <td>3406</td>
        <td>hazwani</td>
      </tr>
      <tr rowid="18">
        <td>MOHD TAM SHIL BIN SAMPUL</td>
        <td>PEMBANTU OPERASI (P)P1</td>
        <td></td>
        <td>tamshil</td>
      </tr>
      <tr rowid="19">
        <td>NORHASHIMA BINTI MOHD YUSOF</td>
        <td>PEMBANTU OPERASI (P)P2</td>
        <td></td>
        <td>shima</td>
      </tr>
      <tr rowid="20">
        <td>SHAHRUL KHAIRIL ANUAR BIN ABD RASID</td>
        <td>PEMBANTU OPERASI (P)P3</td>
        <td></td>
        <td>shahrul</td>
      </tr>
      <tr rowid="21">
        <td>AZURANIE BINTI CHE MAT</td>
        <td>PEMBANTU OPERASI (P)P4</td>
        <td>3405</td>
        <td>azuranie</td>
      </tr>
      <tr rowid="22">
        <td>MUHAMMAD BIN DERAMAN</td>
        <td>PEMANDU (P)P1</td>
        <td></td>
        <td>muhammad</td>
      </tr>
      <tr rowid="23">
        <td>MOHD FAHAIRUL ZUNAIDI BIN AYUB</td>
        <td>PEMANDU (P)P2</td>
        <td></td>
        <td>fahairul</td>
      </tr>
      <tr rowid="24">
        <td>NAZRUL BIN OSMAN</td>
        <td>PEMANDU (P)P3</td>
        <td></td>
        <td>nazrul</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>TEKNOLOGI MAKLUMAT</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="25">
        <td>MUHAMMAD KHAIRUL RIJAL BIN MUHAMMAD</td>
        <td>PENOLONG PENGARAH KANAN (P)T</td>
        <td>3520</td>
        <td>mkrijal</td>
      </tr>
      <tr rowid="26">
        <td>MUHAMMAD SOLIHIN BIN TARMUJI</td>
        <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT (P)T1</td>
        <td>3521</td>
        <td>solihin</td>
      </tr>
      <tr rowid="27">
        <td>MUHAMMAD RIDHUAN BIN JONIS</td>
        <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT (P)T2</td>
        <td>3522</td>
        <td>edwin</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>BANGUNAN</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="28">
        <td>NUR HASMAWI BIN ABU BAKAR</td>
        <td>PENOLONG PENGARAH KANAN (P)B</td>
        <td>3535</td>
        <td>hasmawi</td>
      </tr>
      <tr rowid="29">
        <td>CHE HISSHAMUDDIN BIN CHE LEH</td>
        <td>PENOLONG JURUTERA (P)B1</td>
        <td>3595</td>
        <td>hisham</td>
      </tr>
      <tr rowid="30">
        <td>MOHD SHAHRIL AZRI BIN SILAHHUDIAN</td>
        <td>PENOLONG JURUTERA (P)B2</td>
        <td>3592</td>
        <td>shahril</td>
      </tr>
      <tr rowid="31">
        <td>NORRAINI BINTI LIAS</td>
        <td>PENOLONG JURUTERA (P)B3</td>
        <td>3561</td>
        <td>norraini</td>
      </tr>
      <tr rowid="32">
        <td>ROGAYAH BINTI MARZUKI</td>
        <td>PENOLONG JURUTERA (P)B4</td>
        <td>3575</td>
        <td>rogayah</td>
      </tr>
      <tr rowid="33">
        <td>MOHD ALI NAFIAH BIN MANSOR</td>
        <td>PEMBANTU KEMAHIRAN (P)B1</td>
        <td>3578</td>
        <td>alinafiah</td>
      </tr>
      <tr rowid="34">
        <td>AZFIZUL BIN AHMAD</td>
        <td>PEMBANTU KEMAHIRAN (P)B2</td>
        <td>3568</td>
        <td>azfizul</td>
      </tr>
      <tr rowid="35">
        <td>NOR AZLI BIN SIDI AHMAD</td>
        <td>PENJAGA JENTERA ELEKTRIK (P)B</td>
        <td></td>
        <td>norazli</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>DASAR &amp; PEMBANGUNAN</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="36">
        <td>
          <span style="color:red;">KOSONG <span></span>
          </span>
        </td>
        <td>PENOLONG PENGARAH (P)D</td>
        <td></td>
        <td></td>
      </tr>
      <tr rowid="37">
        <td>
          <span style="color:red;">KOSONG <span></span>
          </span>
        </td>
        <td>PEMBANTU OPERASI (P)D</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>OPERASI</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="38">
        <td>MARZIANA BINTI ABD. HALIM</td>
        <td>TIMBALAN PENGARAH KANAN (O)</td>
        <td>3588</td>
        <td>marziana</td>
      </tr>
      <tr rowid="39">
        <td>NURAIN IZZATI BINTI MOHD ROZI</td>
        <td>MYSTEP</td>
        <td></td>
        <td>izzati</td>
      </tr>
      <tr rowid="40">
        <td>ROSMAWATI BINTI MAHMOOD</td>
        <td>PEMBANTU OPERASI (O)</td>
        <td>3585</td>
        <td>rose</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>KOMUNIKASI</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="41">
        <td>HAFIZAH BINTI MUHAMAD KHER</td>
        <td>PENOLONG PENGARAH (O)K</td>
        <td>3457</td>
        <td>hafizahkher</td>
      </tr>
      <tr rowid="42">
        <td>NUR SABRINA BINTI MD AMIN</td>
        <td>MYSTEP</td>
        <td></td>
        <td>sabrina</td>
      </tr>
      <tr rowid="43">
        <td>HASNAH BINTI MUHAMAD</td>
        <td>PEGAWAI KHIDMAT PELANGGAN (O)K1</td>
        <td>3492</td>
        <td>hasnah</td>
      </tr>
      <tr rowid="44">
        <td>UWAIS QARNI BIN MOHAMED TAIB</td>
        <td>PEGAWAI KHIDMAT PELANGGAN (O)K2</td>
        <td>3461</td>
        <td>uwais</td>
      </tr>
      <tr rowid="137">
        <td>INTAN NUR ASHIKIN BINTI AWANG</td>
        <td>MYSTEP</td>
        <td></td>
        <td>intan</td>
      </tr>
      <tr rowid="135">
        <td>NUR HANIM HUSNA BINTI MD SHUHAIMI</td>
        <td>MYSTEP</td>
        <td></td>
        <td>hanim</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>JANGKAU DALAM</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="45">
        <td>ROSNANI BINTI RAHMAN</td>
        <td>KETUA PENOLONG PENGARAH (O)D</td>
        <td>3477</td>
        <td>rosnani</td>
      </tr>
      <tr rowid="46">
        <td>
          <span style="color:red;">KOSONG <span></span>
          </span>
        </td>
        <td>PENOLONG PENGARAH KANAN (O)D1</td>
        <td>3462</td>
        <td></td>
      </tr>
      <tr rowid="47">
        <td>NUR AMIRA BINTI ABD WAHAB</td>
        <td>PENOLONG PENGARAH KANAN (O)D2</td>
        <td>3481</td>
        <td>amira</td>
      </tr>
      <tr rowid="48">
        <td>MUHAMMAD AMIR IRFAN BIN AZIZAN</td>
        <td>PENOLONG PENGARAH (O)D1</td>
        <td>3490</td>
        <td>amir</td>
      </tr>
      <tr rowid="49">
        <td>NUR HAFAWATI BINTI ABDULLAH</td>
        <td>PENOLONG PENGARAH (O)D2</td>
        <td>3463</td>
        <td>hafawati</td>
      </tr>
      <tr rowid="52">
        <td>MUHAMMAD HAZIQ BIN ABDUL RAHIM</td>
        <td>MYSTEP</td>
        <td></td>
        <td>mhaziq</td>
      </tr>
      <tr rowid="138">
        <td>NORSHAHIZAT BIN NORDDIN</td>
        <td>MYSTEP</td>
        <td></td>
        <td>norshahizat</td>
      </tr>
      <tr rowid="139">
        <td>MUNIRAH SHAFIQAH BINTI MURAT</td>
        <td>MYSTEP</td>
        <td></td>
        <td>munsha</td>
      </tr>
      <tr rowid="140">
        <td>HAZIQ AMRI BIN MOHD</td>
        <td>MYSTEP</td>
        <td></td>
        <td>haziq.am</td>
      </tr>
      <tr rowid="53">
        <td>NORHANITA BINTI ABD HAMID</td>
        <td>PENOLONG PEGAWAI SAINS KANAN (O)D</td>
        <td>3466</td>
        <td>hanita</td>
      </tr>
      <tr rowid="54">
        <td>SHARWANA BINTI SAID</td>
        <td>PENOLONG PUSTAKAWAN (O)D</td>
        <td>3472</td>
        <td>sharwana</td>
      </tr>
      <tr rowid="55">
        <td>NURUL HIDAYAH BINTI DAUD</td>
        <td>PENOLONG PEGAWAI SAINS (O)D1</td>
        <td>3422</td>
        <td>n.hidayah</td>
      </tr>
      <tr rowid="56">
        <td>MUHAMAD AZIZUL BIN AZIRID</td>
        <td>PENOLONG PEGAWAI SAINS (O)D2</td>
        <td>3497</td>
        <td>azizul</td>
      </tr>
      <tr rowid="57">
        <td>NUR EMIELIA BINTI HARON</td>
        <td>PENOLONG PEGAWAI SAINS (O)D3</td>
        <td>3409</td>
        <td>emielia</td>
      </tr>
      <tr rowid="58">
        <td>MIOR SYFULNIZAM BIN ABDULLAH</td>
        <td>PEMBANTU MAKMAL (O)D1</td>
        <td></td>
        <td>mior</td>
      </tr>
      <tr rowid="59">
        <td>SITI AISYAH CHRISTINA BINTI ABDULLAH BED</td>
        <td>PEMBANTU MAKMAL (O)D2</td>
        <td></td>
        <td>christina</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>PAMERAN</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="60">
        <td>NOR MAIZATUL AZTA BINTI SANIP</td>
        <td>KETUA PENOLONG PENGARAH (O)P</td>
        <td>3452</td>
        <td>maizatul</td>
      </tr>
      <tr rowid="61">
        <td>TS. SYAHRUNNIZA BIN ABD HADI</td>
        <td>PENOLONG PENGARAH (O)P1</td>
        <td>3573</td>
        <td>syahrunniza</td>
      </tr>
      <tr rowid="63">
        <td>NOOR AIN BINTI SAMAT</td>
        <td>PENOLONG PENGARAH (O)P2</td>
        <td>3510</td>
        <td>noor.ain</td>
      </tr>
      <tr rowid="64">
        <td>NORHAFEZAH BINTI HUSAIN</td>
        <td>PENOLONG PENGARAH (O)P3</td>
        <td>3484</td>
        <td>norhafezah</td>
      </tr>
      <tr rowid="65">
        <td>ZAFFAN BINTI ZAINUDDIN</td>
        <td>PENOLONG PENGARAH (O)P4</td>
        <td>3498</td>
        <td>zaffan</td>
      </tr>
      <tr rowid="62">
        <td>AIN NAJWA BINTI MOHAMED KAMAL</td>
        <td>PENOLONG PENGARAH (O)P5</td>
        <td>3464</td>
        <td>najwa</td>
      </tr>
      <tr rowid="66">
        <td>MUHAMMAD DZULHILMI BIN MOHD RADZA</td>
        <td>MYSTEP</td>
        <td></td>
        <td>dzulhilmi1935</td>
      </tr>
      <tr rowid="141">
        <td>MUHAMMAD FAEZ BIN ABDUL RAZAK</td>
        <td>MYSTEP</td>
        <td></td>
        <td>faez</td>
      </tr>
      <tr rowid="67">
        <td>ZURENA BINTI RAMLI</td>
        <td>PENOLONG PEGAWAI SAINS KANAN (O)P</td>
        <td>3515</td>
        <td>zurena</td>
      </tr>
      <tr rowid="68">
        <td>NUR AMANINA BINTI HAJI YUSOFF</td>
        <td>PENOLONG PEGAWAI SAINS (O)P1</td>
        <td>3465</td>
        <td>amanina</td>
      </tr>
      <tr rowid="69">
        <td>MD NASIR BIN NGAH</td>
        <td>PENOLONG PEGAWAI SAINS (O)P2</td>
        <td>3428</td>
        <td>nasir</td>
      </tr>
      <tr rowid="142">
        <td>
          <span style="color:red;">KOSONG <span></span>
          </span>
        </td>
        <td>PENOLONG PEGAWAI SAINS (O)P3</td>
        <td></td>
        <td></td>
      </tr>
      <tr rowid="71">
        <td>ADAM BIN ABU BAKAR</td>
        <td>PENOLONG PEGAWAI SAINS (O)P4</td>
        <td>3467</td>
        <td>adam</td>
      </tr>
      <tr rowid="72">
        <td>MOKHTAR BIN EISA</td>
        <td>PENOLONG JURUTERA (O)P1</td>
        <td>3589</td>
        <td>mokhtar</td>
      </tr>
      <tr rowid="73">
        <td>HAYATI BINTI ISMAIL</td>
        <td>PENOLONG JURUTERA (O)P2</td>
        <td>3576</td>
        <td>hayati</td>
      </tr>
      <tr rowid="74">
        <td>MOHD ZULKARNAIN BIN CHE HASSAN</td>
        <td>PENOLONG JURUTERA (O)P3</td>
        <td>3579</td>
        <td>zul</td>
      </tr>
      <tr rowid="75">
        <td>ROZIA HANIM BINTI MOHD DAIM</td>
        <td>PENOLONG JURUTERA (O)P4</td>
        <td></td>
        <td>-</td>
      </tr>
      <tr rowid="76">
        <td>MOHD RAZALI BIN YUSOH</td>
        <td>PENOLONG JURUTERA (O)P5</td>
        <td>3594</td>
        <td>razali</td>
      </tr>
      <tr rowid="77">
        <td>FAIZAL BIN CHE HAMAD</td>
        <td>PENOLONG JURUTERA (O)P6</td>
        <td></td>
        <td>faizal</td>
      </tr>
      <tr rowid="78">
        <td>MUHAIZAM BIN HAMZAH</td>
        <td>PENOLONG JURUTERA (O)P7</td>
        <td></td>
        <td>muhaizam</td>
      </tr>
      <tr rowid="79">
        <td>MOHAMMAD FAISAL BIN YA'COB</td>
        <td>PENOLONG JURUTERA (O)P8</td>
        <td></td>
        <td>mohammadfaisal</td>
      </tr>
      <tr rowid="80">
        <td>MOHAMAD AZHAR BIN ISMAIL</td>
        <td>PENOLONG JURUTERA (O)P9</td>
        <td>3590</td>
        <td>azhar</td>
      </tr>
      <tr rowid="81">
        <td>ABD HAMID BIN MOHD JALI</td>
        <td>PENOLONG JURUTERA (O)P10</td>
        <td>3597</td>
        <td>hamidj</td>
      </tr>
      <tr rowid="82">
        <td>MUHAMMAD ALI SUFI BIN MOHD BEKLI</td>
        <td>JURUTEKNIK (O)P1</td>
        <td></td>
        <td>alisufi</td>
      </tr>
      <tr rowid="83">
        <td>MOHD RAFAEI BIN IBRAHIM</td>
        <td>JURUTEKNIK (O)P2</td>
        <td></td>
        <td>mdrafaei</td>
      </tr>
      <tr rowid="84">
        <td>ABD SHUKOR AL- FARIZ BIN AHMAD SAYUTI</td>
        <td>JURUTEKNIK (O)P3</td>
        <td></td>
        <td>fariz</td>
      </tr>
      <tr rowid="129">
        <td>AMEERUL SYAHMI BIN ROHAIZAT</td>
        <td>MYSTEP</td>
        <td></td>
        <td>ameerul</td>
      </tr>
      <tr rowid="130">
        <td>NURUL KHADIJAH BINTI CHAHRIL</td>
        <td>MYSTEP</td>
        <td></td>
        <td>khadijah</td>
      </tr>
      <tr rowid="131">
        <td>MUHAMMAD FADHILAH BIN HARON</td>
        <td>MYSTEP</td>
        <td></td>
        <td>fadh</td>
      </tr>
      <tr rowid="143">
        <td>MUHAMMAD RAFI'UDDIN BIN MOHAMAD</td>
        <td>MYSTEP</td>
        <td></td>
        <td></td>
      </tr>
      <tr rowid="144">
        <td>MUHAMMAD FAISAL BIN MALEK</td>
        <td>MYSTEP</td>
        <td></td>
        <td>faisal</td>
      </tr>
      <tr rowid="145">
        <td>SYAIDATUL AMIRAH BINTI NOR HALIMI</td>
        <td>MYSTEP</td>
        <td></td>
        <td>syaidatul</td>
      </tr>
      <tr rowid="146">
        <td>WAN IMI PUTERI BALQIS BINTI WAN IBRAHIM</td>
        <td>MYSTEP</td>
        <td></td>
        <td></td>
      </tr>
      <tr rowid="85">
        <td>MOHD HASRUL BIN JAMALUDIN</td>
        <td>PEMBANTU KEMAHIRAN (O)P1</td>
        <td></td>
        <td>abdullah</td>
      </tr>
      <tr rowid="86">
        <td>ALISA CUSSEY MURPHY</td>
        <td>PEMBANTU KEMAHIRAN (O)P2</td>
        <td></td>
        <td>cussey</td>
      </tr>
      <tr rowid="87">
        <td>MUZAKKIR BIN ABD GHANI</td>
        <td>PEMBANTU KEMAHIRAN (O)P3</td>
        <td></td>
        <td>muzakkir</td>
      </tr>
      <tr rowid="147">
        <td>DANIEL BIN NAZARUDDIN</td>
        <td>MYSTEP</td>
        <td></td>
        <td>-</td>
      </tr>
      <tr rowid="148">
        <td>FARISZUL BIN ZAKARIA</td>
        <td>MYSTEP</td>
        <td></td>
        <td>fariszul</td>
      </tr>
      <tr rowid="149">
        <td>AHMAD SHAFIZ BIN SALAHUDDIN</td>
        <td>MYSTEP</td>
        <td></td>
        <td>shafiz</td>
      </tr>
      <tr rowid="150">
        <td>MUHAMMAD FAIZUL BIN ISMADI</td>
        <td>MYSTEP</td>
        <td></td>
        <td>faizul</td>
      </tr>
      <tr rowid="151">
        <td>SYAMIR AIMAN BIN SHAHRUL NADZMAN</td>
        <td>MYSTEP</td>
        <td></td>
        <td>syamir</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>PENERBITAN</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="88">
        <td>MUHAMMAD ARASHY BIN MOHD AZIM</td>
        <td>PENOLONG PENGARAH (O)T</td>
        <td>3495</td>
        <td>arashy</td>
      </tr>
      <tr rowid="89">
        <td>NADIAH BINTI MOHD FAUZI</td>
        <td>MYSTEP</td>
        <td></td>
        <td>nadiah.fauzi</td>
      </tr>
      <tr rowid="90">
        <td>SUHAILE BINTI JALALUDIN</td>
        <td>PEREKA (O)T1</td>
        <td>3455</td>
        <td>suhaile</td>
      </tr>
      <tr rowid="136">
        <td>NURATIKAH BINTI MUHAMED YANI</td>
        <td>PEREKA (O)T2</td>
        <td></td>
        <td>nuratikah</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>JANGKAU LUAR</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="92">
        <td>LOW YOON KEONG</td>
        <td>KETUA PENOLONG PENGARAH (O)L</td>
        <td>3413</td>
        <td>low</td>
      </tr>
      <tr rowid="134">
        <td>YM TENGKU MOHD HAZIMI BIN TUAN HASSAN</td>
        <td>PENOLONG PENGARAH KANAN (O)L</td>
        <td>3493</td>
        <td>m.hazimi</td>
      </tr>
      <tr rowid="93">
        <td>HARIZ IZAAN BIN KAMARUDZAMAN</td>
        <td>PENOLONG PENGARAH (O)L</td>
        <td>3414</td>
        <td>hariz</td>
      </tr>
      <tr rowid="94">
        <td>SITI AISYAH NAJIHA BINTI JAMALUDDIN</td>
        <td>MYSTEP</td>
        <td></td>
        <td>najiha</td>
      </tr>
      <tr rowid="95">
        <td>MUHAMMAD ALIAS BIN MOHD HANAPIAH</td>
        <td>MYSTEP</td>
        <td></td>
        <td>alias</td>
      </tr>
      <tr rowid="96">
        <td>SARIPAH ZARINA BINTI WAN ABU BAKAR</td>
        <td>PENOLONG PEGAWAI SAINS (O)L1</td>
        <td>3456</td>
        <td>zarina</td>
      </tr>
      <tr rowid="97">
        <td>MOHD SALLEH BIN SANUSI</td>
        <td>PENOLONG PEGAWAI SAINS (O)L2</td>
        <td>3482</td>
        <td>salleh</td>
      </tr>
      <tr rowid="98">
        <td>AMIRA ATIYA ZAL'ULYA BINTI MOHD AMIR</td>
        <td>PENOLONG PEGAWAI SAINS (O)L3</td>
        <td>3420</td>
        <td>amira.atiya</td>
      </tr>
      <tr rowid="99">
        <td>EDWARD MOTIUS</td>
        <td>PEMBANTU MAKMAL (O)L</td>
        <td>3482</td>
        <td>edward</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
    </tbody>
  </table>

  <table class="table table-striped table-sm table-bordered">
    <tbody>
      <tr>
        <td colspan="4">
          <strong style="font-size:1.8em;">PUSAT SAINS NEGARA CAWANGAN WILAYAH UTARA (PSNCWU)</strong>
        </td>
      </tr>
      <tr>
        <td colspan="4">No.Tel PSNCWU : 04–7207700 / 04–720+Sambungan</td>
      </tr>
      <tr>
        <td colspan="4" valign="top"> Alamat Surat-Menyurat <br> Pusat Sains Negara Cawangan Wilayah Utara, <br> Lot
          978, Jalan Gunung Keriang, <br> Mukim Gunung Keriang, <br> 06570 Alor Setar, <br> Kedah Darul Aman <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <strong>PSNCWU</strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>NAMA PEGAWAI</strong>
        </td>
        <td>
          <strong>GELARAN &amp; JAWATAN</strong>
        </td>
        <td>
          <strong>Samb.</strong>
        </td>
        <td>
          <strong>
            <u>email</u>@psn.gov.my </strong>
        </td>
      </tr>
      <tr rowid="100">
        <td>HAFIZUL HANIF BIN ABU BAKAR</td>
        <td>KETUA CAWANGAN (U)</td>
        <td>7702</td>
        <td>hafizulhanif</td>
      </tr>
      <tr rowid="101">
        <td>FARAHZAIDA BINTI ABDUL KADER</td>
        <td>TIMBALAN KETUA CAWANGAN (U)</td>
        <td>7703</td>
        <td>farah</td>
      </tr>
      <tr rowid="102">
        <td>AHMAD SOFFIAN BIN ABDUL RAHMAN</td>
        <td>PENOLONG PENGARAH (U)</td>
        <td>7704</td>
        <td>soffian</td>
      </tr>
      <tr rowid="103">
        <td>AQIL MUSTAQIM BIN SAIFUDIN</td>
        <td>MYSTEP</td>
        <td></td>
        <td>aqil</td>
      </tr>
      <tr rowid="104">
        <td>NURUL AIDA BINTI MOHD SAIDI</td>
        <td>MYSTEP</td>
        <td></td>
        <td>aida</td>
      </tr>
      <tr rowid="105">
        <td>MOHAMMAD HIKMAL BIN AHMAD SABRI</td>
        <td>MYSTEP</td>
        <td></td>
        <td>hikmal</td>
      </tr>
      <tr rowid="106">
        <td>AHMAD MISWAN BIN IBRAHIM</td>
        <td>PENOLONG PEGAWAI TADBIR (U)</td>
        <td>7707</td>
        <td>miswan</td>
      </tr>
      <tr rowid="107">
        <td>SITI HUSNA BINTI MOHD KHIRRUDIN</td>
        <td>PENOLONG PEGAWAI SAINS (U)1</td>
        <td>7705</td>
        <td>husna</td>
      </tr>
      <tr rowid="108">
        <td>ARIF FAKHRIE BIN JOHARI</td>
        <td>PENOLONG PEGAWAI SAINS (U)2</td>
        <td>7706</td>
        <td>arif</td>
      </tr>
      <tr rowid="109">
        <td>MAD DUAN BIN HARON</td>
        <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT (U)1</td>
        <td>7708</td>
        <td>duan</td>
      </tr>
      <tr rowid="110">
        <td>ABD MALIK BIN MAT RADZI</td>
        <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT (U)2</td>
        <td>7712</td>
        <td>malikradzi</td>
      </tr>
      <tr rowid="111">
        <td>MOHD KHUARUDIN BIN YAHYA</td>
        <td>PENOLONG JURUTERA (U)1</td>
        <td>7711</td>
        <td>mkhuarudin</td>
      </tr>
      <tr rowid="112">
        <td>NOR ZURATUL'AIN BINTI ABD RASHID</td>
        <td>PENOLONG JURUTERA (U)2</td>
        <td>7711</td>
        <td>norzuratulain</td>
      </tr>
      <tr rowid="113">
        <td>
          <span style="color:red;">KOSONG <span></span>
          </span>
        </td>
        <td>PENOLONG JURUTERA (U)3</td>
        <td></td>
        <td></td>
      </tr>
      <tr rowid="114">
        <td>
          <span style="color:red;">KOSONG <span></span>
          </span>
        </td>
        <td>PENOLONG JURUTERA (U)4</td>
        <td></td>
        <td></td>
      </tr>
      <tr rowid="115">
        <td>MARDZIAH BINTI MARZUKI</td>
        <td>PENOLONG PUSTAKAWAN (U)</td>
        <td>7710</td>
        <td>mardziah</td>
      </tr>
      <tr rowid="132">
        <td>WAN NURASYHRAF RABAIN BINTI WAN AZMAN</td>
        <td>PEMBANTU MAKMAL (U)</td>
        <td>7706</td>
        <td>wannurasyhraf</td>
      </tr>
      <tr rowid="117">
        <td>AHMAD ADAM BIN ZAKARIA</td>
        <td>MYSTEP</td>
        <td></td>
        <td>ahmadadam</td>
      </tr>
      <tr rowid="118">
        <td>SYAAMIL IRFAAN BIN SHAMSUL AMRI</td>
        <td>MYSTEP</td>
        <td></td>
        <td>syaamil</td>
      </tr>
      <tr rowid="119">
        <td>MOHD FIRDAUS BIN BAHAROM</td>
        <td>PENJAGA JENTERA ELEKTRIK (U)</td>
        <td>7713</td>
        <td>firdausbaharom</td>
      </tr>
      <tr rowid="120">
        <td>RAZWINA BINTI MOHAMAD RADZI</td>
        <td>PEGAWAI KHIDMAT PELANGGAN (U)</td>
        <td>7700</td>
        <td>razwina</td>
      </tr>
      <tr rowid="121">
        <td>MOHD AMIRUL HAFSHAM BIN AHMAD SABRI</td>
        <td>PEMBANTU TADBIR (P/O) (U)</td>
        <td>7715</td>
        <td>amirul</td>
      </tr>
      <tr rowid="122">
        <td>MASRI BINTI HAJI MAT SAAD</td>
        <td>PEMBANTU TADBIR (KEW) (U)</td>
        <td>7714</td>
        <td>masri</td>
      </tr>
      <tr rowid="123">
        <td>AZLAN BIN KAMARULZAMAN</td>
        <td>PEMBANTU OPERASI (U)</td>
        <td>7716</td>
        <td>azlank</td>
      </tr>
      <tr rowid="124">
        <td>FAIZALAMIZUL BIN MHD PUZI</td>
        <td>PEMANDU (U)1</td>
        <td>7716</td>
        <td>faizalamizul</td>
      </tr>
      <tr rowid="125">
        <td>ZULKIFLI BIN ASLI</td>
        <td>PEMANDU (U)2</td>
        <td>7716</td>
        <td>zulkifli_asli</td>
      </tr>
      <tr>
        <td colspan="4">
          <br>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
</div>
@endsection
