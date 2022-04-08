@extends('template.default')

@section('content')
    <div class="flex-1 flex flex-col items-center">
        <div class="text-4xl font-bold py-5">Data Siswa</div>
        <div class="bg-white rounded md:w-3/4 w-full">
            <div class="flex p-5 border-b justify-end items-end">
                {{-- <span class="font-semibold">Data Siswa</span> --}}
                <form action="" class="flex flex-wrap space-x-5 items-end">
                    <div class=" flex flex-col">
                        <span>Nama :</span>
                        <input value="{{ request()->get('nama') }}" type="text" class="p-3 bg-gray-50 rounded"
                            placeholder="Nama peserta" name="nama">
                    </div>
                    <div class=" flex flex-col">
                        <span>Tahun Daftar :</span>
                        <select name="tahun" id="" class="p-3 bg-gray-50 rounded">
                            <option value="">Semua</option>
                            @for ($i = 2010; $i < date('Y'); $i++)
                                <option value={{ $i + 1 }}
                                    {{ request()->get('tahun') == $i + 1 ? 'selected' : '' }}>
                                    {{ $i + 1 }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class=" flex flex-col">
                        <span>Jenis Pendaftaran :</span>
                        <select name="jenis_pendaftaran" id="" class="p-3 bg-gray-50 rounded">
                            <option value="">Semua</option>
                            <option value="baru" {{ request()->get('jenis_pendaftaran') == 'baru' ? 'selected' : '' }}>
                                Baru
                            </option>
                            <option value="pindahan"
                                {{ request()->get('jenis_pendaftaran') == 'pindahan' ? 'selected' : '' }}>
                                Pindahan
                            </option>
                        </select>
                    </div>
                    <div class=" flex flex-col">
                        <span>Jalur Pendaftaran :</span>
                        <select name="jalur_pendaftaran" id="" class="p-3 bg-gray-50 rounded">
                            <option value="">Semua</option>
                            <option value="Umum" {{ request()->get('jalur_pendaftaran') == 'Umum' ? 'selected' : '' }}>
                                Umum</option>
                            <option value="Keluarga Tidak Mampu"
                                {{ request()->get('jalur_pendaftaran') == 'Keluarga Tidak Mampu' ? 'selected' : '' }}>
                                Keluarga Tidak
                                Mampu</option>
                            <option value="Prestasi"
                                {{ request()->get('jalur_pendaftaran') == 'Prestasi' ? 'selected' : '' }}>
                                Prestasi
                            </option>
                        </select>
                    </div>
                    <button class="bg-green-600 p-3 rounded text-white font-semibold">Cari</button>
                </form>
            </div>
            <form action="{{ route('admin.siswa.apply') }}" method="POST">
                @csrf
                <div class="p-5 border-b">

                    <table class="w-full table-fix" id="jobs">
                        <thead class="border-b">
                            <tr>
                                <th class=" "><input type="checkbox" onClick="toggle(this)" /></th>
                                <th class=" text-left p-3">#</th>
                                <th class=" text-left p-3">Nama</th>
                                <th class=" text-left p-3">Tahun Daftar</th>
                                <th class=" text-left p-3">Jenis Kelamin</th>
                                <th class=" text-left p-3">Jenis Pendaftaran</th>
                                <th class=" text-left p-3">Jalur Pendaftaran</th>
                                <th class=" text-left p-3">Status</th>
                                <th class="text-left p-3">...</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $idx => $sw)
                                <tr>
                                    <td> <input type="checkbox" class="siswa"
                                            name="{{ 'siswa[' . $sw->id . ']' }}"> </td>
                                    <td class="p-3">
                                        {{ $idx + 1 + (request()->get('page') ? (request()->get('page') - 1) * 10 : 0) }}
                                    </td>
                                    <td class="p-3">{{ $sw->nama_lengkap }}</td>
                                    <td class="p-3">{{ $sw->created_at->year }}</td>
                                    <td class="p-3">{{ $sw->jenis_kelamin }}</td>
                                    <td class="p-3">{{ $sw->jenis_pendaftaran }}</td>
                                    <td class="p-3">{{ $sw->jalur_pendaftaran }}</td>
                                    <td class="p-3">
                                        @if ($sw->status == null)
                                            <span class="bg-yellow-100 px-3 rounded font-semibold">Pending</span>
                                        @elseif($sw->status == 1)
                                            <span class="bg-green-100 px-3 rounded font-semibold">Diterima</span>
                                        @else
                                            <span class="bg-red-100 px-3 rounded font-semibold">Tidak Diterima</span>
                                        @endif
                                    </td>
                                    <td class="p-3">
                                        <div class="flex space-x-3">
                                            <a class="font-semibold text-green-600"
                                                href="{{ route('admin.siswa.detail', ['id' => $sw->id]) }}">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
                <div class="p-5 border-b flex space-x-5 justify-end">
                    <select class="p-3 bg-gray-50 rounded" name="status" id="">
                        <option value="" >Pendding</option>
                        <option value="1">Diterima</option>
                        <option value="0">Tidak Diterima</option>

                    </select>
                    <button class="bg-green-600 p-3 rounded text-white font-semibold">Apply</button>
                </div>
            </form>
            <div class="p-5">
                {{ $siswa->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>
        function toggle(source) {
            checkboxes = document.getElementsByClassName('siswa');
            console.log(checkboxes);
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
@endsection
