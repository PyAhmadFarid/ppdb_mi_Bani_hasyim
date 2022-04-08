<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body class=" flex flex-col justify-center">

    <div class="w-full px-10 py-3 border-b-2 ">
        <div class="flex items-center space-x-5">
            <img class=" w-24" src="{{ asset('images/logo.png') }}" alt="">
            <div class="flex-1 flex flex-col">
                <div class="font-bold text-2xl pb-3" >SMA BANI HASYIM</div>
                <span>JL.BANI HASYIM NO. 01 DESA LENGKONG</span>
                <span>Telp : 0317993691 ⋅ Fax : 0 ⋅ Kode Pos : 61171
                </span>
                <span>Email : smabanihasyim@gmail.com ⋅ Website : smabhs.sch.id
                </span>
            </div>
        </div>
    </div>
    <div class="font-bold text-center py-5">Formulir Penerimaan Peserta Didik Baru Tahun 2022</div>
    <div class="w-full px-10 py-3 border-b-2 ">
        <div class="font-bold pb-3">Registrasi Peserta Didik</div>
        <div class="flex flex-col space-y-2">
            <div class="flex">
                <span class="flex-1 text-right">Jenis Pendaftaran </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->jenis_pendaftaran??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Jalur Pendaftaran </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->jalur_pendaftaran??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Nomor Pendaftaran </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->id??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Tanggal Pendaftaran </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->created_at??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Nama Sekolah Asal </span>
                <span class="px-5">:</span>
                <span class="flex-1"> <span class="flex-1"> {{$siswa->nama_asal_sekolah??"................................................."}}</span></span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Alamat Sekolah Asal </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->alamat_asal_sekolah??"................................................."}}</span>
            </div>
        </div>
    </div>
    <div class="w-full px-10 py-3 border-b-2 ">
        <div class="font-bold pb-3">Biodata Peserta Didik</div>
        <div class="flex flex-col space-y-2">
            <div class="flex">
                <span class="flex-1 text-right">Nama Lengkap</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->nama_lengkap??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Jenis Kelamin</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->jenis_kelamin??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">NISN</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->nisn??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">NIK</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->nik??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Tempat Lahir</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->tempat_lahir??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Tanggal Lahir</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->tanggal_lahir??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Agama</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->agama??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Kebutuhan Khusus </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->kebutuhan_khusus??"................................................."}}</span>
            </div>
        </div>
    </div>
    <div class="w-full px-10 py-3 border-b-2 ">
        <div class="font-bold pb-3">Alamat</div>
        <div class="flex flex-col space-y-2">
            <div class="flex">
                <span class="flex-1 text-right">Alamat Jalan </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->alamat_jalan??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">RT </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->rt??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">RW </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->rw??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Dusun </span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->dusun??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Kelurahan / Desa</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->desa??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Kecamatan</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->kecamatan??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Kota/Kabupaten</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->kabupaten??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Kode Pos</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->kode_pos??"................................................."}}</span>
            </div>
            <div class="flex">
                <span class="flex-1 text-right">Email</span>
                <span class="px-5">:</span>
                <span class="flex-1"> {{$siswa->email_pribadi??"................................................."}}</span>
            </div>
        </div>
    </div>
    <div class="w-full px-10 py-3 border-b-2">
        <div class="text-center">Saya yang bertandatangan dibawah ini menyatakan bahwa data yang tertera diatas
            adalah yang
            sebenarnya.</div>
        <div class="flex justify-end py-5">
            <span class="w-1/2 text-right border-b border-black">{{now()->year}}</span>
        </div>
        <div class="flex justify-end pt-40">
            <span class="w-1/3 text-right border-b border-black">..</span>
        </div>
    </div>
    <div class="w-full px-10 py-3 border-b-2 ">
        <div class="flex justify-between">
            <small>Simpanlah lembar pendaftaran ini sebagai bukti pendaftaran Anda.</small>
            {{-- <small>Dicetak tanggal 18 Maret 2022 pukul 15:14:57</small> --}}
        </div>
    </div>
</body>

<script>
    print()
</script>

</html>
