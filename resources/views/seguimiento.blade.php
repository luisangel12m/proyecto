<!DOCTYPE html>
<html>
<head>
    <title>Seguimiento de Especímenes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container">
    <h2>Seguimiento de Especímenes</h2>
    <p>Coloca el Folio</p>

    <input class="w3-input w3-border w3-padding" type="text" placeholder="Buscar por folio" id="myInput" onkeyup="myFunction()">

    <table class="w3-table-all w3-margin-top" id="myTable">
        <tr>
            <th style="width:50%;">Folio</th>
            <th style="width:50%;">Nombre</th>
            <th style="width:50%;">Estado</th>
        </tr>
        @foreach($especimenes as $especimen)
        <tr>
            <td>{{ $especimen->solicitud->folio ??'No hay ningun folio' }}</td>
            <td>{{ $especimen->Nombre }}</td>
            <td>{{ $especimen->estado }}</td>
        </tr>
        @endforeach
    </table>
</div>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</body>
</html>
