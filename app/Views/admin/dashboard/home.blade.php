@extends('layout.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bảng điều khiển</h1>
    </div>

    



</div>

<script>
    function thunhapMonth(month) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("earnMonth").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "<?= BASE_URL_ADMIN ?>?act=earn-month&month=" + month, true);
        xmlhttp.send();
    }
    function thunhapYear(year) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("earnYear").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "<?= BASE_URL_ADMIN ?>?act=earn-year&year=" + year, true);
        xmlhttp.send();
    }
</script>
@endsection