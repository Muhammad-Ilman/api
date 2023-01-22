// const anggota = {
//   nama: "ilman",
//   kelas: 10,
//   agama: 'ilman'
// }

// console.log(JSON.stringify(anggota))


// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     let anggota = JSON.parse(this.responseText);

//     console.log(anggota);
//   }
// }
// xhr.open('GET', 'test.json', true);
// xhr.send();

$.getJSON('test.json', function(data) {
  console.log(data);
});