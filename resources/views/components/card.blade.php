<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title ?? '' }}</h3>
        <!-- herramientas de la pestaña cards - minimixar, cerrar - agregar -->
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            {{ $action ?? '' }}
        </div>

        <!-- Card Body -->
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>
