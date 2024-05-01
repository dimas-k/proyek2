<div>
    <div class="card card-body" style="height: 378px;"> 
        <livewire:livewire-column-chart
            key="{{ $columnChartModel->reactiveKey() }}"
            :column-chart-model="$columnChartModel"
        />
    </div>    
</div>
