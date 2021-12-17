// event ketika keyword ditulis
// $("#keyword").on("keyup", function () {
//   $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());
// });

// jika script di taruh di head, maka jadinya
// $(document).ready(function () {
//   $("#tombol-cari").hide();
//   // event ketika keyword ditulis
//   $("#keyword").on("keyup", function () {
//     $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());
//   });
// });

// shorthand nya
$(function () {
  // menghilangkan tombol cari
  $("#tombol-cari").hide();

  // event ketika keyword ditulis
  $("#keyword").on("keyup", function () {
    $(".loader").show();

    //ajax menggunakan load
    //$("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

    // $.get
    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $(".loader").hide();
    });
  });
});
