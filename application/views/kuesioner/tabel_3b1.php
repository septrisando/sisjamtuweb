<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Pengakuan/Rekognisi DTPS</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3b1');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th class="align-middle">Nama Dosen</th>
                <th class="align-middle">Bidang Keahlian</th>
                <th class="align-middle">Rekognisi dan Bukti Pendukung</th>
                <th class="align-middle" style="width:160px">Tingkat</th>
                <th class="align-middle" style="width:160px">Tahun</th>
                <th class="align-middle" style="width:56px">Aksi</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Nama Dosen"></td>
                <td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>
                <td><input type="text" class="form-control" name="rekognisi[]" id="rekognisi"></td>
                <td><select class="form-control" name="tingkat[]" id="tingkat">
                        <option value="1">Wilayah</option>
                        <option value="2">Nasional</option>
                        <option value="3">Internasional</option>
                        <option selected hidden="true">pilih</option>
                    </select></td>
                <td><input type="number" min="1900" class="form-control" name="tahun[]" id="tahun"></td>
                <td><a hidden="true" href="#">X</a></td>
            </tr>
        </tbody>
        </table>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            <button type="button" id="add" class="btn btn-success">Tambah Baris</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function(e){
        var maxRows = 10;
        var x = 1;

        //Add baris ke formulir
        $("#add").click(function(e){
            if(x <= maxRows){
                $("#isian").append(make_html(x));
                bootstrapValidate('#nama'+x, 'required:isian kosong');
                bootstrapValidate('#keahlian'+x, 'required:isian kosong');
                bootstrapValidate('#rekognisi'+x, 'required:isian kosong');
                bootstrapValidate('#tingkat'+x, 'required:isian kosong');
                bootstrapValidate('#tahun'+x, 'required:isian kosong');
                x++;
            }
        });

        //Hapus baris dari formulir
        $("#isian").on('click','#remove',function(e){
            $(this).closest('tr').remove();
            x--;
        })
    });

    function make_html(id){
        return  '<tr>'+
                    '<td><input type="text" class="form-control" name="nama[]" id="nama'+id+'" placeholder="Nama Dosen"></td>'+
                    '<td><input type="text" class="form-control" name="keahlian[]" id="keahlian'+id+'"></td>'+
                    '<td><input type="text" class="form-control" name="rekognisi[]" id="rekognisi'+id+'"></td>'+
                    '<td><select class="form-control" name="tingkat[]" id="tingkat'+id+'">'+
                            '<option value="1">Wilayah</option>'+
                            '<option value="2">Nasional</option>'+
                            '<option value="3">Internasional</option>'+
                            '<option selected hidden="true">pilih</option>'+
                        '</select></td>'+
                    '<td><input type="number" min="1900" class="form-control" name="tahun[]" id="tahun'+id+'"></td>'+
                    '<td class="text-center"><a href="#" id="remove"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>'+
                '</tr>';
    }

    bootstrapValidate('#nama', 'required:isian kosong')
    bootstrapValidate('#keahlian', 'required:isian kosong')
    bootstrapValidate('#rekognisi', 'required:isian kosong')
    bootstrapValidate('#tingkat', 'required:isian kosong')
    bootstrapValidate('#tahun', 'required:isian kosong')
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
