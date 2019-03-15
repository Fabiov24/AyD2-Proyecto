<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{--  <div class="table-responsive">  --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>                
            </tr>
        </thead>
        <tbody>
            @if(isset($catedraticos))
            @foreach($catedraticos as $catedratico)
            <tr>
                <td> {{ $catedratico->codigo }} </td>
                <td> {{ $catedratico->Nombre }} </td>
            @endforeach
            @endif
        </tbody>
    </table>
{{--  </div>  --}}
