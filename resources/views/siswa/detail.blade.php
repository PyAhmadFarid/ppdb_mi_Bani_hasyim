@extends('template.default')

@section('content')
    <div class="flex-1 flex flex-col items-center bg-gray-100">
        <div class="text-4xl font-bold py-5">Detail Siswa</div>
        <div class="bg-white rounded md:w-2/3 w-full">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5 border-b">
                    @php
                        $onEdit = request()->onEdit;
                    @endphp




                    <div class="flex justify-between items-center">
                        @if (isset($onEdit))
                            <div>
                                <a class="bg-green-500 rounded font-semibold text-white p-3"
                                    href="{{ route('siswa') }}">Cancel</a>

                                <button class="bg-green-500 rounded font-semibold text-white p-3">Save</button>
                            </div>
                        @else
                            <a class="bg-green-500 rounded font-semibold text-white p-3"
                                href="{{ route('siswa', ['onEdit' => 'true']) }}">Edit</a>
                        @endif

                        @if ($siswa->status == 1)
                            <a class="bg-green-500 rounded font-semibold text-white p-3"
                                href="{{ route('export') }}">Cetak</a>
                        @endif

                        {{-- <span class=" text-gray-500 font-medium">Status</span>
                    <div class="flex w-full space-x-5">
                        Diterim
                    </div> --}}
                        {{-- <input type="text" class="p-3 border rounded-md" name="nama_lengkap"  {{ isset($onEdit) ? '' : 'disabled' }} value="{{$siswa->nama_lengkap}}"> --}}
                    </div>

                </div>

                <div class="flex p-5 border-b space-x-5">
                    <div class=" w-32 flex items-start justify-start flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Foto </span>
                        <img class="w-full"
                            src="{{ $siswa->foto ? 'fotos/' . $siswa->foto : asset('images/image.jpg') }}" alt="">
                        @if (isset($onEdit))
                            <input type="file" class="w-full">
                        @endif
                    </div>
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Lengkap </span>
                            <input type="text" class="p-3 border rounded-md" name="nama_lengkap"
                                {{ isset($onEdit) ? '' : 'readonly' }} value="{{ $siswa->nama_lengkap }}">
                            @if ($errors->has('nama_lengkap'))
                                <small class="text-red-500">{{ $errors->first('nama_lengkap') }}</small>
                            @endif
                        </div>
                        <div class="flex flex-col space-y-3 ">
                            <span class=" text-gray-500 font-medium">Jenis Kelamin </span>

                            <select class="p-3 border rounded-md" name="jenis_kelamin"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="L"
                                    {{ old('jenis_kelamin') ?? $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>
                                    Laki Laki</option>
                                <option value="P"
                                    {{ old('jenis_kelamin') ?? $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>

                            {{-- <select name="abc">
                                <option value="a" selected>a</option>
                                <option value="b">b</option>
                                <option value="c">c</option>
                            </select> --}}


                        </div>
                        <div class="flex flex-col space-y-3 ">
                            <span class=" text-gray-500 font-medium">Status </span>
                            @if ($siswa->status == null)
                                <span class="bg-yellow-100 p-3 rounded font-semibold">Pending</span>
                            @elseif($siswa->status == 1)
                                <span class="bg-green-100 p-3 rounded font-semibold">Diterima</span>
                            @else
                                <span class="bg-red-100 p-3 rounded font-semibold">Tidak Diterima</span>
                            @endif
                            {{-- <div class="p-3 rounded-md bg-green-100">Diterima</div> --}}
                        </div>
                    </div>
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tempat Lahir </span>
                            <input type="text" class="p-3 border rounded-md" name="tempat_lahir"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->tempat_lahir }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tanggal Lahir </span>
                            <input type="text" class="p-3 border rounded-md" name="tanggal_lahir"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->tanggal_lahir }}">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kewarganegaraan </span>
                            <input type="text" class="p-3 border rounded-md" name="kewarganegaraan"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->kewarganegaraan }}">
                        </div>
                        <div class="flex flex-col space-y-3 ">
                            <span class=" text-gray-500 font-medium">Agama </span>
                            <input type="text" class="p-3 border rounded-md" name="agama"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->agama }}">
                        </div>
                    </div>
                </div>


                <div class="flex p-5 border-b space-x-5">
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Alamat Jalan </span>
                            <input type="text" class="p-3 border rounded-md" name="alamat_jalan"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->alamat_jalan }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">RT </span>
                            <input type="text" class="p-3 border rounded-md" name="rt"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->rt }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">RW </span>
                            <input type="text" class="p-3 border rounded-md" name="rw"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->rw }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Dusun </span>
                            <input type="text" class="p-3 border rounded-md" name="dusun"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->dusun }}">
                        </div>


                    </div>



                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Desa </span>
                            <input type="text" class="p-3 border rounded-md" name="desa"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->desa }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kecamatan </span>
                            <input type="text" class="p-3 border rounded-md" name="kecamatan"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->kecamatan }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kabupaten </span>
                            <input type="text" class="p-3 border rounded-md" name="kabupaten"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->kabupaten }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kode Pos </span>
                            <input type="text" class="p-3 border rounded-md" name="kode_pos"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->kode_pos }}">
                        </div>
                    </div>

                </div>


                <div class="flex p-5 border-b space-x-5">
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Jenis Pendaftaran</span>
                            <select class="p-3 border rounded-md" name="jenis_pendaftaran"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="baru"
                                    {{ old('jenis_pendaftaran') ?? $siswa->jenis_pendaftaran == 'baru' ? 'selected' : '' }}>
                                    Baru</option>
                                <option value="pindahan"
                                    {{ old('jenis_pendaftaran') ?? $siswa->jenis_pendaftaran == 'pindahan' ? 'selected' : '' }}>
                                    Pindahan
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Jalur Pendaftaran </span>
                            <select class="p-3 border rounded-md" name="jalur_pendaftaran"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="Umum"
                                    {{ old('jalur_pendaftaran') ?? $siswa->jalur_pendaftaran == 'Umum' ? 'selected' : '' }}>
                                    Umum
                                </option>
                                <option value="Keluarga Tidak Mampu"
                                    {{ old('jalur_pendaftaran') ?? $siswa->jalur_pendaftaran == 'Keluarga Tidak Mampu' ? 'selected' : '' }}>
                                    Keluarga
                                    Tidak
                                    Mampu</option>
                                <option value="Prestasi"
                                    {{ old('jalur_pendaftaran') ?? $siswa->jalur_pendaftaran == 'Prestasi' ? 'selected' : '' }}>
                                    Prestasi
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Sekolah Asal </span>
                            <input type="text" class="p-3 border rounded-md" name="nama_asal_sekolah"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->nama_asal_sekolah }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Alamat Nama Sekolah Asal</span>
                            <input type="text" class="p-3 border rounded-md" name="alamat_asal_sekolah"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->alamat_asal_sekolah }}">
                        </div>
                    </div>



                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Apakah Pernah PAUD</span>
                            <select disabled class="p-3 border rounded-md" name="pernah_paud">
                                <option value="1" {{ $siswa->pernah_paud == '1' ? 'selected' : '' }}>Pernah</option>
                                <option value="0" {{ $siswa->pernah_paud == '0' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Apakah Pernah TK</span>
                            <select disabled class="p-3 border rounded-md" name="pernah_tk">
                                <option value="1" {{ $siswa->pernah_tk == '1' ? 'selected' : '' }}>Pernah</option>
                                <option value="0" {{ $siswa->pernah_tk == '0' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Hobi</span>
                            <input {{ isset($onEdit) ? '' : 'disabled' }} type="text" class="p-3 border rounded-md"
                                name="hobi" value="{{ $siswa->hobi }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Cita Cita</span>
                            <input type="text" class="p-3 border rounded-md" name="cita_cita"
                                value="{{ $siswa->cita_cita }}" {{ isset($onEdit) ? '' : 'disabled' }}>
                        </div>
                    </div>

                </div>



                <div class="flex p-5 border-b space-x-5">
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">NISN</span>
                            <input type="text" class="p-3 border rounded-md" name="nisn" value="{{ $siswa->nisn }}"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">NIK</span>
                            <input type="text" class="p-3 border rounded-md" name="nik" value="{{ $siswa->nik }}"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nomor HP </span>
                            <input type="text" class="p-3 border rounded-md" name="nomor_hp"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->nomor_hp }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nomor Telpon</span>
                            <input type="text" class="p-3 border rounded-md" name="nomor_telpon"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->nomor_telpon }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Email Pribadi</span>
                            <input {{ isset($onEdit) ? '' : 'disabled' }} type="text" class="p-3 border rounded-md"
                                name="email_pribadi" value="{{ $siswa->email_pribadi }}">

                        </div>
                    </div>



                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">SKTM</span>
                            <input {{ isset($onEdit) ? '' : 'disabled' }} type="text" class="p-3 border rounded-md"
                                name="SKTM" value="{{ $siswa->SKTM }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">KKS</span>
                            <input {{ isset($onEdit) ? '' : 'disabled' }} type="text" class="p-3 border rounded-md"
                                name="KKS" value="{{ $siswa->KKS }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">KIP</span>
                            <input {{ isset($onEdit) ? '' : 'disabled' }} type="text" class="p-3 border rounded-md"
                                name="KIP" value="{{ $siswa->KIP }}">

                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">KIS</span>
                            <input type="text" class="p-3 border rounded-md" name="KIS" value="{{ $siswa->KIS }}"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                        </div>
                    </div>

                </div>


                <div class="flex p-5 border-b space-x-5">
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Ayah Kandung </span>
                            <input type="text" class="p-3 border rounded-md" name="nama_ayah"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->nama_ayah }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tahun Lahir Ayah </span>
                            <input type="text" class="p-3 border rounded-md" name="tahun_lahir_ayah"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->tahun_lahir_ayah }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pendidikan Ayah </span>
                            <select class="p-3 border rounded-md" name="pendidikan_ayah"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="" selected="selected">Pilih :</option>
                                <option value="D1"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'D1' ? 'selected' : '' }}>D1
                                </option>
                                <option value="D2"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'D2' ? 'selected' : '' }}>D2
                                </option>
                                <option value="D3"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'D3' ? 'selected' : '' }}>D3
                                </option>
                                <option value="D4/S1"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'D4/S1' ? 'selected' : '' }}>
                                    D4/S1
                                </option>
                                <option value="Putus SD"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'Putus SD' ? 'selected' : '' }}>
                                    Putus SD
                                </option>
                                <option value="S2"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'S2' ? 'selected' : '' }}>S2
                                </option>
                                <option value="S3"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'S3' ? 'selected' : '' }}>S3
                                </option>
                                <option value="SD Sederajat"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'SD Sederajat' ? 'selected' : '' }}>
                                    SD
                                    Sederajat</option>
                                <option value="SMA Sederajat"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'SMA Sederajat' ? 'selected' : '' }}>
                                    SMA Sederajat</option>
                                <option value="SMP Sederajat"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'SMP Sederajat' ? 'selected' : '' }}>
                                    SMP Sederajat</option>
                                <option value="Tidak sekolah"
                                    {{ old('pendidikan_ayah') ?? $siswa->pendidikan_ayah == 'Tidak sekolah' ? 'selected' : '' }}>
                                    Tidak sekolah</option>
                            </select>
                        </div>

                    </div>



                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pekerjaan Ayah </span>
                            <select class="p-3 border rounded-md" name="pekerjaan_ayah"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="" selected="selected">Pilih :</option>
                                <option value="Buruh"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Buruh' ? 'selected' : '' }}>
                                    Buruh
                                </option>
                                <option value="Karyawan Swasta"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Karyawan Swasta' ? 'selected' : '' }}>
                                    Karyawan Swasta
                                </option>
                                <option value="Lain-lain"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Lain-lain' ? 'selected' : '' }}>
                                    Lain-lain
                                </option>
                                <option value="Nelayan"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Nelayan' ? 'selected' : '' }}>
                                    Nelayan
                                </option>
                                <option value="Pedagang Besar"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Pedagang Besar' ? 'selected' : '' }}>
                                    Pedagang Besar</option>
                                <option value="Pedagang Kecil"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Pedagang Kecil' ? 'selected' : '' }}>
                                    Pedagang Kecil</option>
                                <option value="Pensiunan"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Pensiunan' ? 'selected' : '' }}>
                                    Pensiunan
                                </option>
                                <option value="Petani"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Petani' ? 'selected' : '' }}>
                                    Petani
                                </option>
                                <option value="Peternak"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Peternak' ? 'selected' : '' }}>
                                    Peternak
                                </option>
                                <option value="PNS/TNI/POLRI"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                    PNS/TNI/POLRI</option>
                                <option value="Tidak bekerja"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Tidak bekerja' ? 'selected' : '' }}>
                                    Tidak bekerja</option>
                                <option value="Wiraswasta"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Wiraswasta' ? 'selected' : '' }}>
                                    Wiraswasta</option>
                                <option value="Wirausaha"
                                    {{ old('pekerjaan_ayah') ?? $siswa->pekerjaan_ayah == 'Wirausaha' ? 'selected' : '' }}>
                                    Wirausaha
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Penghasilan Bulanan Ayah </span>
                            <input type="text" class="p-3 border rounded-md" name="penghasilan_bulanan_ayah"
                                {{ isset($onEdit) ? '' : 'disabled' }}
                                value="{{ $siswa->penghasilan_bulanan_ayah }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kebutuhan Khusus Ayah</span>
                            <input type="text" class="p-3 border rounded-md" name="kebutuhan_khusus_ayah"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->kebutuhan_khusus_ayah }}">
                        </div>

                    </div>

                </div>


                <div class="flex p-5 border-b space-x-5">
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Ibu Kandung </span>
                            <input type="text" class="p-3 border rounded-md" name="nama_ibu"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->nama_ibu }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tahun Lahir Ibu </span>
                            <input type="text" class="p-3 border rounded-md" name="tahun_lahir_ibu"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->tahun_lahir_ibu }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pendidikan Ibu </span>
                            <select class="p-3 border rounded-md" name="pendidikan_ibu"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="" selected="selected">Pilih :</option>
                                <option value="D1"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'D1' ? 'selected' : '' }}>D1
                                </option>
                                <option value="D2"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'D2' ? 'selected' : '' }}>D2
                                </option>
                                <option value="D3"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'D3' ? 'selected' : '' }}>D3
                                </option>
                                <option value="D4/S1"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'D4/S1' ? 'selected' : '' }}>
                                    D4/S1
                                </option>
                                <option value="Putus SD"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'Putus SD' ? 'selected' : '' }}>
                                    Putus SD
                                </option>
                                <option value="S2"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'S2' ? 'selected' : '' }}>S2
                                </option>
                                <option value="S3"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'S3' ? 'selected' : '' }}>S3
                                </option>
                                <option value="SD Sederajat"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'SD Sederajat' ? 'selected' : '' }}>
                                    SD
                                    Sederajat</option>
                                <option value="SMA Sederajat"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'SMA Sederajat' ? 'selected' : '' }}>
                                    SMA Sederajat</option>
                                <option value="SMP Sederajat"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'SMP Sederajat' ? 'selected' : '' }}>
                                    SMP Sederajat</option>
                                <option value="Tidak sekolah"
                                    {{ old('pendidikan_ibu') ?? $siswa->pendidikan_ibu == 'Tidak sekolah' ? 'selected' : '' }}>
                                    Tidak sekolah</option>
                            </select>
                        </div>

                    </div>



                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pekerjaan Ibu </span>
                            <select class="p-3 border rounded-md" name="pekerjaan_ibu"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="" selected="selected">Pilih :</option>
                                <option value="Buruh"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Buruh' ? 'selected' : '' }}>
                                    Buruh
                                </option>
                                <option value="Karyawan Swasta"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Karyawan Swasta' ? 'selected' : '' }}>
                                    Karyawan Swasta
                                </option>
                                <option value="Lain-lain"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Lain-lain' ? 'selected' : '' }}>
                                    Lain-lain
                                </option>
                                <option value="Nelayan"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Nelayan' ? 'selected' : '' }}>
                                    Nelayan
                                </option>
                                <option value="Pedagang Besar"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Pedagang Besar' ? 'selected' : '' }}>
                                    Pedagang Besar</option>
                                <option value="Pedagang Kecil"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Pedagang Kecil' ? 'selected' : '' }}>
                                    Pedagang Kecil</option>
                                <option value="Pensiunan"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Pensiunan' ? 'selected' : '' }}>
                                    Pensiunan
                                </option>
                                <option value="Petani"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Petani' ? 'selected' : '' }}>
                                    Petani
                                </option>
                                <option value="Peternak"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Peternak' ? 'selected' : '' }}>
                                    Peternak
                                </option>
                                <option value="PNS/TNI/POLRI"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                    PNS/TNI/POLRI</option>
                                <option value="Tidak bekerja"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Tidak bekerja' ? 'selected' : '' }}>
                                    Tidak bekerja</option>
                                <option value="Wiraswasta"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Wiraswasta' ? 'selected' : '' }}>
                                    Wiraswasta</option>
                                <option value="Wirausaha"
                                    {{ old('pekerjaan_ibu') ?? $siswa->pekerjaan_ibu == 'Wirausaha' ? 'selected' : '' }}>
                                    Wirausaha
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Penghasilan Bulanan Ibu </span>
                            <input type="text" class="p-3 border rounded-md" name="penghasilan_bulanan_ibu"
                                {{ isset($onEdit) ? '' : 'disabled' }}
                                value="{{ $siswa->penghasilan_bulanan_ibu }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kebutuhan Khusus Ibu</span>
                            <input type="text" class="p-3 border rounded-md" name="kebutuhan_khusus_ibu"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->kebutuhan_khusus_ibu }}">
                        </div>

                    </div>

                </div>



                <div class="flex p-5 border-b space-x-5">

                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Nama Wali Kandung </span>
                            <input type="text" class="p-3 border rounded-md" name="nama_wali"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->nama_wali }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tahun Lahir Wali </span>
                            <input type="text" class="p-3 border rounded-md" name="tahun_lahir_wali"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->tahun_lahir_wali }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pendidikan Wali </span>
                            <select class="p-3 border rounded-md" name="pendidikan_wali"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="" selected="selected">Pilih :</option>
                                <option value="D1"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'D1' ? 'selected' : '' }}>D1
                                </option>
                                <option value="D2"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'D2' ? 'selected' : '' }}>D2
                                </option>
                                <option value="D3"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'D3' ? 'selected' : '' }}>D3
                                </option>
                                <option value="D4/S1"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'D4/S1' ? 'selected' : '' }}>
                                    D4/S1
                                </option>
                                <option value="Putus SD"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'Putus SD' ? 'selected' : '' }}>
                                    Putus SD
                                </option>
                                <option value="S2"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'S2' ? 'selected' : '' }}>S2
                                </option>
                                <option value="S3"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'S3' ? 'selected' : '' }}>S3
                                </option>
                                <option value="SD Sederajat"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'SD Sederajat' ? 'selected' : '' }}>
                                    SD
                                    Sederajat</option>
                                <option value="SMA Sederajat"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'SMA Sederajat' ? 'selected' : '' }}>
                                    SMA Sederajat</option>
                                <option value="SMP Sederajat"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'SMP Sederajat' ? 'selected' : '' }}>
                                    SMP Sederajat</option>
                                <option value="Tidak sekolah"
                                    {{ old('pendidikan_wali') ?? $siswa->pendidikan_wali == 'Tidak sekolah' ? 'selected' : '' }}>
                                    Tidak sekolah</option>
                            </select>
                        </div>

                    </div>



                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Pekerjaan Wali </span>
                            <select class="p-3 border rounded-md" name="pekerjaan_wali"
                                {{ isset($onEdit) ? '' : 'disabled' }}>
                                <option value="" selected="selected">Pilih :</option>
                                <option value="Buruh"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Buruh' ? 'selected' : '' }}>
                                    Buruh
                                </option>
                                <option value="Karyawan Swasta"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Karyawan Swasta' ? 'selected' : '' }}>
                                    Karyawan Swasta
                                </option>
                                <option value="Lain-lain"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Lain-lain' ? 'selected' : '' }}>
                                    Lain-lain
                                </option>
                                <option value="Nelayan"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Nelayan' ? 'selected' : '' }}>
                                    Nelayan
                                </option>
                                <option value="Pedagang Besar"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Pedagang Besar' ? 'selected' : '' }}>
                                    Pedagang Besar</option>
                                <option value="Pedagang Kecil"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Pedagang Kecil' ? 'selected' : '' }}>
                                    Pedagang Kecil</option>
                                <option value="Pensiunan"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Pensiunan' ? 'selected' : '' }}>
                                    Pensiunan
                                </option>
                                <option value="Petani"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Petani' ? 'selected' : '' }}>
                                    Petani
                                </option>
                                <option value="Peternak"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Peternak' ? 'selected' : '' }}>
                                    Peternak
                                </option>
                                <option value="PNS/TNI/POLRI"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                    PNS/TNI/POLRI</option>
                                <option value="Tidak bekerja"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Tidak bekerja' ? 'selected' : '' }}>
                                    Tidak bekerja</option>
                                <option value="Wiraswasta"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Wiraswasta' ? 'selected' : '' }}>
                                    Wiraswasta</option>
                                <option value="Wirausaha"
                                    {{ old('pekerjaan_wali') ?? $siswa->pekerjaan_wali == 'Wirausaha' ? 'selected' : '' }}>
                                    Wirausaha
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Penghasilan Bulanan Wali </span>
                            <input type="text" class="p-3 border rounded-md" name="penghasilan_bulanan_wali"
                                {{ isset($onEdit) ? '' : 'disabled' }}
                                value="{{ $siswa->penghasilan_bulanan_wali }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Kebutuhan Khusus Wali</span>
                            <input type="text" class="p-3 border rounded-md" name="kebutuhan_khusus_wali"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->kebutuhan_khusus_wali }}">
                        </div>

                    </div>

                </div>



                <div class="flex p-5 border-b space-x-5">
                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tinggi Badan </span>
                            <input type="text" class="p-3 border rounded-md" name="tinggi_badan"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->tinggi_badan }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Berat Badan </span>
                            <input type="number" class="p-3 border rounded-md" name="berat_badan"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->berat_badan }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Jarak Kesekolah </span>
                            <input type="text" class="p-3 border rounded-md" name="jarak_kesekolah"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->jarak_kesekolah }}">
                        </div>

                    </div>



                    <div class="flex flex-col space-y-5 flex-1">
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Waktu Tempu </span>
                            <input type="text" class="p-3 border rounded-md" name="waktu_tempu"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->waktu_tempu }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Jumblah Saudara</span>
                            <input type="text" class="p-3 border rounded-md" name="jumblah_saudara"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->jumblah_saudara }}">
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span class=" text-gray-500 font-medium">Tempat Tinggal</span>
                            <input type="text" class="p-3 border rounded-md" name="tempat_tinggal"
                                {{ isset($onEdit) ? '' : 'disabled' }} value="{{ $siswa->tempat_tinggal }}">
                        </div>

                    </div>

                </div>

            </form>

        </div>
    </div>
@endsection
