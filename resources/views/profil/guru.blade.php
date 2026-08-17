@extends('layouts.app')

@push('guru')
    <link rel="stylesheet" href="{{ asset('css/guru.css') }}">
@endpush

@section('content') 
    <!-- Section Guru Start -->
    <section id="guru" class="guru">
      <h2>PROFIL GURU-GURU MADRASAH AL-HARUS</h2>
      <div style="overflow-y: auto">
        <table class="no-otomatis">
          <caption style="text-align: left">
            Data Guru Madrasah Diniyah Takmiliyah Al-Harus Tahun 2025
          </caption>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Depan</th>
            <th>Mata Pelajaran</th>
            <th>jabatan</th>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Abdul Malik</td>
            <td>Qur'an Hadist</td>
            <td>Guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Adel</td>
            <td></td>
            <td>Asisten Pengajar</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Astri Ananda Putri</td>
            <td></td>
            <td>Asisten Pengajar</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Astuti</td>
            <td>aqidah akhlak</td>
            <td>Guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Dandi</td>
            <td>bahasa Arab</td>
            <td>Guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Denis Firmnsyah Ramadhan</td>
            <td>Qur'an Hadist</td>
            <td>Guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Echa Karsana</td>
            <td>SKI</td>
            <td>Guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Ghiyats</td>
            <td>Bahasa Arab</td>
            <td>guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td class="foto-guru">
              <img src="{{ asset('images/guru-ihsan.jpg') }}" alt="Ihsan" />
            </td>
            <td>Ihsan Hamzah</td>
            <td>SKI/FIqih</td>
            <td>Guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td class="foto-guru">
              <img src="{{ asset('images/guru-zakky.jpg"') }} alt="Zakky" />
            </td>
            <td>M.Zakky Fadlus S</td>
            <td>Aqidah Akhlak</td>
            <td>Wali Kelas</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Meiza</td>
            <td>Safinah/Qurdist</td>
            <td>Guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td class="foto-guru">
              <img src="{{ asset('images/guru-bramm.jpg') }}" alt="bramm" />
            </td>
            <td>Mochammad Rafli</td>
            <td>Aqidah Akhlak</td>
            <td>Wali Kelas</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Muhammad Rifki</td>
            <td>Fiqih</td>
            <td>Guru Bidang Studi</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td class="foto-guru">
              <img src="{{ asset('images/guru-adaud.jpg') }}" alt="adaud" />
            </td>
            <td>Muhammad Daud Taufik Ridha S.E,</td>
            <td>b.arab</td>
            <td>Ketua Yayasan</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Nurfauziah</td>
            <td>Sejarah kebudayaan Islam</td>
            <td>Wali kelas</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>H. Obar Sobarna</td>
            <td></td>
            <td>Asisten pengajar</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Ugun Gunawan</td>
            <td></td>
            <td>Asisten Pengajar</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Rhieke Mustikawati</td>
            <td>Fiqih</td>
            <td>gbs</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Riki Aris Munandar</td>
            <td></td>
            <td>Asisten Pengajar</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td></td>
            <td>Rizal Saefudin</td>
            <td></td>
            <td>Asisten Pengajar</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td class="foto-guru">
              <img src="{{ asset('images/guru-syahrul.jpg') }}" alt="Syahrul" />
            </td>
            <td>Syahrul Ramadhan</td>
            <td>Sejarah Kebudayaan Gapleh</td>
            <td>Wali Kelas</td>
          </tr>
          <tr>
            <td style="text-align: center"></td>
            <td class="foto-guru">
              <img src="{{ asset('images/guru-azyuber.jpg') }}" alt="azyuber" />
            </td>
            <td>Asep Sopandi S.Kom.i</td>
            <td>fathul Izar</td>
            <td>Guru dari segala guru</td>
          </tr>
        </table>
      </div>
    </section>
    <!-- Section Guru End -->
@endsection