<canvas id="{{ $id }}" {{ $attributes->class(['card p-3 my-2 w-100 h-auto']) }}></canvas>

@push('scripts')
    <script type="module">
        (async () => {
            let chartData = @json($config); // fallback

            @if ($api)
                try {
                    const response = await fetch(@json($api));
                    chartData = await response.json();
                } catch (error) {
                    console.error("Erro ao carregar dados do gráfico:", error);
                }
            @endif

            const ctx = document.getElementById(@json($id))?.getContext('2d');
            if (!ctx) return;

            new Chart(ctx, {
                type: @json($type),
                data: chartData,
                @if (!empty($options))
                    options: @json($options),
                @endif
            });            
        })();
    </script>
@endpush

