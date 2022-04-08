@extends('template.default')

@section('content')
    <div class="flex-1 flex flex-col items-center justify-center bg-gray-100 ">
        <div class="font-semibold text-3xl p-10 border-b">
            Form Pendaftaran Siswa Baru
        </div>

        <div class="bg-white md:w-2/3 w-full  flex flex-col rounded">
            <div class="flex flex-col flex-1">
                {{-- <div class="flex justify-center">
                <img class="" src="{{ asset('images/logofull.jpg') }}" alt="">
            </div> --}}

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col space-y-3 p-10 border-b">
                        <span class="font-semibold text-xl">Akun</span>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Email <small class="text-red-500">*</small></span>
                            <input type="email" class="p-3 border rounded-md" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <small class="text-red-500">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Password <small class="text-red-500">*</small></span>
                            <input type="password" class="p-3 border rounded-md" name="password">
                            @if ($errors->has('password'))
                                <small class="text-red-500">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Konfirmasi Password <small
                                    class="text-red-500">*</small></span>
                            <input type="password" class="p-3 border rounded-md" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <small class="text-red-500">{{ $errors->first('password_confirmation') }}</small>
                            @endif
                        </div>

                    </div>

                    <div class="flex flex-col space-y-3 p-10 border-b">
                        <span class="font-semibold text-xl">Registrasi Peserta Didik</span>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500  font-medium">Jenis Pendaftaran <small
                                    class="text-red-500">*</small></span>
                            <select class="p-3 border rounded-md" name="jenis_pendaftaran">
                                <option value="baru" {{ old('jenis_pendaftaran') == 'baru' ? 'selected' : '' }}>Baru
                                </option>
                                <option value="pindahan" {{ old('jenis_pendaftaran') == 'pindahan' ? 'selected' : '' }}>
                                    Pindahan
                                </option>
                            </select>
                            @if ($errors->has('jenis_pendaftaran'))
                                <small class="text-red-500">{{ $errors->first('jenis_pendaftaran') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Jalur Pendaftaran <small
                                    class="text-red-500">*</small></span>
                            <select class="p-3 border rounded-md" name="jalur_pendaftaran">
                                <option value="Umum" {{ old('jalur_pendaftaran') == 'Umum' ? 'selected' : '' }}>Umum
                                </option>
                                <option value="Keluarga Tidak Mampu"
                                    {{ old('jalur_pendaftaran') == 'Keluarga Tidak Mampu' ? 'selected' : '' }}>Keluarga
                                    Tidak
                                    Mampu</option>
                                <option value="Prestasi" {{ old('jalur_pendaftaran') == 'Prestasi' ? 'selected' : '' }}>
                                    Prestasi
                                </option>
                            </select>
                            @if ($errors->has('jalur_pendaftaran'))
                                <small class="text-red-500">{{ $errors->first('jalur_pendaftaran') }}</small>
                            @endif

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Sekola Asal</span>
                            <input type="text" class="p-3 border rounded-md" name="nama_asal_sekolah"
                                value="{{ old('nama_asal_sekolah') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Alamat Sekola Asal</span>
                            <input type="text" class="p-3 border rounded-md" name="alamat_asal_sekolah"
                                value="{{ old('alamat_asal_sekolah') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Apakah Pernah PAUD</span>
                            <select class="p-3 border rounded-md" name="pernah_paud">
                                <option value="1" {{ old('pernah_paud') == '1' ? 'selected' : '' }}>Pernah</option>
                                <option value="0" {{ old('pernah_paud') == '0' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Apakah Pernah TK</span>
                            <select class="p-3 border rounded-md" name="pernah_tk">
                                <option value="1" {{ old('pernah_tk') == '1' ? 'selected' : '' }}>Pernah</option>
                                <option value="0" {{ old('pernah_tk') == '0' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Hobi</span>
                            <input type="text" class="p-3 border rounded-md" name="hobi" value="{{ old('hobi') }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Cita Cita</span>
                            <input type="text" class="p-3 border rounded-md" name="cita_cita"
                                value="{{ old('cita_cita') }}">
                        </div>
                    </div>

                    <div class="flex flex-col space-y-3 p-10 border-b">
                        <span class="font-semibold text-xl">Data Pribadi</span>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Lengkap <small
                                    class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="nama_lengkap">
                            @if ($errors->has('nama_lengkap'))
                                <small class="text-red-500">{{ $errors->first('nama_lengkap') }}</small>
                            @endif
                        </div>


                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Jenis Kelamin <small
                                    class="text-red-500">*</small></span>

                            <select class="p-3 border rounded-md" name="jenis_kelamin">
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki Laki</option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>


                            @if ($errors->has('jenis_kelamin'))
                                <small class="text-red-500">{{ $errors->first('jenis_kelamin') }}</small>
                            @endif
                        </div>


                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">NISN</span>
                            <input type="text" class="p-3 border rounded-md" name="nisn" value="{{ old('nisn') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">NIK <small class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="nik" value="{{ old('nik') }}">
                            @if ($errors->has('nik'))
                                <small class="text-red-500">{{ $errors->first('nik') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tempat Lahir <small
                                    class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="tempat_lahir"
                                value="{{ old('tempat_lahir') }}">
                            @if ($errors->has('tempat_lahir'))
                                <small class="text-red-500">{{ $errors->first('tempat_lahir') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tanggal Lahir <small
                                    class="text-red-500">*</small></span>
                            <input type="date" class="p-3 border rounded-md" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir') }}">
                            @if ($errors->has('tanggal_lahir'))
                                <small class="text-red-500">{{ $errors->first('tanggal_lahir') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Agama <small class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="agama" value="{{ old('agama') }}">
                            @if ($errors->has('agama'))
                                <small class="text-red-500">{{ $errors->first('agama') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kebutuhan Khusus</span>
                            <input type="text" class="p-3 border rounded-md" name="kebutuhan_khusus"
                                value="{{ old('kebutuhan_khusus') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Alamat Jalan <small
                                    class="text-red-500">*</small></span>
                            <textarea class="p-3 border rounded-md" name="alamat_jalan">
                                {{ old('alamat_jalan') }}
                            </textarea>
                            @if ($errors->has('alamat_jalan'))
                                <small class="text-red-500">{{ $errors->first('alamat_jalan') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">RT</span>
                            <input type="text" class="p-3 border rounded-md" name="rt" placeholder="Rukun Tetangga"
                                value="{{ old('rt') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">RW</span>
                            <input type="text" class="p-3 border rounded-md" name="rw" placeholder="Rukun Warga"
                                value="{{ old('rw') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Dusun</span>
                            <input type="text" class="p-3 border rounded-md" name="dusun" value="{{ old('dusun') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Desa</span>
                            <input type="text" class="p-3 border rounded-md" name="desa" value="{{ old('desa') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kecamatan</span>
                            <input type="text" class="p-3 border rounded-md" name="kecamatan"
                                value="{{ old('kecamatan') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kota/Kabupaten <small
                                    class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="kabupaten"
                                value="{{ old('kabupaten') }}">
                            @if ($errors->has('kabupaten'))
                                <small class="text-red-500">{{ $errors->first('kabupaten') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kode Pos</span>
                            <input type="text" class="p-3 border rounded-md" name="kode_pos"
                                value="{{ old('kode_pos') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tempat Tinggal</span>
                            <select class="p-3 border rounded-md" name="tempat_tinggal">
                                <option value="">Pilih :</option>
                                <option value="Wali" {{ old('tempat_tinggal') == 'Wali' ? 'selected' : '' }}>Wali
                                </option>
                                <option value="Asrama" {{ old('tempat_tinggal') == 'Asrama' ? 'selected' : '' }}>Asrama
                                </option>
                                <option value="Bersama orang tua"
                                    {{ old('tempat_tinggal') == 'Bersama orang tua' ? 'selected' : '' }}>Bersama orang
                                    tua
                                </option>
                                <option value="Kos" {{ old('tempat_tinggal') == 'Kos' ? 'selected' : '' }}>Kos</option>
                                <option value="Lainnya" {{ old('tempat_tinggal') == 'Lainnya' ? 'selected' : '' }}>
                                    Lainnya
                                </option>
                                <option value="Panti Asuhan"
                                    {{ old('tempat_tinggal') == 'Panti Asuhan' ? 'selected' : '' }}>
                                    Panti Asuhan</option>

                            </select>

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nomor HP <small
                                    class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="nomor_hp"
                                value="{{ old('nomor_hp') }}">
                            @if ($errors->has('nomor_hp'))
                                <small class="text-red-500">{{ $errors->first('nomor_hp') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nomor Telepon</span>
                            <input type="text" class="p-3 border rounded-md" name="nomor_telpon"
                                value="{{ old('nomor_telpon') }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Email Pribadi</span>
                            <input type="email" class="p-3 border rounded-md" name="email_pribadi"
                                value="{{ old('email_pribadi') }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">No. Surat Keterangan Tidak Mampu
                                (SKTM)</span>
                            <input type="text" class="p-3 border rounded-md" name="SKTM" value="{{ old('SKTM') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">No. Kartu Keluarga Sejahtera (KKS)
                            </span>
                            <input type="text" class="p-3 border rounded-md" name="KKS" value="{{ old('KKS') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">No. Kartu Indonesia Pintar (KIP)
                            </span>
                            <input type="text" class="p-3 border rounded-md" name="KIP" value="{{ old('KIP') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">No. Kartu Indonesia Sehat (KIS)

                            </span>
                            <input type="text" class="p-3 border rounded-md" name="KIS" value="{{ old('KIS') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kewarganegaraan <small
                                    class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="kewarganegaraan"
                                value="{{ old('kewarganegaraan') }}">
                            @if ($errors->has('kewarganegaraan'))
                                <small class="text-red-500">{{ $errors->first('kewarganegaraan') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Photo

                            </span>
                            <input type="file" class="p-3 border rounded-md" name="foto" value="{{ old('foto') }}">
                        </div>
                    </div>


                    <div class="flex flex-col space-y-3 p-10 border-b">
                        <span class="font-semibold text-xl">Data Ayah Kandung</span>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Ayah Kandung <small
                                    class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="nama_ayah"
                                value="{{ old('nama_ayah') }}">
                            @if ($errors->has('nama_ayah'))
                                <small class="text-red-500">{{ $errors->first('nama_ayah') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tahun Lahir</span>
                            <input type="text" class="p-3 border rounded-md" name="tahun_lahir_ayah"
                                placeholder="contoh : 1945" value="{{ old('tahun_lahir_ayah') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pendidikan Ayah</span>
                            <select class="p-3 border rounded-md" name="pendidikan_ayah">
                                <option value="" selected="selected">Pilih :</option>
                                <option value="D1" {{ old('pendidikan_ayah') == 'D1' ? 'selected' : '' }}>D1</option>
                                <option value="D2" {{ old('pendidikan_ayah') == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ old('pendidikan_ayah') == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D4/S1" {{ old('pendidikan_ayah') == 'D4/S1' ? 'selected' : '' }}>D4/S1
                                </option>
                                <option value="Putus SD" {{ old('pendidikan_ayah') == 'Putus SD' ? 'selected' : '' }}>
                                    Putus SD
                                </option>
                                <option value="S2" {{ old('pendidikan_ayah') == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('pendidikan_ayah') == 'S3' ? 'selected' : '' }}>S3</option>
                                <option value="SD Sederajat"
                                    {{ old('pendidikan_ayah') == 'SD Sederajat' ? 'selected' : '' }}>SD
                                    Sederajat</option>
                                <option value="SMA Sederajat"
                                    {{ old('pendidikan_ayah') == 'SMA Sederajat' ? 'selected' : '' }}>
                                    SMA Sederajat</option>
                                <option value="SMP Sederajat"
                                    {{ old('pendidikan_ayah') == 'SMP Sederajat' ? 'selected' : '' }}>
                                    SMP Sederajat</option>
                                <option value="Tidak sekolah"
                                    {{ old('pendidikan_ayah') == 'Tidak sekolah' ? 'selected' : '' }}>
                                    Tidak sekolah</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pekerjaan Ayah</span>
                            <select class="p-3 border rounded-md" name="pekerjaan_ayah">
                                <option value="" selected="selected">Pilih :</option>
                                <option value="Buruh" {{ old('pekerjaan_ayah') == 'Buruh' ? 'selected' : '' }}>Buruh
                                </option>
                                <option value="Karyawan Swasta"
                                    {{ old('pekerjaan_ayah') == 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta
                                </option>
                                <option value="Lain-lain" {{ old('pekerjaan_ayah') == 'Lain-lain' ? 'selected' : '' }}>
                                    Lain-lain
                                </option>
                                <option value="Nelayan" {{ old('pekerjaan_ayah') == 'Nelayan' ? 'selected' : '' }}>
                                    Nelayan
                                </option>
                                <option value="Pedagang Besar"
                                    {{ old('pekerjaan_ayah') == 'Pedagang Besar' ? 'selected' : '' }}>
                                    Pedagang Besar</option>
                                <option value="Pedagang Kecil"
                                    {{ old('pekerjaan_ayah') == 'Pedagang Kecil' ? 'selected' : '' }}>
                                    Pedagang Kecil</option>
                                <option value="Pensiunan" {{ old('pekerjaan_ayah') == 'Pensiunan' ? 'selected' : '' }}>
                                    Pensiunan
                                </option>
                                <option value="Petani" {{ old('pekerjaan_ayah') == 'Petani' ? 'selected' : '' }}>Petani
                                </option>
                                <option value="Peternak" {{ old('pekerjaan_ayah') == 'Peternak' ? 'selected' : '' }}>
                                    Peternak
                                </option>
                                <option value="PNS/TNI/POLRI"
                                    {{ old('pekerjaan_ayah') == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                    PNS/TNI/POLRI</option>
                                <option value="Tidak bekerja"
                                    {{ old('pekerjaan_ayah') == 'Tidak bekerja' ? 'selected' : '' }}>
                                    Tidak bekerja</option>
                                <option value="Wiraswasta" {{ old('pekerjaan_ayah') == 'Wiraswasta' ? 'selected' : '' }}>
                                    Wiraswasta</option>
                                <option value="Wirausaha" {{ old('pekerjaan_ayah') == 'Wirausaha' ? 'selected' : '' }}>
                                    Wirausaha
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Penghasilan Bulanan Ayah</span>
                            <select class="p-3 border rounded-md" name="penghasilan_bulanan_ayah">
                                <option value="">Pilih :</option>
                                <option value="1 Juta - 1.999.999"
                                    {{ old('penghasilan_bulanan_ayah') == '1 Juta - 1.999.999' ? 'selected' : '' }}>1
                                    Juta -
                                    1.999.999</option>
                                <option value="2 Juta - 4.999.999"
                                    {{ old('penghasilan_bulanan_ayah') == '2 Juta - 4.999.999' ? 'selected' : '' }}>2
                                    Juta -
                                    4.999.999</option>
                                <option value="5 Juta - 20 Juta"
                                    {{ old('penghasilan_bulanan_ayah') == '5 Juta - 20 Juta' ? 'selected' : '' }}>5 Juta
                                    - 20
                                    Juta</option>
                                <option value="500.000 - 999.9999"
                                    {{ old('penghasilan_bulanan_ayah') == '500.000 - 999.9999' ? 'selected' : '' }}>
                                    500.000 -
                                    999.9999</option>
                                <option value="Kurang dari 500,000"
                                    {{ old('penghasilan_bulanan_ayah') == 'Kurang dari 500,000' ? 'selected' : '' }}>
                                    Kurang dari
                                    500,000</option>
                                <option value="Lebih dari 20 Juta"
                                    {{ old('penghasilan_bulanan_ayah') == 'Lebih dari 20 Juta' ? 'selected' : '' }}>Lebih
                                    dari 20
                                    Juta</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kebutuhan Khusus</span>
                            <input type="text" class="p-3 border rounded-md" name="kebutuhan_khusus_ayah"
                                value="{{ old('kebutuhan_khusus_ayah') }}" placeholder="contoh : Autis">
                        </div>
                    </div>

                    <div class="flex flex-col space-y-3 p-10 border-b">
                        <span class="font-semibold text-xl">Data Ibu Kandung</span>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Ibu Kandung <small
                                    class="text-red-500">*</small></span>
                            <input type="text" class="p-3 border rounded-md" name="nama_ibu"
                                value="{{ old('nama_ibu') }}">
                            @if ($errors->has('nama_ibu'))
                                <small class="text-red-500">{{ $errors->first('nama_ibu') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tahun Lahir</span>
                            <input type="text" class="p-3 border rounded-md" name="tahun_lahir_ibu"
                                value="{{ old('tahun_lahir_ibu') }}" placeholder="contoh : 1945">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pendidikan Ibu</span>
                            <select class="p-3 border rounded-md" name="pendidikan_ibu">
                                <option value="" selected="selected">Pilih :</option>
                                <option value="D1" {{ old('pendidikan_ibu') == 'D1' ? 'selected' : '' }}>D1</option>
                                <option value="D2" {{ old('pendidikan_ibu') == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ old('pendidikan_ibu') == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D4/S1" {{ old('pendidikan_ibu') == 'D4/S1' ? 'selected' : '' }}>D4/S1
                                </option>
                                <option value="Putus SD" {{ old('pendidikan_ibu') == 'Putus SD' ? 'selected' : '' }}>
                                    Putus SD
                                </option>
                                <option value="S2" {{ old('pendidikan_ibu') == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('pendidikan_ibu') == 'S3' ? 'selected' : '' }}>S3</option>
                                <option value="SD Sederajat"
                                    {{ old('pendidikan_ibu') == 'SD Sederajat' ? 'selected' : '' }}>SD
                                    Sederajat</option>
                                <option value="SMA Sederajat"
                                    {{ old('pendidikan_ibu') == 'SMA Sederajat' ? 'selected' : '' }}>
                                    SMA Sederajat</option>
                                <option value="SMP Sederajat"
                                    {{ old('pendidikan_ibu') == 'SMP Sederajat' ? 'selected' : '' }}>
                                    SMP Sederajat</option>
                                <option value="Tidak sekolah"
                                    {{ old('pendidikan_ibu') == 'Tidak sekolah' ? 'selected' : '' }}>
                                    Tidak sekolah</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pekerjaan Ibu</span>
                            <select class="p-3 border rounded-md" name="pekerjaan_ibu">
                                <option value="" selected="selected">Pilih :</option>
                                <option value="Buruh" {{ old('pekerjaan_ibu') == 'Buruh' ? 'selected' : '' }}>Buruh
                                </option>
                                <option value="Karyawan Swasta"
                                    {{ old('pekerjaan_ibu') == 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta
                                </option>
                                <option value="Lain-lain" {{ old('pekerjaan_ibu') == 'Lain-lain' ? 'selected' : '' }}>
                                    Lain-lain
                                </option>
                                <option value="Nelayan" {{ old('pekerjaan_ibu') == 'Nelayan' ? 'selected' : '' }}>
                                    Nelayan
                                </option>
                                <option value="Pedagang Besar"
                                    {{ old('pekerjaan_ibu') == 'Pedagang Besar' ? 'selected' : '' }}>
                                    Pedagang Besar</option>
                                <option value="Pedagang Kecil"
                                    {{ old('pekerjaan_ibu') == 'Pedagang Kecil' ? 'selected' : '' }}>
                                    Pedagang Kecil</option>
                                <option value="Pensiunan" {{ old('pekerjaan_ibu') == 'Pensiunan' ? 'selected' : '' }}>
                                    Pensiunan
                                </option>
                                <option value="Petani" {{ old('pekerjaan_ibu') == 'Petani' ? 'selected' : '' }}>Petani
                                </option>
                                <option value="Peternak" {{ old('pekerjaan_ibu') == 'Peternak' ? 'selected' : '' }}>
                                    Peternak
                                </option>
                                <option value="PNS/TNI/POLRI"
                                    {{ old('pekerjaan_ibu') == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                    PNS/TNI/POLRI</option>
                                <option value="Tidak bekerja"
                                    {{ old('pekerjaan_ibu') == 'Tidak bekerja' ? 'selected' : '' }}>
                                    Tidak bekerja</option>
                                <option value="Wiraswasta" {{ old('pekerjaan_ibu') == 'Wiraswasta' ? 'selected' : '' }}>
                                    Wiraswasta</option>
                                <option value="Wirausaha" {{ old('pekerjaan_ibu') == 'Wirausaha' ? 'selected' : '' }}>
                                    Wirausaha
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Penghasilan Bulanan Ibu</span>
                            <select class="p-3 border rounded-md" name="penghasilan_bulanan_ibu">
                                <option value="">Pilih :</option>
                                <option value="1 Juta - 1.999.999"
                                    {{ old('penghasilan_bulanan_ibu') == '1 Juta - 1.999.999' ? 'selected' : '' }}>1
                                    Juta -
                                    1.999.999</option>
                                <option value="2 Juta - 4.999.999"
                                    {{ old('penghasilan_bulanan_ibu') == '2 Juta - 4.999.999' ? 'selected' : '' }}>2
                                    Juta -
                                    4.999.999</option>
                                <option value="5 Juta - 20 Juta"
                                    {{ old('penghasilan_bulanan_ibu') == '5 Juta - 20 Juta' ? 'selected' : '' }}>5 Juta
                                    - 20
                                    Juta</option>
                                <option value="500.000 - 999.9999"
                                    {{ old('penghasilan_bulanan_ibu') == '500.000 - 999.9999' ? 'selected' : '' }}>
                                    500.000 -
                                    999.9999</option>
                                <option value="Kurang dari 500,000"
                                    {{ old('penghasilan_bulanan_ibu') == 'Kurang dari 500,000' ? 'selected' : '' }}>
                                    Kurang dari
                                    500,000</option>
                                <option value="Lebih dari 20 Juta"
                                    {{ old('penghasilan_bulanan_ibu') == 'Lebih dari 20 Juta' ? 'selected' : '' }}>Lebih
                                    dari 20
                                    Juta</option>

                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kebutuhan Khusus</span>
                            <input type="text" class="p-3 border rounded-md" name="kebutuhan_khusus_ibu"
                                placeholder="contoh : Autis" value="{{ old('kebutuhan_khusus_ibu') }}">
                        </div>
                    </div>



                    <div class="flex flex-col space-y-3 p-10 border-b">
                        <span class="font-semibold text-xl">Data wali</span>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama wali </span>
                            <input type="text" class="p-3 border rounded-md" name="nama_wali"
                                value="{{ old('nama_wali') }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tahun Lahir</span>
                            <input type="text" class="p-3 border rounded-md" name="tahun_lahir_wali"
                                placeholder="contoh : 1945" value="{{ old('tahun_lahir_wali') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pendidikan Wali</span>
                            <select class="p-3 border rounded-md" name="pendidikan_wali">
                                <option value="" selected="selected">Pilih :</option>
                                <option value="D1" {{ old('pendidikan_wali') == 'D1' ? 'selected' : '' }}>D1</option>
                                <option value="D2" {{ old('pendidikan_wali') == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ old('pendidikan_wali') == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D4/S1" {{ old('pendidikan_wali') == 'D4/S1' ? 'selected' : '' }}>D4/S1
                                </option>
                                <option value="Putus SD" {{ old('pendidikan_wali') == 'Putus SD' ? 'selected' : '' }}>
                                    Putus SD
                                </option>
                                <option value="S2" {{ old('pendidikan_wali') == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('pendidikan_wali') == 'S3' ? 'selected' : '' }}>S3</option>
                                <option value="SD Sederajat"
                                    {{ old('pendidikan_wali') == 'SD Sederajat' ? 'selected' : '' }}>SD
                                    Sederajat</option>
                                <option value="SMA Sederajat"
                                    {{ old('pendidikan_wali') == 'SMA Sederajat' ? 'selected' : '' }}>
                                    SMA Sederajat</option>
                                <option value="SMP Sederajat"
                                    {{ old('pendidikan_wali') == 'SMP Sederajat' ? 'selected' : '' }}>
                                    SMP Sederajat</option>
                                <option value="Tidak sekolah"
                                    {{ old('pendidikan_wali') == 'Tidak sekolah' ? 'selected' : '' }}>
                                    Tidak sekolah</option>

                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pekerjaan Wali</span>
                            <select class="p-3 border rounded-md" name="pekerjaan_wali">
                                <option value="" selected="selected">Pilih :</option>
                                <option value="Buruh" {{ old('pekerjaan_wali') == 'Buruh' ? 'selected' : '' }}>Buruh
                                </option>
                                <option value="Karyawan Swasta"
                                    {{ old('pekerjaan_wali') == 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta
                                </option>
                                <option value="Lain-lain" {{ old('pekerjaan_wali') == 'Lain-lain' ? 'selected' : '' }}>
                                    Lain-lain
                                </option>
                                <option value="Nelayan" {{ old('pekerjaan_wali') == 'Nelayan' ? 'selected' : '' }}>
                                    Nelayan
                                </option>
                                <option value="Pedagang Besar"
                                    {{ old('pekerjaan_wali') == 'Pedagang Besar' ? 'selected' : '' }}>Pedagang Besar
                                </option>
                                <option value="Pedagang Kecil"
                                    {{ old('pekerjaan_wali') == 'Pedagang Kecil' ? 'selected' : '' }}>Pedagang Kecil
                                </option>
                                <option value="Pensiunan" {{ old('pekerjaan_wali') == 'Pensiunan' ? 'selected' : '' }}>
                                    Pensiunan
                                </option>
                                <option value="Petani" {{ old('pekerjaan_wali') == 'Petani' ? 'selected' : '' }}>Petani
                                </option>
                                <option value="Peternak" {{ old('pekerjaan_wali') == 'Peternak' ? 'selected' : '' }}>
                                    Peternak
                                </option>
                                <option value="PNS/TNI/POLRI"
                                    {{ old('pekerjaan_wali') == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                    PNS/TNI/POLRI</option>
                                <option value="Tidak bekerja"
                                    {{ old('pekerjaan_wali') == 'Tidak bekerja' ? 'selected' : '' }}>
                                    Tidak bekerja</option>
                                <option value="Wiraswasta"
                                    {{ old('pekerjaan_wali') == 'Wiraswasta' ? 'selected' : '' }}>
                                    Wiraswasta</option>
                                <option value="Wirausaha" {{ old('pekerjaan_wali') == 'Wirausaha' ? 'selected' : '' }}>
                                    Wirausaha
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Penghasilan Bulanan Wali</span>
                            <select class="p-3 border rounded-md" name="penghasilan_bulanan_wali">
                                <option value="">Pilih :</option>
                                <option value="1 Juta - 1.999.999"
                                    {{ old('penghasilan_bulanan_wali') == '1 Juta - 1.999.999' ? 'selected' : '' }}>1
                                    Juta -
                                    1.999.999</option>
                                <option value="2 Juta - 4.999.999"
                                    {{ old('penghasilan_bulanan_wali') == '2 Juta - 4.999.999' ? 'selected' : '' }}>2
                                    Juta -
                                    4.999.999</option>
                                <option value="5 Juta - 20 Juta"
                                    {{ old('penghasilan_bulanan_wali') == '5 Juta - 20 Juta' ? 'selected' : '' }}>5 Juta
                                    - 20
                                    Juta</option>
                                <option value="500.000 - 999.9999"
                                    {{ old('penghasilan_bulanan_wali') == '500.000 - 999.9999' ? 'selected' : '' }}>
                                    500.000 -
                                    999.9999</option>
                                <option value="Kurang dari 500,000"
                                    {{ old('penghasilan_bulanan_wali') == 'Kurang dari 500,000' ? 'selected' : '' }}>
                                    Kurang dari
                                    500,000</option>
                                <option value="Lebih dari 20 Juta"
                                    {{ old('penghasilan_bulanan_wali') == 'Lebih dari 20 Juta' ? 'selected' : '' }}>
                                    Lebih dari
                                    20 Juta</option>

                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kebutuhan Khusus</span>
                            <input type="text" class="p-3 border rounded-md" name="kebutuhan_khusus_wali"
                                value="{{ old('kebutuhan_khusus_wali') }}" placeholder="contoh : Autis">
                        </div>
                    </div>

                    <div class="flex flex-col space-y-3 p-10 border-b">
                        <span class="font-semibold text-xl">Data Periodik
                        </span>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tinggi Badan (Cm) </span>
                            <input type="number" class="p-3 border rounded-md" name="tinggi_badan"
                                value="{{ old('tinggi_badan') }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Berat Badan (Kg) </span>
                            <input type="number" class="p-3 border rounded-md" name="berat_badan"
                                value="{{ old('berat_badan') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Jarak Tempat Tinggal ke Sekolah (Km) </span>
                            <input type="number" class="p-3 border rounded-md" name="jarak_kesekolah"
                                value="{{ old('jarak_kesekolah') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Waktu Tempuh ke Sekolah (Menit)</span>
                            <input type="number" class="p-3 border rounded-md" name="waktu_tempu"
                                value="{{ old('waktu_tempu') }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Jumlah Saudara Kandung
                            </span>
                            <input type="number" class="p-3 border rounded-md" name="jumblah_saudara"
                                value="{{ old('jumblah_saudara') }}">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-3 p-10 border-b">
                        <span class="font-semibold text-xl">Pernyataan dan Keamanan
                        </span>
                        <div class="flex flex-col space-y-3">
                            <div class="flex items-center space-x-3">
                                <span class=" text-gray-500 font-medium">Pernyataan <small
                                        class="text-red-500">*</small></span>
                                <input type="checkbox" class="p-3 border rounded-md" name="pernyataan" value="1" required>
                            </div>
                            <p class="text-sm">
                                Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini
                                adalah benar. Apabila ternyata data tersebut tidak benar / palsu, maka saya
                                bersedia menerima sanksi sesuai ketentuan yang berlaku di MI Bani Hasyim
                            </p>

                        </div>

                    </div>

                    <div class="flex justify-end space-x-3 p-10">

                        <button class="bg-green-300 py-3 px-5 rounded-md font-semibold">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
