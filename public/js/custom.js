// mengambil id masing masing value yang di butuhkan
$(document).ready(function () {
 let quantity = $("#quantity").val();
 let harga = $("#harga").val();
 let total = $("#total").val();
 let subtotal = parseInt(quantity) * parseInt(harga);

 if (quantity > 0) {
  $("#total").val(subtotal);
 }

 // if (quantity > 0) {
 //  $("#minus").prop("disabled", "false");
 // }

 $("#plus").click(function () {
  let quantity = $("#quantity").val();
  let penjumlahan = parseInt(quantity) + parseInt(1);
  $("#quantity").val(penjumlahan);

  // let harga = $("#harga").val();
  let subtotal = parseInt(penjumlahan) * parseInt(harga);
  $("#total").val(subtotal);

  if (penjumlahan > 0) {
   $("#minus").prop("disabled", false);
  }
 });

 $("#minus").click(function () {
  let quantity = $("#quantity").val();
  let penjumlahan = parseInt(quantity) - parseInt(1);
  $("#quantity").val(penjumlahan);

  // let harga = $("#harga").val();
  let subtotal = parseInt(penjumlahan) * parseInt(harga);
  $("#total").val(subtotal);

  if (penjumlahan <= 0) {
   $("#minus").prop("disabled", true);
  }
 });
});

$(document).ready(function () {
 $("#UangDiterima").on("input", function () {
  let Ongkir = $("#Ongkir").val();
  let TotalPembayaran = $("#TotalPembayaran").val();
  let UangDiterima = $("#UangDiterima").val();
  let result = parseInt(UangDiterima) - parseInt(TotalPembayaran);

  if (UangDiterima < 0) {
   $("#Kembalian").val(0);
  } else {
   $("#Kembalian").val(result);
  }
 });
});
