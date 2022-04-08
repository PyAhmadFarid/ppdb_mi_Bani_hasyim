@extends('template.default')

@section('content')
    <div class="flex-1 flex flex-col items-center bg-gray-100">
        <div class="text-4xl font-bold py-5">Detail Siswa</div>
        <div class="bg-white rounded md:w-2/3 w-full">

            <div class="p-5 border-b">
                <form action="{{ route('admin.siswa.status', ['id' => $siswa->id]) }}" method="POST">
                    @csrf
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Status</span>
                        <div class="flex w-full space-x-5">
                            <select class="p-3 border rounded-md flex-1" name="status" id="">
                                <option value="" {{ $siswa->status == null ? 'selected' : '' }}>Pendding</option>
                                <option value="1" {{ $siswa->status == 1 ? 'selected' : '' }}>Diterima</option>
                                <option value="0" {{ $siswa->status == 0 ? 'selected' : '' }}>Tidak Diterima</option>
                            </select>
                            <button class="bg-green-500 p-3 rounded font-semibold">Save</button>
                        </div>
                        {{-- <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly value="{{$siswa->nama_lengkap}}"> --}}
                    </div>
                </form>
            </div>
            <div class="flex p-5 border-b space-x-5">
                <div class=" w-32 flex items-start justify-start flex-col space-y-3">
                    <span class=" text-gray-500 font-medium">Foto </span>
                    <img class="w-full" src="{{ $siswa->foto?asset('/fotos/'.$siswa->foto):asset('images/image.jpg') }}" alt="">
                </div>
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Nama Lengkap </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->nama_lengkap }}">
                    </div>
                    <div class="flex flex-col space-y-3 ">
                        <span class=" text-gray-500 font-medium">Jenis Kelamin </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->jenis_kelamin }}">
                    </div>
                </div>
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Tempat Lahir </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->tempat_lahir }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Tanggal Lahir </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->tanggal_lahir }}">
                    </div>
                </div>
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Kewarganegaraan </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->kewarganegaraan }}">
                    </div>
                    <div class="flex flex-col space-y-3 ">
                        <span class=" text-gray-500 font-medium">Agama </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->agama }}">
                    </div>
                </div>
            </div>


            <div class="flex p-5 border-b space-x-5">
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Alamat Jalan </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->alamat_jalan }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">RT </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->rt }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">RW </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->rw }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Dusun </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->dusun }}">
                    </div>


                </div>



                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Desa </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->desa }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Kecamatan </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->kecamatan }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Kabupaten </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->kabupaten }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Kode Pos </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->kode_pos }}">
                    </div>
                </div>

            </div>


            <div class="flex p-5 border-b space-x-5">
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Jenis Pendaftaran</span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->jenis_pendaftaran }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Jalur Pendaftaran </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->jalur_pendaftaran }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Nama Sekolah Asal </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->nama_asal_sekolah }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Alamat Nama Sekolah Asal</span>
                        <input type="text" class="p-3 border rounded-md" name="alamat_asal_sekolah" readonly
                            value="{{ $siswa->alamat_asal_sekolah }}">
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
                        <input readonly type="text" class="p-3 border rounded-md" name="hobi" value="{{ $siswa->hobi }}">

                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Cita Cita</span>
                            <input type="text" class="p-3 border rounded-md" name="cita_cita"
                                value="{{ $siswa->cita_cita }}">
                    </div>
                </div>

            </div>



            <div class="flex p-5 border-b space-x-5">
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">NISN</span>
                            <input type="text" class="p-3 border rounded-md" name="nisn" value="{{ $siswa->nisn }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">NIK</span>
                            <input type="text" class="p-3 border rounded-md" name="nik" value="{{ $siswa->nik }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Nomor HP </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->nomor_hp }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Nomor Telpon</span>
                        <input type="text" class="p-3 border rounded-md" name="alamat_asal_sekolah" readonly
                            value="{{ $siswa->nomor_telpon }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Email Pribadi</span>
                        <input readonly type="text" class="p-3 border rounded-md" name="hobi" value="{{ $siswa->email_pribadi }}">

                    </div>
                </div>



                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">SKTM</span>
                        <input readonly type="text" class="p-3 border rounded-md" name="hobi" value="{{ $siswa->SKTM }}">

                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">KKS</span>
                        <input readonly type="text" class="p-3 border rounded-md" name="hobi" value="{{ $siswa->KKS }}">

                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">KIP</span>
                        <input readonly type="text" class="p-3 border rounded-md" name="hobi" value="{{ $siswa->KIP }}">

                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">KIS</span>
                            <input type="text" class="p-3 border rounded-md" name="cita_cita"
                                value="{{ $siswa->KIS }}">
                    </div>
                </div>

            </div>


            <div class="flex p-5 border-b space-x-5">
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Nama Ayah Kandung </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->nama_ayah }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Tahun Lahir Ayah </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->tahun_lahir_ayah }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Pendidikan Ayah </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->pendidikan_ayah }}">
                    </div>

                </div>



                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Pekerjaan Ayah </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->pekerjaan_ayah }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Penghasilan Bulanan Ayah </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->penghasilan_bulanan_ayah }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Kebutuhan Khusus Ayah</span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->kebutuhan_khusus_ayah }}">
                    </div>
                    
                </div>

            </div>


            <div class="flex p-5 border-b space-x-5">
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Nama Ibu Kandung </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->nama_ibu }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Tahun Lahir Ibu </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->tahun_lahir_ibu }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Pendidikan Ibu </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->pendidikan_ibu }}">
                    </div>

                </div>



                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Pekerjaan Ibu </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->pekerjaan_ibu }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Penghasilan Bulanan Ibu </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->penghasilan_bulanan_ibu }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Kebutuhan Khusus Ibu</span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->kebutuhan_khusus_ibu }}">
                    </div>
                    
                </div>

            </div>



            <div class="flex p-5 border-b space-x-5">
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Nama Wali Kandung </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->nama_wali }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Tahun Lahir Wali </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->tahun_lahir_wali }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Pendidikan Wali </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->pendidikan_wali }}">
                    </div>

                </div>



                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Pekerjaan Wali </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->pekerjaan_wali }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Penghasilan Bulanan Wali </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->penghasilan_bulanan_wali }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Kebutuhan Khusus Wali</span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->kebutuhan_khusus_wali }}">
                    </div>
                    
                </div>

            </div>


            
            <div class="flex p-5 border-b space-x-5">
                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Tinggi Badan </span>
                        <input type="text" class="p-3 border rounded-md" name="nama_lengkap" readonly
                            value="{{ $siswa->tinggi_badan }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Berat Badan </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->berat_badan }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Jarak Kesekolah </span>
                        <input type="text" class="p-3 border rounded-md" name="jarak_kesekolah" readonly
                            value="{{ $siswa->jarak_kesekolah }}">
                    </div>

                </div>



                <div class="flex flex-col space-y-5 flex-1">
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Waktu Tempu </span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->waktu_tempu }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Jumblah Saudara</span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->jumblah_saudara }}">
                    </div>
                    <div class="flex flex-col space-y-3">
                        <span class=" text-gray-500 font-medium">Tempat Tinggal</span>
                        <input type="text" class="p-3 border rounded-md" name="jenis_kelamin" readonly
                            value="{{ $siswa->tempat_tinggal }}">
                    </div>
                    
                </div>

            </div>

        </div>
    </div>
@endsection
