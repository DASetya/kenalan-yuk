@section('scripts')
<script>
    let ctx = document.getElementById('myChart');
    let myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: [{
                label: 'Tingkat Kebahagiaan',
                data: {{ json_encode($data) }},
                backgroundColor: [
                    'rgba(69, 170, 242, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
@stop

<div>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight">
            Mood
            <a href="#" class="text-2xl"><i class="far fa-question-circle"></i></a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <livewire:mood.create-mood />
            
            <canvas id="myChart" width="400" height="250"></canvas>
        </div>
    </div>
</div>
