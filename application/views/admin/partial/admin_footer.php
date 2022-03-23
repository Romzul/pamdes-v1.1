  <!-- Essential javascripts for application to work-->
  <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/dataTables.bootstrap.min.js"></script>

  <script>
$(function() {
    $('button[id="cek"]').prop('disabled', true);
    // $('input[id="password2"]').prop('hidden', true);
    // $('input[id="form_paslama"]').prop('hidden', true);
    $('#nama_petugas').on('input', function(e) {
        if (this.value.length >= 3) {
            $('button[id="cek"]').prop('disabled', false);
            // $('input[id="password2"]').prop('hidden', false);
            // $('input[id="form_paslama"]').prop('hidden', false);
        } else {
            $('button[id="cek"]').prop('disabled', true);
            $('input[id="password2"]').prop('hidden', true);
            $('input[id="form_paslama"]').prop('hidden', true);
        }
    });
});
$(function() {
    $('button[id="cek"]').prop('disabled', true);
    // $('input[id="password2"]').prop('hidden', true);
    // $('input[id="form_paslama"]').prop('hidden', true);
    $('#username').on('input', function(e) {
        if (this.value.length >= 5) {
            $('button[id="cek"]').prop('disabled', false);
            // $('input[id="password2"]').prop('hidden', false);
            // $('input[id="form_paslama"]').prop('hidden', false);
        } else {
            $('button[id="cek"]').prop('disabled', true);
            // $('input[id="password2"]').prop('hidden', true);
            // $('input[id="form_paslama"]').prop('hidden', true);
        }
    });
});
$(function() {
    $('button[id="cek"]').prop('disabled', true);
    // $('input[id="password2"]').prop('hidden', true);
    // $('input[id="form_paslama"]').prop('hidden', true);
    $('#password_baru').on('input', function(e) {
        if (this.value.length >= 5) {
            $('button[id="cek"]').prop('disabled', false);
            // $('input[id="password2"]').prop('hidden', false);
            // $('input[id="form_paslama"]').prop('hidden', false);
        } else {
            $('button[id="cek"]').prop('disabled', true);
            // $('input[id="password2"]').prop('hidden', true);
            // $('input[id="form_paslama"]').prop('hidden', true);
        }
    });
});
// $(function () {
//     $('button[id="cek"]').prop('disabled', true);
//     $('input[id="password2"]').prop('hidden', true);
//     $('input[id="form_paslama"]').prop('hidden', true);
//     $('#password_baru').on('input', function (e) {
//         if (this.value.length >= 6) {
//             $('button[id="cek"]').prop('disabled', false);
//             $('input[id="password2"]').prop('hidden', false);
//             $('input[id="form_paslama"]').prop('hidden', false);
//         } else {
//             $('button[id="cek"]').prop('disabled', true);
//             $('input[id="password2"]').prop('hidden', true);
//             $('input[id="form_paslama"]').prop('hidden', true);
//         }
//     });
// });
// $(function () {
//     $('button[id="cek"]').prop('disabled', true);
//     $('#password').on('input', function (e) {
//         if (this.value.length >= 6) {
//             $('button[id="cek"]').prop('disabled', false);
//         } else {
//             $('button[id="cek"]').prop('disabled', true);
//         }
//     });
// });
  </script>

  <script type="text/javascript">
// $('#sampleTable').DataTable();
$('#sampleTable').dataTable({
    "searching": false
});
$('#sampleTable2').dataTable({
    "searching": false
});
$('#tabel_rw').dataTable({
    "searching": false,
    "pageLength": 5,
    "bLengthChange": false,
    "info": false
});
$('#tabel_desa').dataTable({
    "searching": false,
    "pageLength": 5,
    "bLengthChange": false,
    "info": false
});
$('#tabel_kecamatan').dataTable({
    "searching": false,
    "pageLength": 5,
    "bLengthChange": false,
    "info": false
});
  </script>
  <script>
$('#tabel_histori').dataTable({
    "searching": false,
    "pageLength": 3,
    "bLengthChange": false,
    "info": false
});
$('#tabel_jumdes').dataTable({
    "searching": false,
    "pageLength": 3,
    "bLengthChange": false,
    "info": false
});
  </script>

  <script>
function calculateTotal() {
    let unit_price = {
        air: parseInt($("#harga").val())
    };
    let unit_bebanya = {
        beban: parseInt($("#bebanya").val())
    };
    let unit_pma = {
        pma: parseInt($("#pma").val())
    };
    let biaya_perusahaan = {}
    let item_price = {}
    let total = {}

    biaya_perusahaan = (unit_bebanya.beban + unit_pma.pma)
    item_price = ($("#meter_akhir").val() - $("#meter_awal").val())
    total = (item_price * unit_price.air)
    $("#pemakaian").val(item_price);
    $("#total_tagihan").val(total + biaya_perusahaan);
    // $("#total_tagihan").val(biaya_perusahaan);


}

$(function() {
    $(".qty").on("change keyup", calculateTotal)
})
  </script>

  <script type="text/javascript">
$('#mudak').dataTable({
    "pageLength": 2,
    "info": false,
    "bLengthChange": false
});
// function in berfungsi untuk memindahkan data kolom yang di klik menuju text box
function masuk(txt, data1, data2, data3, data4) {
    document.getElementById('id_pelanggan').value = data1; // ini berfungsi mengisi value  yang ber id textbox
    document.getElementById('nama_pelanggan').value = data2;
    document.getElementById('bulan_akhir').value = data3;
    document.getElementById('meter_awal').value = data4;
}
  </script>
  <script type="text/javascript">
$(document).ready(function() {
    // Initialize
    $('#datepicker').datepicker({
        "keyboardNavigation": false,
        "format": " yyyy",
        "viewMode": "years",
        "minViewMode": "years"
    });

});
  </script>
  <script type="text/javascript">
$(document).ready(function() {
    // Initialize
    $('#datepicker2').datepicker({
        "keyboardNavigation": false,
        "format": " yyyy",
        "viewMode": "years",
        "minViewMode": "years"
    });

});
  </script>

  <script>
const showDialog = () => {
    document.getElementById('dialog').classList.add('show')
    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    const body = document.body;
    body.style.height = '100vh';
    body.style.overflowY = 'hidden';
};
const closeDialog = () => {
    const body = document.body;
    const scrollY = body.style.top;
    body.style.position = '';
    body.style.top = '';
    body.style.height = '';
    body.style.overflowY = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    document.getElementById('batal').classList.remove('show');
}
window.addEventListener('scroll', () => {
    document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
});
  </script>
  </body>

  </html>
