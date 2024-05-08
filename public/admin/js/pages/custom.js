
  
   // Hàm thực hiện tìm kiếm và hiển thị kết quả tương ứng
   function searchArtists() {
    // Lấy giá trị từ ô nhập liệu
    var searchText = document.getElementById('searchArtistsList').value.toLowerCase();

    // Lặp qua từng hàng trong bảng để tìm kiếm
    var rows = document.querySelectorAll('#productnav-all tbody tr');
    rows.forEach(function(row) {
        var artistName = row.cells[1].innerText.toLowerCase(); // Lấy tên nhạc sĩ từ cột thứ 2
        // Kiểm tra xem tên nhạc sĩ có chứa từ khóa tìm kiếm không
        if (artistName.includes(searchText)) {
            row.style.display = ''; // Hiển thị hàng nếu tìm thấy kết quả
        } else {
            row.style.display = 'none'; // Ẩn hàng nếu không tìm thấy kết quả
        }
    });
}

// Gắn sự kiện cho ô nhập liệu khi người dùng nhập vào
document.getElementById('searchArtistsList').addEventListener('input', searchArtists);