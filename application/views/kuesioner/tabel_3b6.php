<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Karya Ilmiah DTPS yang Disitasi</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3b6');?>" method="post">
    
    <div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th class="align-middle">Nama Dosen</th>
                <th class="align-middle">Judul Artikel yang Disitasi</th>
                <th class="align-middle" style="width:160px">Jumlah Sitasi</th>
                <th class="align-middle" style="width:56px">Aksi</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Nama"></td>
                <td><input type="text" class="form-control" name="judul[]" id="judul" placeholder="Judul"></td>
                <td><input type="number" min="0" class="form-control" name="sitasi[]" id="sitasi"></td>
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
                bootstrapValidate('#judul'+x, 'required:isian kosong');
                bootstrapValidate('#sitasi'+x, 'required:isian kosong');
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
                    '<td><input type="text" class="form-control" name="nama[]" id="nama'+id+'" placeholder="Nama"></td>'+
                    '<td><input type="text" class="form-control" name="judul[]" id="judul'+id+'" placeholder="Judul"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="sitasi[]" id="sitasi'+id+'"></td>'+
                    '<td class="text-center"><a href="#" id="remove"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>'+
                '</tr>';
    }

    bootstrapValidate('#nama', 'required:isian kosong')
    bootstrapValidate('#judul', 'required:isian kosong')
    bootstrapValidate('#sitasi', 'required:isian kosong')
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
