<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Penelitian DTPS</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3b2');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th rowspan='2' class="align-middle">Sumber Pembiayaan</th>
                <th colspan='3' class="align-middle">Jumlah Judul Penelitian</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control-plaintext" name="sumber[]" id="sumber" value="Perguruan tinggi dan mandiri" readonly></td>
                <td><input type="text" class="form-control" name="ts2[]" id="ts21"></td>
                <td><input type="text" class="form-control" name="ts1[]" id="ts11"></td>
                <td><input type="text" class="form-control" name="ts[]" id="ts1"></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control-plaintext" name="sumber[]" id="sumber" value="Lembaga dalam negeri (diluar PT)" readonly></td>
                <td><input type="text" class="form-control" name="ts2[]" id="ts22"></td>
                <td><input type="text" class="form-control" name="ts1[]" id="ts12"></td>
                <td><input type="text" class="form-control" name="ts[]" id="ts2"></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control-plaintext" name="sumber[]" id="sumber" value="Lembaga luar negeri" readonly></td>
                <td><input type="text" class="form-control" name="ts2[]" id="ts23"></td>
                <td><input type="text" class="form-control" name="ts1[]" id="ts13"></td>
                <td><input type="text" class="form-control" name="ts[]" id="ts3"></td>
            </tr>
        </tbody>
        </table>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        </div>
    </div>
</form>

<script>
    $(document).ready(function(e){
        var number;
        var ts2 = "#ts2";
        var ts1 = "#ts1";
        var ts ="#ts"
        for (number = 1; number < 4 ; number++) {
            bootstrapValidate(ts2+number, 'required:isian kosong');
            bootstrapValidate(ts1+number, 'required:isian kosong');
            bootstrapValidate(ts+number, 'required:isian kosong');
        }
    });
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
