$(document).ready(function () {
 let nilai = $("#quantity").val();
 let harga = $("#harga").val();
 let total = $("#total").val();
 let subtotal = parseInt(nilai) * parseInt(harga);

 if (nilai > 0) {
  $("#total").val(subtotal);
 }

 // if (nilai > 0) {
 //  $("#minus").prop("disabled", "false");
 // }

 $("#plus").click(function () {
  let nilai = $("#quantity").val();
  let penjumlahan = parseInt(nilai) + parseInt(1);
  $("#quantity").val(penjumlahan);

  // let harga = $("#harga").val();
  let subtotal = parseInt(penjumlahan) * parseInt(harga);
  $("#total").val(subtotal);

  if (penjumlahan > 0) {
   $("#minus").prop("disabled", false);
  }
 });

 $("#minus").click(function () {
  let nilai = $("#quantity").val();
  let penjumlahan = parseInt(nilai) - parseInt(1);
  $("#quantity").val(penjumlahan);

  // let harga = $("#harga").val();
  let subtotal = parseInt(penjumlahan) * parseInt(harga);
  $("#total").val(subtotal);

  if (penjumlahan <= 0) {
   $("#minus").prop("disabled", true);
  }
 });
});
