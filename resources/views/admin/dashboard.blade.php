@extends('template.default')


@section('head')
    <script src="{{ asset('js/chart.min.js') }}"></script>
@endsection

@section('content')
    @php
    $total = $pendding + $lulus + $tidaklulus;
    @endphp
    <div class="flex-1 w-full flex flex-col items-center">
        <div class="w-2/3 bg-white m-10">
            <div class="p-5 border-b">
                <form action="">
                    <div class="font-bold text-3xl">Data Siswa Tahun

                        <select class="" name="tahun" id="" onchange="this.form.submit()">
                            @for ($i = $tahun_awal; $i <= now()->year; $i++)
                                <option value="{{$i}}" {{$i == request()->tahun?'selected':''}}>{{ $i }}</option>
                            @endfor
                        </select>

                    </div>

                    <div>Siswa : {{ $total }}</div>
                </form>
            </div>
            <div class="flex space-x-5 p-5">
                <div class="bg-yellow-100 p-5 rounded flex-1 text-yellow-900">

                    <div class="font-bold text-4xl">{{ $pendding }}</div>
                    <div class="font-semibold">Pendding</div>
                    <span>{{ number_format((float)($total != 0 && $pendding != 0 ? (100 / $total) * $pendding : 0), 2, '.', '') }}% dari total siswa</span>

                </div>
                <div class="bg-green-100 p-5 rounded flex-1 text-green-900">
                    <div class="font-bold text-4xl">{{ $lulus }}</div>
                    <div class="font-semibold">Diterima</div>
                    <span>{{number_format((float)($total != 0 && $lulus != 0 ? (100 / $total) * $lulus : 0), 2, '.', '')  }}% dari total siswa</span>

                </div>
                <div class="bg-red-100 p-5 rounded flex-1 text-red-900">
                    <div class="font-bold text-4xl">{{ $tidaklulus }}</div>
                    <div class="font-semibold">Ditolak</div>
                    <span>{{ number_format((float)($total != 0 && $tidaklulus != 0 ? (100 / $total) * $tidaklulus : 0), 2, '.', '') }}% dari total
                        siswa</span>
                </div>
            </div>


            <div class="p-5">
                <canvas id="myChart" height="100"></canvas>
            </div>


        </div>
    </div>
@endsection


@section('script')
    <script>
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        var yValues = @json($data_pertahun)

        new Chart("myChart", {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    backgroundColor: "rgba(0,0,0,1.0)",
                    borderColor: "green",
                    data: yValues
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
@endsection
