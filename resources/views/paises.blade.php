@extends('home')
@section('contenido')
<div style="margin: auto;width: 50%;border: 1px solid green;padding: 10px;">

    <form action="/empleado" method="POST">
      <div class="mb-3">
        <label for="" class="form-label">País</label>
        <select class="form-select" aria-label="Pais" name="id_pais" id="paises">
            <option selected value="0">Seleccione un pais</option>
            @foreach ($paises as $pais)
                <option value="{{$pais->PKPais}}">{{$pais->Pais}}</option>
            @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <select class="form-select" aria-label="Estado" name="PKEstado" id="estados">
        </select>
      </div>

      <div class="mb-3">
        <a href="/empleado" class="btn btn-secondary">Regresar</a>
      </div>
    </form>
</div>

<script type="text/javascript">
    $(function() {
        $('#paises').change(function() {

            var url = '{{ url('paises') }}/' + $(this).val() + '/estados/';

            $.get(url, function(data) {
                var select = $('form select[name=PKEstado]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.PKEstado + '>' + value.Estado + '</option>');
                });
            });
        });
    });
</script>
@endsection