function kirimWA(nomor, nama, email, alamat, pesan) {
  // https://api.whatsapp.com/send?phone=6281122334456&text=Halo%20Selamat%20Datang%20Di%20Toko%20Kami
  var baseLink = "https://api.whatsapp.com/send?";
  nama = "Hai min, saya " + nama + ", ";
  alamat = "dari " + alamat + "%0A";
  email = "Email : " + email + "%0A%0A";
  msg = nama + alamat + email + pesan;
  var msg = msg.replace(/(?:\r\n|\r|\n)/g, '%0A');
  var msg = msg.replace(/\s/g, '%20');
  var link = baseLink + "phone=" + nomor + "&text=" + msg;

  return link
}